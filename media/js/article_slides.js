/**
 * @package     mod_dd-slider
 * @author      Thomas Winterling
 * @email       info@winterling-labs.com
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

; var DD_Article_Slides = (function($, document, undefined) {

    console.log("workds");

    var init = function() {

        var activeElement = 1;
        var countElements = $('#dd_article_slides .article_slide').length;

        // Left Slide Event Handler
        $("#slide-left").on("click", function(){
            slideleft();
        });

        var slideleft = function () {

            // Reset if all elements are through
            if(activeElement === 1){
                activeElement = countElements + 1;
            }

            activeElement--;

            $('#article_slide_active').html(activeElement);

            $('#dd_article_slides .article_slide').hide();
            $('#dd_article_slides_fields' + activeElement).show();
        };

        // Right Slide Event Handler
        $("#slide-right").on("click", function(){
            slideright();
        });

        var slideright = function () {

            // Reset if all elements are through
            if(activeElement === countElements){
                activeElement = 0;
            }

            activeElement++;

            $('#article_slide_active').html(activeElement);

            $('#dd_article_slides .article_slide').hide();
            $('#dd_article_slides_fields' + activeElement).show();
        };


        var show_slide_info = true;

        $(".article_slide_info_toggle").on('click', function () {

            if(show_slide_info === true){
                show_slide_info = false;
                $('.article_slide_info').hide();
            } else {
                show_slide_info = true;
                $('.article_slide_info').show();
            }
        });

    };

    return {
        init:init
    };

}(jQuery, document, undefined));


(function($) {
    $(function()
    {
        DD_Article_Slides.init();
    });
})(jQuery);