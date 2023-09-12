const { data } = require('jquery');

global.$ = global.jQuery = require('jquery');

(function ($) {
    "use strict";

    const devBackTop = () => {
        console.log('ready')
    }

    $(window).on("scroll", function () {

    });

    $(document).ready(function () {
        devBackTop()
    })

})(jQuery); 