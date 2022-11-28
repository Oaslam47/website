$(document).ready(function(){
	$("#button1").click(function(){
		jQuery.ajax({
			url: 'curl.php',
			type:'get',
			async:false,
			success: function(res){
			$("#display").html(res );
			},
		});
	});	
});

