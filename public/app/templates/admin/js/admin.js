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
    // ajax call to pass class id to db
    $('button#editClasses').on('click', function(){
        var id = $(' input.edit:checkbox:checked').val();
        console.log('hello');
        console.log(id);
    });
});
