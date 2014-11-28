$(document).ready(function() {
	//Reservation form
	if($('.reserve-a-table').length){
		$('#datetimePicker').datetimepicker();
		$('#reserve').bootstrapValidator({
			message: 'This value is not valid',
			submitButtons: '#submit',
			trigger: null,
			fields: {
				 datetimePicker: {
					validators: {
						notEmpty: {
							message: 'Please enter a valid date'
						},
						date: {
							format: 'MM/DD/YYYY h:m A',
							message: 'This date is not valid'
						}
					}
				},
				InputNumber: {
					validators: {
						notEmpty: {
							message: 'Please enter your phone number'
						},
						digits: {
							message: 'The phone number can contain digits only'
						}
					}
				},
				InputGuests: {
					validators: {
						notEmpty: {
							message: 'Please tell us the number of guests arriving'
						},
						digits: {
							message: 'Please enter a number'
						}
					}
				}
			}
		}).on('success.form.bv', function(e){
			e.preventDefault();
			var $form = $(e.target);
			var bv = $form.data('bootstrapValidator');
			$.post($form.attr('action'), $form.serialize(), function(result) {
				$('#reserve').hide(300);
				$('.reserve-a-table .alert-success').show(300);
			}).fail(function() {
				$('#reserve').hide(300);
				$('.reserve-a-table .alert-danger').show(300);
			});
		});
		$('#datetimePicker').on('dp.change dp.show', function(e){
			$('#reserve').bootstrapValidator('revalidateField', 'datetimePicker');
		});
	}
	//Registration form
	if($('.register-with-us').length){
		$('#register').bootstrapValidator({
			message: 'This value is not valid',
			submitButtons: '#submit',
			trigger: null
		}).on('success.form.bv', function(e){
			e.preventDefault();
			var $form = $(e.target);
			var bv = $form.data('bootstrapValidator');
			$.post($form.attr('action'), $form.serialize(), function(result) {
				$('#register').hide(300);
				$('.register-with-us .alert-success').show(300);
			}).fail(function() {
				$('#register').hide(300);
				$('.register-with-us .alert-danger').show(300);
			});
		});
	}
	//Blog
	if($('.blog').length){
		$.getJSON('http://cockobarton.tumblr.com/api/read&callback=?', function(data){
			$.each(data.response.posts, function(i, item) {
				var content = item.body
				$('.blog .bodycopy').append('<li>' + content + '</li>')
			});
		});	
	}
});