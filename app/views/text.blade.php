/*$(document).ready(function(){
	$('#nav-facelift').click(function(){
		$('.text').hide("fast");
		$('#facelift').show();
		});
	
	$('#nav-eyelid').click(function(){
		$('.text').hide("fast");
		$('#eyelid').show();
	});

})
*/
$('#nav-facelift').click(function(){
	$('.text').hide("fast", function(){
		$('#facelift').show("slow");
	});
});
$('#nav-eyelid').click(function(){
	$('.text').hide("fast", function(){
		$('#eyelid').show("slow");
	});
});