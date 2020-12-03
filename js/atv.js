$(document).ready(function(){
	
	$('#periodo').on('change',function(){
		
		var periodoValor = '#' + $(this).val();
		
		$('#pai').children('div').hide();
		$('#pai').children(periodoValor).show();
	});
	
});