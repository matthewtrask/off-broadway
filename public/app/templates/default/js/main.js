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

    // Ajax Call for Contact Page
        $('button#submitForm').click(function(e){
            $(document).foundation('alert','events');
            var name = $('input#name').val();
            var phone = $('input#phone').val();
            var email = $('input#email').val();
            var message = $('textarea#message').val();
            var data = {name: name, phone: phone, email: email, message: message};
            e.preventDefault();
            $.ajax({
               type: 'POST',
               url: 'postContact',
               data: data,
               datatype: 'jsonp',
               async: true,
               cache: false,
               success: function(data){
                   document.getElementById('contactForm').reset();

               },
               failure: function(data){

               }
            });

            return false;
        });
});
