/* Author: Brendon Gonzalez */
$(function(){
	 $(window).load(function() {
         $('#image-rotator').orbit({
			fluid: '468x707'
		 });
     });
	$('#submiter').click(function(e){
		$('#contact-us').validate({ errorElement: "small"});
		$('.failsafe').addClass('hidden');
		if($('form').valid())
		{
			$('.loader').removeClass('hidden');
			$.ajax({
			url:'../php/contact_process.php',
			type:'POST',
			data: {name:$('.name').val(), phone:$('.phone').val(), email:$('.email').val(), message:$('.message').val()},
			dataType:'json',
			})
			.done(function(data){
				$('.loader').addClass('hidden');
				if(data.error!=null){
					$('.failsafe').html(data.error).removeClass('hidden');
				}else
				{
					if(data.type!='success'){
						$('.'+data.name).after('<small class="error">'+data.details+'</small>')	
					}
					else{
						$('.failsafe').removeClass('hidden');
						//$('#contact-us').flip({direction:'tb', content:'<p>Your message  has been sent!</p>'});
					}
				}
			})
			.fail(function(data){
				$('.loader').addClass('hidden');
				$('.failsafe').removeClass('hidden').html('Try Submitting Again.');
			})
			.always(function(data){
				
			});
		}		
		e.preventDefault();	
	});
	
	$('form input, form textarea').blur(function(){
		$('form').validate({ errorElement: "small"}).element($(this));
	})
	
	$('.phone').keydown(function(e) {
        if (e.keyCode != 8) {
            var obj = $(this);
            if (obj.val().length == 3 || obj.val().length == 7) {
                obj.val(obj.val() + "-");
            }
        }
    });



    $(".num-only").keydown(function(event) {
        // Allow: backspace, delete, tab and escape
        if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 ||
        // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) ||
        // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        else {
            // Ensure that it is a number and stop the keypress
            if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                event.preventDefault();
            }
        }
    });
})
