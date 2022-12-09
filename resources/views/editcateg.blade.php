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
        

        <form action="{{ url('catcreate/' .$catprs->id) }}" method="post" enctype="multipart/form-data">

              {!! csrf_field() !!}  
        @method("PATCH")

        <label>Update Product Categories</label>

        <div class="row" style="margin-top:15px;">
  

          <div class="col-7">
         <input type="text" class="form-control" placeholder="Product Category Name" name="title" value="{{$catprs->title}}">
         </div>
        </div>

    </div>
       
      <input type="submit" value="Save" class="btn btn-success" style="margin-top: 10px;margin-left: 20px;"></br>

      </form>
   </div> <!-- end container
 -->

  


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
 