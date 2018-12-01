function setRecaptcha() {

	$(function() {
		var first_recaptcha = true;

		$('.modal-form').click(function() {    
		    var modal_id = $(this).data('form');
		    $('#modal-form-content').addClass('active');
		    $(modal_id).addClass('active');
		    if (first_recaptcha) {
		        first_recaptcha = false;
		        var recaptcha_id = modal_id + '-recaptcha';
		        var rec = recaptcha_id;
		        grecaptcha.render(rec, {
		          'sitekey' : '6LfFc0UUAAAAACNcAwF5VxvBMAur-aJh4O7JVhBl'
		        });
		                
		    }
		});

		$('#modal-form-content .cancel-btn, #modal-form-content .close-btn').click(function() {
		    $('#modal-form-content').removeClass('active');
		    $('#modal-form-content > div').removeClass('active');
		});

		$(document).mouseup(function(e) {
		    var modal_form_on = $('#modal-form-content > div'); 
		    if (!modal_form_on.is(e.target) && modal_form_on.has(e.target).length === 0)  {
		        modal_form_on.removeClass('active');
		        $('#modal-form-content').removeClass('active');
		    }
		});
	});
}
