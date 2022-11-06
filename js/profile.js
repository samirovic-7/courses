const rev = ScrollReveal({
    orgin: 'top',
    distance: '40px',
    duration: 2000,
    reset: true,
});
rev.reveal(`.home-content,.left-about,.right-about,.frontend,.backend,.work,.contact-form`, {
    interval: 200
});
$(document).ready(function() {
    $('#bar-animation').click(function() {
        $('.menu').addClass('comeIn');
        $('body').css('overflow', 'hidden');
    });
    $('#cross').click(function() {
        $('.menu').removeClass('comeIn');
        $('body').css('overflow', 'visible');
    });
    $('li').click(function() {
        $('.menu').removeClass('comeIn');
        $('body').css('overflow', 'visible');
    });
});