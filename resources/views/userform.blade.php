<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width , initial scale=1.0">
	<meta http-equiv="Compatible" content="le-edge">
	<title>display output</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="jumbotron">
			<h1>My Travel Blog</h1>
			
			<table class="table table-stripped table-bordered">
  				<thead class="thead-dark">
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Name</th>
				      <th scope="col">Description</th>
				      <th scope="col">Image</th>
				      <th>EDIT</th>
				      <th>DELETE</th>
				    </tr>
  				</thead>
  				<tbody>
  					@foreach ($user_blogs as $user_blog)
				    <tr>
				      <th>{{$user_blog->id}}</th>
				      <th>{{$user_blog->name}}</th>
				      <th>{{$user_blog->description}}</th>
				      <th><img src="{{asset('uploads/user_blog/' . $user_blog->image)}}" width="100px" height="100px" alt="Image"></th>
				      <th><a href="/editimage/{{$user_blog->id}}" class="btn btn-success">EDIT</a></th>
				      <th><a href="/deleteimage/{{$user_blog->id}}" class="btn btn-danger">DELETE</a></th>
				    </tr>
    				@endforeach
				</tbody>
			</table>

 
		</div>
	</div>

</body>
</html>