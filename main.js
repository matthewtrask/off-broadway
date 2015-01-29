<script>

// var url = window.location;
// // Will only work if string in href matches with location
// $('ul.nav a[href="'+ url +'"]').parent().addClass('active');

// // Will also work for relative and absolute hrefs
// $('ul.nav a').filter(function() {
//     return this.href == url;
// }).parent().addClass('active');

$(document).ready(function(){
    $('.carousel').carousel({
    	interval: 3000
    });
  });
</script>

<script type="text/javascript">
$(document).ready(function(){
    $(".dropdown-toggle").dropdown();
});  
</script>

// <script>
// $(document).ready(function(){
//   $(".hide").click(function(){
//     $(this).show();
//   });
// });
<script>

$( "#click_me" ).click(function() {
  $( "#hide_div" ).slideToggle( "slow", function() {
    // Animation complete.
  });
});


</script>


$(document).ready(function () {
    $(".click_me").on('click', function () {
        var $faq = $(this).next(".hide_me");
        $ans.slideToggle();
        $(".hide_me").not($faq).slideUp();
    });
});


