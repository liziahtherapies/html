jQuery(document).ready(function() {
$("#inf_field_Password1").blur(function(){
var pwd1 = $(#"inf_field_Password1").val();
var pwd = $(#"inf_field_Password").val();
if(pwd1 != pwd){
alert('Mismatch the password ! Please enter again.');
$(#"inf_field_Password1").val('');
$(#"inf_field_Password1").focus();
}

});

	function close_accordion_section() {
		jQuery('.accordion .accordion-section-title').removeClass('active');
		jQuery('.accordion .accordion-section-content').slideUp(300).removeClass('open');
	}

	jQuery('.accordion-section-title').click(function(e) {
		// Grab current anchor value
		var currentAttrValue = jQuery(this).attr('href');

		if(jQuery(e.target).is('.active')) {
			close_accordion_section();
		}else {
			close_accordion_section();

			// Add active class to section title
			jQuery(this).addClass('active');
			// Open up the hidden content panel
			jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
		}

		e.preventDefault();
	});
});