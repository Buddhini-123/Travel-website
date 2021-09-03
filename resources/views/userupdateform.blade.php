<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width-device-width , initial scale=1.0">
    <meta http-equiv="Compatible" content="le-edge">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<div class="container">
        
        <div class="jumbotron">
        	<h1>Update Details</h1>

        	<form action="/updateimage/{{$user_blogs->id}}" method="POST" enctype="multipart/form-data">
        		{{csrf_field()}}
        		{{ method_field('PUT')}}

        		<input type="hidden" name="id" id="id" value="{{$user_blogs->id}}">

        		<div class="form-group">
        		<label>Name</label>
        		<input type="text" name="name" class="form-control" value="{{$user_blogs->name}}" placeholder="Enter name" >
        		</div>

        		<div class="form-group">
        		<label>Description</label>
        		<input type="text" name="description" class="form-control" value="{{$user_blogs->description}}" placeholder="Enter description" >
        		</div>
        		
        		<label>Image</label>
        		<div class="input-group">
        			<div class="custom-file">
        				<input type="file" name="image" class="custom-file-input" value="{{$user_blogs->image}}">
        				<label class="custom-file-label">Choose file</label>
        				
        			</div>
        			
        		</div>
        		<br>

        		<button type="submit" name="submit" class="btn btn-primary btn-lg">Update Data</button>
        	</form>

        </div>
    </div>

</body>
</html>