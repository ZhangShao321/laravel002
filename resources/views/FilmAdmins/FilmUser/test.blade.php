<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Document</title>
    <script src="/FilmAdmin/js/libs/jquery-1.8.3.min.js"></script>

</head>
<body>

	<form method="post" action="/FilmAdmins/panduan">
		
		手机号:<input type="type" name="phone" id="phone">
			<!-- <div  style="width:100px;height:25px;border:1px solid red;"></div> -->
			<input type="button" id="dvs" value="发送">
		
		<br>
		验证码:<input type="type" name="code" id="code"><br/>
		{{ csrf_field() }}
		<button id="judge">提交</button>

	</form>

	<script type="text/javascript">
			$.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
			});


			$('#dvs').click(function(){



						//获取phone
					 //var phone = $('#phone').val(); 
					 // console.log(phone);

						$.ajax({
							   type: "GET",
							   url: "{{url('/FilmAdmins/test')}}",
							   data: 'phone='+$('#phone').val(),
							   success: function(msg){
							     alert(msg);
							   }
							});

						// $.get("/FilmAdmins/test",{phone:phone},function(data){
						// 	console.log(data);
						// });


					// return false;
			});


			$('#judge').click(function(){
				 var phone = $('#phone').val(); 
				 var code = $("#code").val();


				$.ajax({
							   type: "GET",
							   url: "{{url('/FilmAdmins/panduan')}}",
							   data: 'phone='+phone&'code='+code,
							   success: function(msg){
							     alert(msg);
							   }
							});

					return false;




			// });
		
			



	</script>
	
</body>
</html>