/**
 * Created by mtrask on 12/30/15.
 */
    // AJAX For Whats New
$('button#submitWhatsNew').on('click', function(){
    var data = $('form#adminWhatsNew').serialize();
    $.ajax({
        data: data,
        method: "POST",
        url: "postWhatsNew",
        async: true,
        success: function(data){
            console.log(data);
        },
        error: function(data){
            console.log(data);
        }
    });
});


// ajax call for sending changelog messages
$('button#pageSubmit').on('click', function(){
    console.log("sending messages works");
    var data = $('form#changelogForm').serialize();
    $.ajax({
        method: "POST",
        url: 'postChangelog',
        data: data,
        async: true,
        success: function(){
            console.log("Message was sent");
        }
    });
});


//
//$('button#addClass').on('click', function(){
//    console.log('add class button worked');
//    var data = $('form#addClassForm').serialize();
//    console.log(data);
//    $.ajax({
//        method: "POST",
//        data: data,
//        url: "addClasses",
//        async: true,
//        success: function(data){
//            console.log('and away we go!');
//        }
//    });
//});
//
//$('button#editClass').on('click', function(){
//    console.log('edit class button worked');
//    var data = $('form#editClassForm').serialize();
//    $.ajax({
//        method: "POST",
//        data: data,
//        url: "updateClasses",
//        async: true,
//        success: function(data){
//            console.log('away we go again!');
//        }
//    });
//});
//
//
//// current show image uploader
//
//// update faq
//$('#faqSubmit').on('click', function(){
//    var data = $('newFaq').serialize();
//    $.ajax({
//        data: data,
//        method: "POST",
//        async: true,
//        url: "newFaq",
//        success: function(data){
//            console.log(data);
//        }
//    });
//});
//
//// delete faq
//$('.remove').on('click', function(){
//    var id = this.name;
//    var data = id;
//    console.log(data);
//
//    $.ajax({
//        async: true,
//        method: 'POST',
//        cache: false,
//        url: 'removeFaq',
//        data: data,
//        success: function(data){
//            $(document).foundation('alerts', 'events');
//        }
//    });
//});
//
//// Audition Call
//
//$('button#submitAudition').on('click', function(){
//    var data = $('form#auditionsForm').serialize();
//    $.ajax({
//        data: data,
//        method: "POST",
//        url: "postAuditions",
//        async: true,
//        success: function(data){
//            console.log(data);
//        },
//        error: function(xhr, status, error) {
//            var err = eval("(" + xhr.responseText + ")");
//            alert(err.Message);
//        }
//    });
//});



echo "<div id='faq".$faq->id."' class='reveal-modal' data-reveal aria-labelledby='modalTitle' aria-hidden='true' role='dialog'>";
//echo "<p class='lead'>Use this form to edit the questions and answers on the FAQ page</p>";
//  echo "<p>If you need to add a new question, there is a form at the bottom of the page</p>";
//  echo "<form method='post' action='' id='editFaq'>";
//    echo "<label><h2>Question</h2></label>";
//    echo "<input name='editQuestion' for='editQuestion' placeholder='".$faq->question."'>";
//    echo "<label><h2>Answer</h2></label>";
//    echo "<textarea name='editAnswer' for='editAnswer' placeholder='".$faq->answer."'></textarea>";
//    echo "<button for='submit' id='editFaq' value='submit' class='button'>Submit</button>";
//  echo "</form>";
echo "<a class='close-reveal-modal' aria-label='Close'>&#215;</a>";
echo "</div>";