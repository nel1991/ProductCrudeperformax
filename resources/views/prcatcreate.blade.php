<!DOCTYPE html>
<html>
@extends('layout')


<body>
  
@include('sidetemplate')



<div class="p-1 my-container active-cont">

    <nav class="navbar top-navbar navbar-light bg-light px-5">
      <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
    </nav>



    <div class="container prodarea">

      <div class="container">
        
        <form action="{{ url('catcreate') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}  




        <label>Create Product Categories</label>

        <div class="row" style="margin-top:15px;">
  

          <div class="col-7">
         <input type="text" class="form-control" placeholder="Product Category Name" name="title">
         </div>
        </div>

    </div>
       
      <input type="submit" value="Save" class="btn btn-success" style="margin-top: 10px;margin-left: 20px;"></br>

      </form>
   </div> <!-- end container
 -->

      <div class="container" style="margin-top:50px;">
        
        <div class="container">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Actions</th>
    
    </tr>
  </thead>
  <tbody>

     @foreach($catpr as $cat) 
    <tr>
      <th scope="row">{{$cat->id}}</th>
      <td>{{$cat->title}}</td>
      
      <td>
                <a href="{{ url('/catcreate/' . $cat->id . '/edit') }}" title="Edit"><button class="btn btn-light btn-sm"><i class='bx bx-comment-edit'></i></button></a>
      
           <form method="POST" action="{{ url('/catcreate' . '/' . $cat->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-light btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class='bx bx-trash'></i></button>
           </form>


         </td>
    
    </tr>
  
     @endforeach
  </tbody>
</table>



      </div>
      </div>

</div>

<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
                <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>




 <script type="text/javascript">
    
var menu_btn = document.querySelector("#menu-btn");
var sidebar = document.querySelector("#sidebar");
var container = document.querySelector(".my-container");
menu_btn.addEventListener("click", () => {
  sidebar.classList.toggle("active-nav");
  container.classList.toggle("active-cont");
});


  </script>

</body>


</html>
 