// nav bar
$(document).ready(function() {
    $(document).foundation();

    $('body').flowtype({
        minFont : 12,
        maxFont : 40
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
    console.log('hey hey');

    // Ajax Call for Contact Page
        $('#submit').click(function(e){
            $(document).foundation('alert','events');
            var data = $('#contactForm').serialize;
            $.ajax({
               type: 'POST',
               url: '/postContact',
               data: data,
               datatype: 'jsonp',
               success: function(data){
                   alert("Your message was sent! We will get back to you soon!");
                   console.log(data);
               },
               failure: function(data){
                   alert("There was a problem submitting your message, please try again soon");
               }
            });
            e.preventDefault();
        });
});
