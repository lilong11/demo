<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
		<label for="file"><img id="profile" src="/uploads\images\/H564QrFYSaiEeUJ4fwXf5aG2OvKGwQwWPW5scvDW.jpeg" alt="" style="width:100px;"> </label>
		<form  action="/usersinfo" method="post" enctype="multipart/form-data"> 
			{{ csrf_field() }}
		   
			<input type="file" name="profile" id="file" onchange="uploadimg()"/>
		    <input type="submit" value="Submit" />
		</form>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
</body>
<script>
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});




	$('form:first').submit(function(){
		var FormData = new FormData($("form")[0]);
		$.ajax({
			'url':'/usersinfo',
			'type':'post',
			'data':FormData,
			'async':true,
			'processData': false,
            'contentType': false,
			'success':function(data){
				if(data.msg == 'success'){
					var imagepath = '/uploads/'+data.path;
					$('#profile').attr('src',imagepath);
				}
			}

		})
		return false;
	});

	function uploadimg(){

	}

</script>
</html>