const moment = require('moment');

module.exports = {
    select: function(selected, options) {
        //return options.fn(this).replace(new RegExp(' value=\"'+selected+'\"'), '$& selected="selected"');
        return options.fn(this).replace(' value="' + selected + '"', ' value="' + selected + '" selected="selected"');
    },

    generateDate: function(date, format){
        return moment(date).format(format);
    },

    paginate : function(options){
        let html = ``;
        if (options.hash.current === 1) {
            html += `<li class="page-item disabled"><a class="page-link" href="#">First</a></li>`;
        }else{
            html += `<li class="page-item"><a class="page-link" href="?page=1">First</a></li>`;
        }

        let i = (Number(options.hash.current) > 5 ? Number(options.hash.current) - 4 : 1);

        if (i != 1) {
            html += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
        }

        for (; i <= (Number(options.hash.current) + 4) && i <= Number(options.hash.pages); i++) {
            if (options.hash.current === i) {
                html += `<li class="page-item active"><a class="page-link">${i}</a></li>`;
            }else{
                html += `<li class="page-item"><a class="page-link" href="?page=${i}">${i}</a></li>`;
            }

            if (i === Number(options.hash.current) + 4 && i < options.hash.pages) {
                html += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
            }
        }

        
        if (options.hash.current === options.hash.pages) {
            html += `<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>`;
        }else{
            html += `<li class="page-item"><a class="page-link" href="?page=${options.hash.pages}">Last</a></li>`;
        }


        // if (options.hash.current === options.hash.pages) {
        //     html += `<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>`;
        // }else{
        //     html += `<li class="page-item"><a class="page-link" href="?page=${options.hash.pages}">Last</a></li>`;
        // }

        return html;
    }
}