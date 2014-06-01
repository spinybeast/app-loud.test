/**
 * Created by spiny on 19.11.13.
 */
$(document).ready(function () {
    $("#top").off('click').on('click', function () {
        $('body, html').animate({scrollTop: 0}, 400);
        return false;
    });

});