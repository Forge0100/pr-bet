paceOptions = {
  // Disable the 'elements' source
  elements: false,

  // Only show the progress on regular and ajax-y page navigation,
  // not every request
  restartOnRequestAfter: false
}

$(function(){
	$('body').on('click', '#add_message', function(){
		var data = $('#form_message').serialize(),
			url = $('#form_message').attr('action');
		$.post(url, data, function( data ){
			console.log(data);
			if(data == 'okay')
				$('textarea[name="message"]').html();
		});

		return false;
	});

	jQuery('#datetimepicker').datetimepicker({
		format:'Y-m-d H:i:s',
		lang:'ru'
	});

});