$('#myform').submit(function(){
	return false;
});

$('#insert').click(function(){
	$.post(		
		$('#myform').attr('action'),
		$('#myform :input').serializeArray(),
		function(result){
			$('#result').html(result);
		}
	);
});
$(document).ready(function()
				{ 	
									$('#insert').click(function(){							 $('#myform input[type="text"]').val('');	

				}); 
	});












