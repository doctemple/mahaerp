
	$("#btlogin").click(function(){
		var username=$('#username').val();
		var password=$("#password").val();
		console.log(username,password);
		$.ajax({
			type:"POST",
			dataType:'json',
			url:'controllers/aut.php',
			data:{username:username,password:password},
			success:function(response){
				if(response.data==true){
					$("#message").html(response.message);
					window.location='?';
				}else{
					$("#message").html(response.message);
				}
			},error:function(){
				alert('General system error');
			}
		});
	});

