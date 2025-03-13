const { mongoose } = require("mongoose");
const Schema = mongoose.Schema;

const PostSchema = new Schema({
    user : {
        type : Schema.Types.ObjectId,
        ref : 'User'
    },
    category : {
        type : Schema.Types.ObjectId,
        ref : 'Category'
    },
    title : {
        type : String,
        required : true
    },
    slug : {
        type : String
    },
    post_image : {
        type : String
    },
    status : {
        type : String,
        default : 'public'
    },
    allowComments : {
        type : Boolean,
        default : true,
        required : true
    },
    body : {
        type : String,
        required : true
    },
    date : {
        type : Date,
        default : Date.now()
    },
    comments : [{
        type : Schema.Types.ObjectId,
        ref : 'Comment'
    }]
});
module.exports = mongoose.model('Post', PostSchema);

