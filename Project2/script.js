$(document).ready(function(){
	$("#button1").click(function(){
		jQuery.ajax({
			url: 'curl.php',
			type:'get',
			async:false,
			dataType:'json',
			success: function(res){
			var res = JSON.stringify(res);
	
			$("#display").html(res);
			}

		});
	});	
});

