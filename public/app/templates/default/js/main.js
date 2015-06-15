// nav bar
$(document).ready(function() {
    $('[data-toggle=offcanvas]').click(function() {
        $('.row-offcanvas').toggleClass('active');
    });
});

//scroll arrow
$(document).ready(function(){
    var offset = 250;
    var duration = 300;
    $(window).scroll(function(){
        if($(this).scrollTop() > offset) {
            $('.back-to-top').fadeIn(duration);
        } else {
            $('.back-to-top').fadeOut(duration);
        }
    });

    $('.back-to-top').click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop: 0}, duration);
        return false;
    });
});

//Questions expanded
$(document).ready(function () {
    $(".click_me").on('click', function () {
        var $faq = $(this).next(".hide_div");
        $faq.slideToggle();
        $(".hide_div").not($faq).slideUp();
    });
});
