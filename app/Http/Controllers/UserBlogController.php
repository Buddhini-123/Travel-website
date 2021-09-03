<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserBlog;
use App\Exceptions\PostNotFoundException;

class UserBlogController extends Controller
{
    //create the form to input data
    public function index()
    {
    	return view('user_blog');
    }

    //store inputed data
    public function store(Request $request)
    {
    	$user_blog = new UserBlog();

        try{


        $user_blog->name = $request->input('name');//get the name field
        $user_blog->description = $request->input('description');//get the description field
        

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/user_blog/', $filename); //create an upload folder
            $user_blog->image = $filename;
        }
        else
        {
            return $request;
            $user_blog->image = '';
        }

        $user_blog->save(); //save the data

        return view('user_blog')->with('user_blog',$user_blog);

        }catch(\Exception $exception){

            return view('user_blog')->with('error','data insert fail');
        }

    	
    }

    //Display all the blog details to the creater
    public function display()
    {
        try{
            $user_blogs = UserBlog::all();
        }catch (\Exception $exception){
            return view('errors.notfound');
        }
        return view('userform')->with('user_blogs',$user_blogs);
    }

    //Display all the blog details to the publc
    public function view()
    {
        
        $user_blogs = UserBlog::all();//get all the details
        
        return view('viewblogs')->with('user_blogs',$user_blogs);//return all the data in viewblogs page
    }
    

    //create the edit in the display userpage
    public function edit($id)
    {
        
        $user_blogs = UserBlog::find($id);//find the id
        
        
        return view('userupdateform')->with('user_blogs',$user_blogs);
    }

    //update the data in the database
    public function update(Request $request,$id)
    {

        $user_blogs = UserBlog::find($id);//find the id 

        
        $user_blogs->name = $request->input('name');//input name
        $user_blogs->description = $request->input('description');//input description
        

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/user_blog/', $filename); //create an upload folder
            $user_blogs->image = $filename;
        }

        $user_blogs->save();//save the updated data
        
        return redirect('userpage')->with('user_blogs',$user_blogs);//return to the userpage where data displayed
    }


    //delete the data from the database
    public function delete($id)
    {
        
        $user_blogs = UserBlog::find($id);//find the id
        $user_blogs->delete();//call the delete function
        

        return redirect('userpage')->with('user_blogs',$user_blogs);//return to the userpage where data displayed after the deletion
    }
   
    
}
