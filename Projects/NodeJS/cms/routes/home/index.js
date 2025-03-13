
const express = require('express');
const router = express.Router();
const Post = require('../../models/Post');
const Category = require('../../models/Category');
const Comment = require('../../models/Comment');
const User = require('../../models/User');
const bcrypt = require('bcryptjs');
const passport = require('passport');
const LocalStrategy = require('passport-local').Strategy;

router.all('/*', (req, res, next) => {
    req.app.locals.layout = 'home';
    next();
});

router.get('/', async (req, res) => {
    try {
        const perPage = 10;
        const currentPage = parseInt(req.query.page) || 1;

        const posts = await Post.find()
            .skip((perPage * currentPage) - perPage)
            .limit(perPage);
        const postCount = await Post.count();
        const pages = Math.ceil(postCount / perPage);
        const categories = await Category.find();

        posts.forEach(post => {
            if (!post.post_image.startsWith("https://")) {
                post.post_image = "uploads/" + post.post_image;
            }
        });

        res.render('home/index', {
            posts, 
            categories, 
            currentPage, 
            pages
        });

    } catch (err) {
        console.log('Error fetching posts or categories:', err);
    }
});


router.get('/about', (req, res) => {
    res.render('home/about');
});

router.get('/post/:id', (req, res) => {
    Post.findOne({_id:req.params.id})
    .populate({path : 'comments', match :{approveComment : true}, populate: {path : 'user'}})
    .populate('user').then((post) => {
        Category.find().then((categories) => {
            res.render('home/post', {post:post, categories:categories});
        }).catch((err) => {
            console.log('Unable to get categories '+err);
        });
    }).catch((err) => {
        console.log('Unable to get data '+err);
    });
});

router.get('/login', (req, res) => {
    res.render('home/login');
});


passport.use(new LocalStrategy({usernameField : 'email'}, (email, password, done) => {
    // console.log(password);
    User.findOne({email : email}).then((user) => {
        bcrypt.compare(password, user.password, (err, matched)=>{
            if (err) return err;
            if (matched) {
                return done(null, user);
            }else{
                return done(null, false, {message : 'Incorrect Password'});
            }
        })
    }).catch((err) => {
        console.log('User not found '+err);
        return done(null, false, {message : 'No user Found'});
    });
}));

passport.serializeUser((user, done)=>{
    done(null, user.id);
});

// passport.deserializeUser((id, done)=>{
//     $userData = User.findById(id);
//     console.log($userData);
// });

passport.deserializeUser(async (id, done) =>{
    try {
        const userData = await User.findById(id);
        done(null, userData);
    } catch (error) {
        done(err, null);
    }
});


router.post('/login', (req, res, next) => {
    passport.authenticate('local', {
        successRedirect : '/admin',
        failureRedirect : '/login',
        failureFlash : true
    })(req, res, next);

    //res.send('It Works');
});

router.get('/logout', (req, res) => {
    req.logout((err) => {
        if (err) {
            console.log('Unable to logout '+err);
        }
        res.redirect('/login');
    });
})

router.get('/register', (req, res) => {
    res.render('home/register');
});

router.post('/register', (req, res) => {
    const salt = bcrypt.genSaltSync(10);
    const saveUserInformation = async () => {
        try {
            const newUser = new User({
                firstName : req.body.firstName,
                lastName : req.body.lastName,
                email : req.body.email,
                password : bcrypt.hashSync(req.body.password, salt)
            });
            const saveUser = await newUser.save();
            req.flash('success_messgae',"You are registered successfully, please login");
            res.redirect('/login');
        } catch (error) {
            console.log('Unable to inser data '+error);
        }
    };
    let errors = [];
    if (!req.body.firstName) {
        errors.push({message : 'Please enter first name'});
    }else if(!req.body.lastName){
        errors.push({message : 'Please enter last name'});
    }else if(!req.body.email){
        errors.push({message : 'Please enter email address'});
    }else if(!req.body.password){
        errors.push({message : 'Please enter password'});
    }else if(!req.body.passwordConfirm){
        errors.push({message : 'Please enter confirm password'});
    }else if(req.body.password != req.body.passwordConfirm){
        errors.push({message : 'Password & confirm password feilds not matched'});
    }

    if (errors.length > 0) {
        res.render('home/register', {errors : errors,firstName : req.body.firstName,
            lastName : req.body.lastName,
            email : req.body.email});
    }else{
        User.findOne({email : req.body.email}).then(user => {
            if (!user) {
                saveUserInformation();
            }else{
                req.flash('error_messgae',"User is already registered");
                res.redirect('/login');
            }
        })
        // const newUser = new User({
        //     firstName : req.body.firstName,
        //     lastName : req.body.lastName,
        //     email : req.body.email,
        //     password : req.body.password
        // });
        // newUser.save().then(saveUser => {
        //     res.redirect('/register');
        // }).catch(err => {
        //     console.log('Unable to inser data '+err);
        // });
        
    }
});



module.exports = router;