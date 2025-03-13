const express = require("express");
const router = express.Router();
const Post = require("../../models/Post");
const { faker } = require("@faker-js/faker");
const {userAuthenticated} = require('../../helpers/authentication');
const Category = require("../../models/Category");
const Comment = require("../../models/Comment");

router.all("/*", (req, res, next) => {
  req.app.locals.layout = "admin";
  next();
});

// router.get("/", async (req, res) => {
//   const postCount = await Post.count();
//   const categoriesCount = await Category.count();
//   const commentCount = await Comment.count();
//   if (!postCount) {
//     console.log('Post count is not found');
//   }
//   res.render("admin/index", {postCount : postCount, categoriesCount : categoriesCount, commentCount : commentCount});
// });

router.get("/", async (req, res) => {
  try {
    const [postCount, categoriesCount, commentCount] = await Promise.all([
      Post.count(),
      Category.count(),
      Comment.count(),
    ]);

    res.render("admin/index", {
      postCount,
      categoriesCount,
      commentCount,
    });
  } catch (error) {
    console.error("Error fetching counts:", error);
  }
});


router.get("/posts", (req, res) => {
  res.render("admin/posts");
});

router.get("/create_post", (req, res) => {
  res.render("admin/create_post");
});


router.post("/generate-fake-posts", async (req, res) => {
  for (let index = 0; index < req.body.amount; index++) {
    
    try {
        const post = {
            title: faker.lorem.sentence(),
            status: "public",
            post_image : faker.image.url(900, 300),
            allowComments: faker.datatype.boolean(),
            body: faker.lorem.paragraph(5)
        }
        const newPost = new Post(post);
        await newPost.save();
    } catch (error) {
        console.error("Error saving post:", error);
        res.status(500).send("Error saving post");
    }

    // newPost
    //   .save()
    //   .then((savedPost) => {
    //     res.redirect("/admin/posts/index");
    //   })
    //   .catch((err) => {
    //     console.error("Error saving post:", err);
    //   });
  }
  res.redirect("/admin/posts/index");
});




module.exports = router;
