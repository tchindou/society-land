import "./bootstrap";

$(document).ready(function () {
    var prevScrollpos = window.scrollY;
    $(window).scroll(function () {
        var currentScrollPos = window.scrollY;
        if (prevScrollpos > currentScrollPos) {
            $("#navbar").fadeIn();
        } else {
            $("#navbar").fadeOut();
        }
        prevScrollpos = currentScrollPos;
    });
});
