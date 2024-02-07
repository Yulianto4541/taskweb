$(document).ready(function () {
    $('.weather').slick({
        infinite: true,
        slidesToShow: 1,
        dots: true,
        centerMode: true,
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 5000
    });
});