$(document).ready(function() {

function stickyNavigation() {

    var body = $("body");

    if ($(window).scrollTop()-5 >= navTop) {
        body.css("padding-top", nav.outerHeight() + "px");
        body.addClass("fixedNav");
    } else {
        body.css("padding-top", 0);
        body.removeClass("fixedNav");
    }
}
});