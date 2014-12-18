$(document).ready(function() {
	//Meet the team Smooth Scroll
	$('.meet-the-team .middlemenu a[href^="#"]').on('click', function(e) {
		e.preventDefault();
		var hash = this.hash;
		$('html, body').animate({
		   scrollTop: $(this.hash).offset().top
		 }, 300, function(){ window.location.hash = hash });
	});
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
	//Contact form
	if($('.contact-us').length){
		$('#contact').bootstrapValidator({
			message: 'This value is not valid',
			submitButtons: '#submit',
			trigger: null,
			fields: {
				InputNumber: {
					validators: {
						notEmpty: {
							message: 'Please enter your phone number'
						},
						digits: {
							message: 'The phone number can contain digits only'
						}
					}
				}
			}
		}).on('success.form.bv', function(e){
			e.preventDefault();
			var $form = $(e.target);
			var bv = $form.data('bootstrapValidator');
			$.post($form.attr('action'), $form.serialize(), function(result) {
				$('#contact').hide(300);
				$('.contact-us .alert-success').show(300);
			}).fail(function() {
				$('#contact').hide(300);
				$('.contact-us .alert-danger').show(300);
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
	//Light Gallery
	if($('.lightgallery').length){
		$('.lightgallery').find('figure').click(function(){
			$('body').append('<div class="modal-backdrop"></div>').find('.modal-backdrop').append($(this).find('img').clone().addClass('img-responsive vcentre')).animate({'opacity': 1}, 300).click(function(){ $(this).fadeOut(300, function(){ $(this).remove() }) });		
		});	
	}
	//Renew Editor :)
	if(window.location.hash == '#admin' && $('.editable').length){
		$('body').find('.table').attr('contenteditable', 'true');
		grande.bind(document.querySelectorAll('.table'));
		$('body').append('<div class="edit-mode"><p>Editing mode</p><button type="button" class="btn btn-danger">Exit</button><button type="button" class="btn btn-success">Save</button><button type="button" class="btn btn-default undo"><i class="fa fa-undo fa-lg"></i></button></div>').find('.edit-mode').animate({'top': '0px'}, 300, function(){
			$(this).find('.btn-success').click(function(){
				$(this).removeClass('btn-success').addClass('btn-default').unbind('click');
				$('.table').removeAttr('contenteditable');
				var editedContent = $('.editable').html(); 
				var editedFileName = $('.editable').attr('file');
    			$.ajax({
					url: '../../scripts/save.php',
					type : 'POST', 
					data: {content: editedContent, name: editedFileName},
					success: function(response){
						location.hash = "";
						location.reload();
					}
				});
			});	
			$(this).find('.btn-danger').click(function(){
				location.hash = "";
				location.reload();
			});
			$(this).find('.undo').click(function(){
				$(this).unbind('click');
				var editedFileName = $('.editable').attr('file');
				$.ajax({
					url: '../../scripts/undo.php',
					type : 'POST', 
					data: {name: editedFileName},
					success: function(response){
						if(response == 'yes'){
							location.hash = "";
							location.reload();
						} else alert('No more undo attempts left.');
					}
				});
			});
		});
	} else {
		$('.table u').css('text-decoration', 'none');
	};
});