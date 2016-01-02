$(document).ready( function () {
    $(document).foundation();

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

    // Message Queue Ajax
    $('button#changelogSubmit').on('click', function(){
        var data = $('form#changelogForm').serialize();
        $.ajax({
            data: data,
            method: "POST",
            url: "/postChangelog",
            async: true,
            success: function(data){
                console.log(data);
            },
            error: function(data){
                console.log(data);
            }
        });
    });

    // Button To add class Ajax call

    $('button#addClass').on('click', function(){
        var data = $('form#addClassForm').serialize();
        $.ajax({
            data: data,
            method: "POST",
            url: "/addNewClass",
            async: true,
            success: function(data){
                console.log(data);
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(err.Message);
            }
        });
    });

    // delete class
    $('button.remove.button').on('click', function(){
        var id = this.name;
        var data = {};
        data['id'] = id;
        console.log(data);
        $.ajax({
            data: data,
            method: "POST",
            url: "/removeClasses",
            async: true,
            success: function(data){
                console.log(data);
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(err.Message);
            }
        });
    });

    // Edit class
    $('button#editClass').on('click', function(){
        var data = $('form#editClassForm').serialize();
        $.ajax({
            data: data,
            method: "POST",
            url: "/editClasses",
            async: true,
            success: function(data){
                console.log(data);
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(err.Message);
            }
        });
    });

    // New FAQ Button
    $('button#faqSubmit').on('click', function(){
        var data = $('form#newFaq').serialize();
        $.ajax({
            data: data,
            method: "POST",
            url: "/newFaq",
            async: true,
            success: function(data){
                console.log(data);
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(err.Message);
            }
        });
    });

    // Update FAQ Button
    $('button#editFaq').on('click', function(){
        var data = $('form#editFaq').serialize();
        $.ajax({
            data: data,
            method: "POST",
            url: "/editFaq",
            async: true,
            success: function(data){
                console.log(data);
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(err.Message);
            }
        });
    });

    // delete faq
    $('button.remove.button.faq').on('click', function(){
        var id = this.name;
        var data = {};
        data['id'] = id;
        $.ajax({
            data: data,
            method: "POST",
            url: "/removeFaq",
            async: true,
            success: function(data){
                console.log(data);
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(err.Message);
            }
        });
    });
});

