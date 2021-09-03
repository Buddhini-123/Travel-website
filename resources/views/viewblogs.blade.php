<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width , initial scale=1.0">
	<meta http-equiv="Compatible" content="le-edge">
	<title>display output</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<style type="text/css">
.right {
  float: right;
  width: 300px;
}
</style>
</head>
<body>

	<div class="container">
		<div class="jumbotron">
			<h1>My Travel Blog</h1>
			
			
  				<tbody>
  					@foreach ($user_blogs as $user_blog)
				    
				    <div class="right">
				      {{$user_blog->id}}
				      {{$user_blog->name}}
				      {{$user_blog->description}}
				    </div>
				    <br>
				      <img src="{{asset('uploads/user_blog/' . $user_blog->image)}}" width="250px" height="250px" alt="Image"><br>
				      
				    
    				@endforeach
				</tbody>
			

 
		</div>
	</div>

</body>
</html>