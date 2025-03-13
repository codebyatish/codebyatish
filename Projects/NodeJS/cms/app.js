const express = require('express');
const { engine } = require ('express-handlebars');
const app = express();
const port = 4500;
const path = require('path');
const mongoose =require('mongoose');
const {mongoDBUrl} = require('./config/database');
const bodyParser = require('body-parser');
const {allowInsecurePrototypeAccess} = require('@handlebars/allow-prototype-access');
const Handlebars = require('handlebars');
const methodOverride = require('method-override');
const upload = require('express-fileupload');
const session = require('express-session');
const flash = require('connect-flash');
const passport = require('passport');

mongoose.connect(mongoDBUrl, {useNewUrlParser: true,
useUnifiedTopology: true}).then( db => {
    console.log('MONGO Connected');
}).catch(error => {
    console.log(error);
});


// session load with middlewares
app.use(session({
    secret : 'atishkumarjaiwal',
    resave : true,
    saveUninitialized : true,
    cookie: {
 
        // Session expires after 10 min of inactivity.
        expires: 600000
    }
}));

// Flash messages middleware
app.use(flash());

app.use(passport.initialize());
app.use(passport.session());

// local variables using middlewares
app.use((req,res,next)=>{
    res.locals.success_messgae = req.flash('success_messgae');
    res.locals.error_messgae = req.flash('error_messgae');
    res.locals.user = req.user || null;
    res.locals.error = req.flash('error');
    next();
})


// Load routes
const home = require('./routes/home/index');
const admin = require('./routes/admin/index');
const posts = require('./routes/admin/posts');
const categories = require('./routes/admin/categories');
const comments = require('./routes/admin/comments');

app.use(express.static(path.join(__dirname, 'public')));

// Helpers include
const {select,generateDate,paginate} = require('./helpers/handlebars-helpers');




// For PUT , DELETE methods middleware
app.use(methodOverride('_method'));

// Body parser middleware
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// File upload middleware
app.use(upload());

// Use routes middleware
app.use('/', home);
app.use('/admin', admin);
app.use('/admin/posts', posts);
app.use('/admin/categories', categories);
app.use('/admin/comments', comments);




// Setup view engine
app.engine('handlebars', engine({
    handlebars: allowInsecurePrototypeAccess(Handlebars),
    defaultLayout: 'home',
    helpers: {select:select,generateDate:generateDate,paginate:paginate}
}));
app.set('view engine', 'handlebars');


app.listen(port, () => {
    console.log(`Listening on port ${port}`);
});