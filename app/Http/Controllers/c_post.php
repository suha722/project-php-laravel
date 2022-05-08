<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\QueryException;
//namespace Resources\views;

use Illuminate\Support\Facades\Auth;
class c_post extends Controller
{
    public function showpost(){
        //dd(Auth::user());
         $posts=Post::all();
        return view("post.posts", compact("posts"));

        
    }

    public function addpost(){
        $categories = Category::all();
        $users = User::all();
        return view("admin.posts",compact("categories"),compact("users"));
    }

    public function insertpost (Request $request){
        $request->validate([ 'title' =>'required|min:4|max:20' , 'content'=>'required|min:10' ,

        ] , ['title.required' =>'لا تترك العنوان فارغ من فضلك ^-^' , 'title.min'=>'هل هذا فقط عنوان!! 0_0 ' , 
        'content.required'=>'اكتب ما يحتويه منشورك اذا تفضلت^-^' ]
   );
   
        $addpost=new Post ;
      
        $addpost->p_title   = $request->input('title');
        $addpost->p_content = $request->input('content');
        $addpost->post_user = $request->input('user_id');
        $addpost->post_cat  =$request->input('cat_id');
       //dd($request->all());
      
        $addpost->save(); 
        
         return redirect("/posts") ;
    }
    public function editpost($id){
        $categories = Category::all();
        $post=Post::find($id);
        return view ('admin.editpost' , ['id' => $id] ,compact("categories","post"));
    }
    public function updatepost( Request $request , $id ){
    
        $updatepost=Post::find($id);
        $updatepost->p_title   = $request->input('title');
        $updatepost->p_content = $request->input('content');
        $updatepost->post_user = $request->input('user_id');
        $updatepost->post_cat  =$request->input('cat_id');
        $updatepost->save();
        return redirect("/posts") ;

        
    }
  
}
