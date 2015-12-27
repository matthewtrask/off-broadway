$(document).ready(function(){
    $(document).foundation();

    // ajax call for sending messages
    $('button#pageSubmit').on('click', function(){
    	var data = $('form#changelogForm').serialize();
    	$.ajax({
    		method: "POST",
    		url: 'postChangelog',
    		data: data,
    		async: true,
    		success: function(data){
    			console.log("Message was sent");
                console.log(data);
    		},
    	});
    });


    //
    $('button#addClass').on('click', function(){
        console.log('add class button worked');
        var data = $('form#addClassForm').serialize();
        console.log(data);
        $.ajax({
            method: "POST",
            data: data,
            url: "addClasses",
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
            data: data,
            url: "updateClasses",
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
