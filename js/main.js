/* Author: Brendon Gonzalez */
$(function(){
	$('#submiter').click(function(e){
		console.log('DO IT');
		$.ajax({
			url:'http://localhost:81/dadio/php/contact_process.php',
			type:'POST',
			data: {name:$('.name').val(), phone:$('.phone').val(), email:$('.email').val(), message:$('.message').html()},
			dataType:'html'
		})
		.done(function(data){
			console.log('SUCCESS: '+data);
		})
		.fail(function(data){
			console.log('FAILED: '+data);
		})
		.always(function(data){
			console.log('HAPPENED: '+data);
		});
		
		e.preventDefault();	
	});
})
