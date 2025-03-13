const path = require('path');

module.exports = {
    isEmpty: function(object){
        for (const key in object) {
            return (object.hasOwnProperty(key)) ? false : true;
        }
    },

    uploadPath:path.join(__dirname,'../public/uploads/')
}