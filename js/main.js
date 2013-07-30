/* Author: Brendon Gonzalez */
$(function(){
  //modular submittal
  var submitter = {
    selector: $('#submiter'),
    init: function () {
      this.addListeners();
    },
    addListeners: function() {
      var self = this;
      this.selector.click(function(e) {
        e.preventDefault();
        self.submitHandler();
      });
    },
    submitHandler: function () {
      $('#contact-us').validate({ errorElement: "small"});
      $('.failsafe').addClass('hidden');
      if ($('form').valid()) {
  			$('.loader').removeClass('hidden');
  			var formdata = {
    			name: $('.name').val(), 
    			phone: $('.phone').val(), 
    			email: $('.email').val(), 
    			message: $('.message').val()
  			}
  			
  			$.ajax({
    			url:'../php/contact_process.php',
    			type:'POST',
    			data: formdata,
    			dataType :'json',
  			})
  			.done(function(data){
  				$('.loader').addClass('hidden');
  				if (data.error !=null) {
  					$('.failsafe').html(data.error).removeClass('hidden');
  				} else {
  					if(data.type!='success'){
  						$('.'+data.name).after('<small class="error">'+data.details+'</small>')	
  					} else {
  						$('.failsafe').removeClass('hidden');
  					}
  				}
  			})
  			.fail(function(data){
  				$('.loader').addClass('hidden');
  				$('.failsafe').removeClass('hidden').html('Try Submitting Again.');
  			})
  		}	
    }
  }
  
  submitter.init();
	
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
    } else {
      // Ensure that it is a number and stop the keypress
      if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
          event.preventDefault();
      }
    }
  });
})
