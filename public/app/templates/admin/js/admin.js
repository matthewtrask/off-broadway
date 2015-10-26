$(document).ready(function(){
    $(document).foundation('tab', 'reflow');

    // ajax call for sending messages
    console.log('hello');
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
    // ajax call to recieve the updated class info


});
