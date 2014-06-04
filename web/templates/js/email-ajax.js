$('form.contactform').on('submit', function() {
	var that = $(this),
		url = that.attr('action'),
		method = that.attr('method'),
		errorcount = 0,
		data = {};

	that.find('[name]').each(function(index, value) {
		var that = $(this),
			name = that.attr('name'),
			value = that.val();
		if(value == "") {
			that.parent().addClass('error');
			that.siblings().addClass('error');
			errorcount = errorcount + 1;
		}else{
			if(that.parent().hasClass('error')) {
				that.parent().removeClass('error');
				that.siblings().removeClass('error');
				errorcount = errorcount - 1;
			}
		}
		data[name] = value;
	});
	if(errorcount > 0) {

	}else{
		$.ajax({
			url: url,
			type: method,
			data: data,
			success: function(response) {
				that.hide();
				$('.success').show();
			}
		});
	}
	return false;
});
