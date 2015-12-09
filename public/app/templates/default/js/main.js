// nav bar
$(document).ready(function() {
    $(document).foundation();

    $('body').flowtype({
        minFont : 12,
        maxFont : 40
    });

    // Main Page Slider
    $('.image').slick({
      dots: false,
      arrows: false,
      autoplay: true,
      fade: true,
      cassEase: 'linear',
      autoplaySpeed: 2500
    });

    $('[data-toggle=offcanvas]').click(function() {
        $('.row-offcanvas').toggleClass('active');
    });

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

    $(".click_me").on('click', function () {
        var $faq = $(this).next(".hide_div");
        $faq.slideToggle();
        $(".hide_div").not($faq).slideUp();
    });

    // Ajax Call for Contact Page
    $('button#submitForm').on('click', function(){
        var mydata = $('form#contactForm').serialize();
        console.log(mydata);
        $.ajax({
           method: 'POST',
           url: '/postContact',
           data: mydata,
           async: true,
           success: function(data){
               document.getElementById('contactForm').reset();
               console.log(data);
           },
           failure: function(data){
                console.log(data);
           }
        });
    });
});
