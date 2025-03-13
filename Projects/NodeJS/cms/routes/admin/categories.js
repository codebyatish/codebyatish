
const express = require('express');
const router = express.Router();
const Category = require('../../models/Category');
const {isEmpty,uploadPath} = require('../../helpers/upload-helper');
const {userAuthenticated} = require('../../helpers/authentication');
const fs = require('fs');

router.all('/*', (req, res, next) => {
    req.app.locals.layout = 'admin';
    next();
});

router.get('/index', (req, res) => {
    Category.find().then(categories => {
        res.render('admin/categories', { categories: categories });
    });
});

// INSERT DATA
router.post('/store', (req, res) => {
    let errors = [];
    if (!req.body.name) {
        errors.push({message : 'Please add a category name'});
    }

    if (errors.length > 0) {
        res.render('admin/categories/index', {errors:errors});
    }else{

        const newCategory = new Category({
            name : req.body.name,
        });
    
        newCategory.save().then(saveCategory => {
           // console.log(saveCategory);
            req.flash('success_messgae',"Category "+saveCategory.name+" was created successfully.");
            res.redirect('/admin/categories/index');
        }).catch(validator => {
            res.render('admin/categories/index', {errors:validator.errors});
            console.log(validator.errors);
        });
    }

});


// GET DATA FOR EDIT
router.get('/edit/:id', (req, res) => {
        Category.findOne({_id : req.params.id}).then(category => {
            res.render('admin/categories/edit', {category : category});
        }).catch(error => {
            console.log(error);
        })
});


// UPDATE DATA
router.put('/update/:id', (req, res) => {
    Category.findOne({_id : req.params.id}).then(category => {
        category.name = req.body.name;

        category.save().then(updateCategory => {
            req.flash('success_messgae',"Category "+updateCategory.name+" was updated successfully.");
            res.redirect('/admin/categories/index');
        })
        
    }).catch(error => {
        console.log(error);
    });
});

// DELETE DATA
router.delete('/delete/:id', (req, res) => {

    Category.findOne({ _id: req.params.id }).then((category) => {
        if (category) {
            category.deleteOne();
            req.flash('success_messgae',"Category "+category.name+" deleted successfully.");
            res.redirect('/admin/categories/index');
        } else {
            console.log('Category not found');
        }
    }).catch((err) => {
        console.log('Error finding category: ' + err);
    });

});


module.exports = router;