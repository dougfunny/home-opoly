$(document).ready(function(){

	$('.textbox').each(function() {
	    var default_value = this.value;
	    $(this).css('color', '#73acb8');
	    $(this).focus(function() {
	        if(this.value == default_value) {
	            this.value = '';
	            $(this).css('color', '#eeeeee');
	        }
	    });
	    $(this).blur(function() {
	        if(this.value == '') {
	            this.value = default_value;
	            $(this).css('color', '#73acb8');
	        }
	    });
	});

});
