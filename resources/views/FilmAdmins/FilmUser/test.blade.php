<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>测试</title>
    <!-- <script src="/FilmAdmin/js/libs/jquery-1.8.3.min.js"></script> -->
     <script type="text/javascript" src="/FilmAdmin/layer/jquery.js"></script>
    <script type="text/javascript" src="/FilmAdmin/layer/layer.js"></script>
    <script type="text/javascript" src="/FilmAdmin/layer/extend/layer.ext.js"></script>

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

		// alert($);
		// alert(345);

			// layer.alert('见到你真的很高兴', {icon: 6});


		layer.alert('墨绿风格，点击确认看深蓝', {
		    skin: 'layui-layer-molv' //样式类名  自定义样式
		    ,closeBtn: 1    // 是否显示关闭按钮
		    ,anim: 1 //动画类型
		    ,btn: ['重要','奇葩'] //按钮
		    ,icon: 6    // icon
		    ,yes:function(){
		        layer.msg('按钮1')
		    }
		    ,btn2:function(){
		        layer.msg('按钮2')
		    }});
					





			// $.ajaxSetup({
		 //        headers: {
		 //            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		 //        }
			// });


			// $('#dvs').click(function(){



			// 			//获取phone
			// 		 //var phone = $('#phone').val(); 
			// 		 // console.log(phone);

			// 			$.ajax({
			// 				   type: "GET",
			// 				   url: "{{url('/FilmAdmins/test')}}",
			// 				   data: 'phone='+$('#phone').val(),
			// 				   success: function(msg){
			// 				     alert(msg);
			// 				   }
			// 				});

			// 			// $.get("/FilmAdmins/test",{phone:phone},function(data){
			// 			// 	console.log(data);
			// 			// });


			// 		// return false;
			// });


			// $('#judge').click(function(){
			// 	 var phone = $('#phone').val(); 
			// 	 var code = $("#code").val();


			// 	$.ajax({
			// 				   type: "GET",
			// 				   url: "{{url('/FilmAdmins/panduan')}}",
			// 				   data: 'phone='+phone&'code='+code,
			// 				   success: function(msg){
			// 				     alert(msg);
			// 				   }
			// 				});

			// 		return false;




			// });
		
			



	</script>
	
</body>
</html>