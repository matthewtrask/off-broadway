$(document).ready(function(){
    $(document).foundation();

    // ajax call for sending messages
    $('button#submit').on('click', function(){
    	var data = $('form#adminMessage').serialize();
    	$.ajax({
    		method: "POST",
    		url: 'admin/postMessage',
    		data: data,
    		async: true,
    		success: function(data){
    			console.log("Message was sent");
    		},
    		failue: function(data){
    			console.log("Message failed to send");
    		}
    	});
    });

    $('button#addClass').on('click', function(){
        console.log('add class button worked');
        var data = $('form#addClassForm').serialize();
        $.ajax({
            method: "POST",
            url: "/addClasses",
            async: true,
            success: function(data){
                console.log('and away we go!');
            }
        });
    });

    $('button#editClass').on('click', function(){
        console.log('edit class button worked');
        var data = $('form#editClassForm').serialize();
        $.ajax({
            method: "POST",
            url: "/updateClasses",
            async: true,
            success: function(data){
                console.log('away we go again!');
            }
        });
    });

    $('button#submitWhatsNew').on('click', function(){
        var data = $('form#adminWhatsNew').serialize();
        $.ajax({
          data: data,
          method: "POST",
          url: "/postWhatsNew",
          async: true,
          success: function(data){
            console.log(data);
          },
          error: function(data){
            console.log(data);
          }
        });
    });

    // Message Queue Ajax
    $('button#pageSubmit').on('click', function(e){
        console.log("Im here.");
        e.preventDefault();
        var data = $('form#adminMessage').serialize();
        console.log(data);
        $.ajax({
            data: data,
            method: "POST",
            async: true,
            url: 'admin/postPageMessages',
            success: function(data){
                console.log(data);
            },
            error: function(data){
                console.log(data);
                console.log("there was an error");
            }
        });
    });

    // current show image uploader

    // update faq
    $('#faqSubmit').on('click', function(e){
        e.preventDefault();
        var data = $('newFaq').serialize();
        $.ajax({
           data: data,
            method: "POST",
            async: true,
            url: "newFaq",
            success: function(data){
                console.log(data);
            }
        });
    });

    // delete faq
    $('.remove').on('click', function(e){
        e.preventDefault();
        var id = this.name;
        var data = id;
        console.log(data);

        $.ajax({
            async: true,
            method: 'POST',
            cache: false,
            url: 'removeFaq',
            data: data,
            success: function(data){
                $(document).foundation('alerts', 'events');
            }
        });
    });
});
