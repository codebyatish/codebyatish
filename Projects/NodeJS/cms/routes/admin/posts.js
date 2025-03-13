
const express = require('express');
const router = express.Router();
const Post = require('../../models/Post');
const Category = require('../../models/Category');
const {isEmpty,uploadPath} = require('../../helpers/upload-helper');
const {userAuthenticated} = require('../../helpers/authentication');
const fs = require('fs');

router.all('/*', (req, res, next) => {
    req.app.locals.layout = 'admin';
    next();
});

router.get('/index', (req, res) => {
    Post.find().populate('category').then(posts => {
        res.render('admin/posts', { posts: posts });
    });
});


router.get('/my-posts', (req, res) => {
    Post.find({user : req.user.id}).populate('user').then(posts => {
        // console.log(req.user.id);
        res.render('admin/posts/my-posts', { posts: posts });
    });
});

router.get('/create', (req, res) => {
    Category.find().then(categories => {
        res.render('admin/posts/create', {categories : categories});
    }).catch(err => {
        console.log(err);
    })
});


// INSERT DATA
router.post('/store', (req, res) => {
    let errors = [];
    if (!req.body.title) {
        errors.push({message : 'Please add a title'});
    }else if(!req.body.body){
        errors.push({message : 'Please add a description'});
    }

    if (errors.length > 0) {
        res.render('admin/posts/create', {errors:errors});
    }else{
        let fileName = 'image_1.jpg';
        if (req.files && req.files.post_image) {
            let file = req.files.post_image;
            fileName = Date.now() + '_' + file.name;
            file.mv('./public/uploads/' + fileName, err => {
                if (err) throw err;
            });
        }
        const newPost = new Post({
            user : req.user.id,
            category : req.body.category,
            title : req.body.title,
            status : req.body.status,
            post_image : fileName,
            allowComments : (req.body.allowComments == 'on') ? true : false,
            body : req.body.body
        });
    
        newPost.save().then(savePost => {
           // console.log(savePost);
            req.flash('success_messgae',"Post "+savePost.title+" Was created successfully.");
            res.redirect('/admin/posts/index');
        }).catch(validator => {
            res.render('admin/posts/create', {errors:validator.errors});
            console.log(validator.errors);
        });
    }

    
    // res.send(req.body);
    // res.json({ message: 'Data received successfully!' });
    // res.send('WORKING');
});


// GET DATA FOR EDIT
router.get('/edit/:id', (req, res) => {
    Post.findOne({_id : req.params.id}).then(post => {
        Category.find().then(categories => {
            res.render('admin/posts/edit', {post : post, categories : categories});
        }).catch(err => {
            console.log(err);
        })
    }).catch(error => {
        console.log(error);
    })
});


// UPDATE DATA
router.put('/update/:id', (req, res) => {
    Post.findOne({_id : req.params.id}).then(post => {
        post.user = req.user.id,
        post.category = req.body.category;
        post.title = req.body.title;
        post.status = req.body.status;
        post.allowComments = (req.body.allowComments == 'on') ? true : false;
        post.body = req.body.body;

        if (req.files && req.files.post_image) {
            let file = req.files.post_image;
            let fileName = Date.now() + '_' + file.name;
            post.post_image = fileName;
            file.mv('./public/uploads/' + fileName, err => {
                if (err) throw err;
            });
        }

        post.save().then(updatePost => {
            req.flash('success_messgae',"Post "+updatePost.title+" Was updated successfully.");
            res.redirect('/admin/posts/my-posts');
        })
        
    }).catch(error => {
        console.log(error);
    });
});

// DELETE DATA
router.delete('/delete/:id', (req, res) => {
    Post.findOne({ _id: req.params.id }).populate('comments').then((post) => {
        if (post) {
            const imagePath = uploadPath + post.post_image;
            try {
                fs.unlink(imagePath, (err) => {
                    if (post.comments.length > 0) {
                        post.comments.forEach(comment => {
                            comment.deleteOne();
                        });
                    }
                    post.deleteOne().then((postRemoved) => {
                        req.flash('success_messgae',"Post "+post.title+" deleted successfully.");
                        res.redirect('/admin/posts/my-posts');
                    }).catch((err) => {
                        console.log('Unable to delete post : ' + err);
                    });
                });
            } catch (err) {
                console.log('Unable to delete post image ' + err);
            }
        } else {
            console.log('Post not found');
        }
    }).catch((err) => {
        console.log('Error finding post: ' + err);
    });

});


module.exports = router;