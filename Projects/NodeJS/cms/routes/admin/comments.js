const express = require('express');
const router = express.Router();
const Post = require('../../models/Post');
const Comment = require('../../models/Comment');

router.all('/*', (req, res, next) => {
    req.app.locals.layout = 'admin';
    next();
});

router.get('/index', async (req, res) => {
    try {
        // console.log(req.user.id);
        const commentData = await Comment.find({user : req.user.id}).populate('user');
        console.log(commentData);
        if (!commentData || commentData.length === 0) {
            console.log("Comments Not Found");
        }

        res.render('admin/comments', { comments: commentData });
    } catch (error) {
        console.error(error);
    }


    // try {
    //     const comments = await Comment.find().populate('user');
    //     res.render('admin/comments', { comments: comments });
    // } catch (error) {
    //     console.error(error);
    //     res.status(500).send('Internal Server Error');
    // }
});

router.post('/', async (req, res) => {
    try {
        const postResult = await Post.findOne({_id:req.body.post_id});
        if (!postResult) {
            console.log("Post Not Found");
        }
         //res.send(req.user._id);
        const newComment = new Comment({
            user : req.user.id,
            body : req.body.body
        });
        postResult.comments.push(newComment);
        await postResult.save();
        await newComment.save();
        req.flash('success_messgae',"Your comment will be reviewed in a second.");
        res.redirect(`/post/${postResult._id}`);
    } catch (error) {
        console.error(error);
    }
    // Post.findOne({_id:req.body.post_id}).then((result) => {
    //     res.send(result);
    // }).catch((err) => {
    //     console.log(err);
    // });
    // const newComment = new Comment({

    // })
});


router.delete('/delete/:id', async (req, res)=> {
    try {
        const commentData = await Comment.deleteOne({_id : req.params.id});
        const postData = await Post.findOneAndUpdate(
            { comments: req.params.id },
            { $pull: { comments: req.params.id } },
            { new: true } // Add this option if you want to return the updated document
        );
        if (!postData) {
            console.log("Post Not Found");
        }
        res.redirect('/admin/comments/index');
    } catch (error) {
        console.error(error);
        res.status(500).send('Internal Server Error');
    }
});

router.post('/approve-comment', async (req, res) => {
    try {
       const commentStatus = await Comment.findByIdAndUpdate(
         req.body.id,
         { $set: { approveComment: req.body.approveComment } },
         { new: true }
       );
   
       if (!commentStatus) {
         console.log('Unable to find or update comment status');
         throw new Error('Unable to find or update comment status');
       }
   
       // The update was successful, return true or the updated comment status
       res.send(commentStatus.approveComment);
    } catch (error) {
       res.status(500).send(error);
       //console.error('Error updating comment status:', error);
       // throw error; // Propagate the error to the calling function
    }
   });

module.exports = router;