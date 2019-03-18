

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Document</title>

</head>
<body>
			<img id="imgs" src="userinfo/B8SkGEjjlPOukLEdmGAhB4QdFlowrBbcomGilwK9.jpeg" alt="" style="height:200px;">
		<form enctype="multipart/form-data" action="/usersinfo" method="post"> 
			{{ csrf_field() }}
			<input type="file" name="pic"/>
		    <input type="submit" value="Submit" />
		</form>
		<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
</body>
		<script>
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});

			$('form:first').submit(function(){
				var formData = new FormData($("form")[0]);
				$.ajax({
					'url':'/usersinfo',
					'type':'post',
					'data':formData,
					'async':true,
		            'processData': false, //不限定数据类型
		            'contentType': false, 
					'success':function(data){
						if(data.msg == 'success'){
							var imgpath = '/uploads/'+data.path
							$('#imgs').attr('src',imgpath);
						}
					}
				});
				return false;

			});
		</script>
</html>