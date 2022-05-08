
@extends("layout")
@section("content")
<!-- use App\Models\Category
use Illuminate\Support\Facades\Auth; -->
<style>
  .contanier-fluid{
    color:white;
  }
</style>
<div class="contanier-fluid">
  <div class="row">
    <div class="col-8 mt-4">
      <form action={{ url ('/insertpost' ) }} method="post">
      @csrf
      

         <input type="hidden"  name="user_id"  value="{{auth()->user()->id}}" >
        <div class="form-group row">
          <label for="title" class="col-2">Title post</label>
          <div class="col-10">
            <input id="title" type="text" name="title" class="form-control"  value="{{ old('title') }}">
          </div>
       </div>

       <div class="form-group row">
          <label for="content" class="col-2">Content post</label>
          <div class="col-10">
            <input id="content" type="text" name="content" value="{{ old('content') }}" class="form-control" />
          </div>
       </div>

             
       <div class="form-group row">
          <label for="content" class="col-2">user post</label>
          <div class="col-10">
            <select class="form-control" name="userid">
              <option value="">Choosen...</option>
              @foreach($users as $user )
              <option value="{{ $user->post_user}}">{{ $user->name}}</option>



              @endforeach

          </select>

       
       <div class="form-group row">
          <label for="content" class="col-2">Catagory post</label>
          <div class="col-10">
            <select class="form-control" name="cat_id">
              <option value="">Choosen...</option>
              @foreach($categories as $category )
              <option value="{{ $category->cat_id}}">{{ $category->cat_name}}</option>



              @endforeach

          </select>
          

          
          <hr>
          <input type="submit" value="Submit" style="background-color: rgba(212, 58, 135, 0.521); width:100%; color:white; font:bold;">
        
          </div>
       </div>


        

<!--         
  
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Another label</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
  </div>
< -->



      </form>
      
    </div>
    <div class="col-12">
      @foreach($errors->all() as $err)
      <div class="alert alert-danger mt-4">{{ $err}}</div>
      @endforeach
    </div>
  </div>
</div>
@endsection