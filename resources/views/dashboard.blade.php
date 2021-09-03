<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width , initial scale=1.0">
    <meta http-equiv="Compatible" content="le-edge">
    <title>Add</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<x-app-layout>
    
        
    <h1 align="center">Create Your Blog</h1>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                

    <div class="container">
        
        <div class="jumbotron">
            
            <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <label>Name</label><br>
                <input type="text" name = "name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Description</label><br>
                <input type="text" name="description" class="form-control" placeholder="Enter Description">
            </div>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input">
                    <label class="custom-file-label">Choose file</label><br>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
        </form>
        </div>

        <a href="userpage">View Created Blogs</a>

        

    <center>
        
    </center>
    </div>
    


</body>
</html>

            </div>
        </div>
    </div>
</x-app-layout>
