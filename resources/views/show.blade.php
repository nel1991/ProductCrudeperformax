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
        
        <form action="{{ url('prod/' .$produs->id)}}" method="post" enctype="multipart/form-data">
      

      {!! csrf_field() !!}  
        @method("PATCH")



<div class="row">
  <div class="col">


    <label>Product ID</label>
    <h4>{{$produs->id}}</h4>

  </div>
  <div class="col">


    <label>Product Title</label>
    <h4>{{$produs->title}}</h4>

  </div>
</div>


<div class="row">


      <div class="mb-3">
<label>Product Description/Contents</label>
<h2>{{$produs->content}}</h2>
  
  </div>

</div>




<div class="row">
  <div class="col">
<label for="recipient-name" class="col-form-label">Product Images</label>
            
    
     <img src="{{ asset($produs->image) }}" width= '80' height='100' class="img img-responsive" />


  </div>
  
</div>

<!-- 
        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Product ID No.</label>
            <input type="number" class="form-control" id="recipient-name" name="id">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Product Name</label>
            <input type="text" class="form-control" id="recipient-name" name="title">
          </div> -->
    
          <!--   <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Product Description/Contents</label>
             <textarea class="form-control mt-5" name="content" id="editor"></textarea>


          </div>  -->
      <!--      <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Product Images</label>
            <input type="file" class="form-control" id="recipient-name" name="image">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Product Category ID No</label>
            <input type="number" class="form-control" id="prodcate" name="prodidnum">
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Product Category</label>
            <input type="text" class="form-control" id="prodcate" name="prodcate">
          </div> -->






  
       
      <input type="submit" value="Save" class="btn btn-success"></br>

      </form>
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









  </div> 



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
 






<!-- @extends('layout')


  

      <div class="modal-body">
        
        '/' .$prodcats->id 
        <form action="{{ url('prod/' .$produs->id)}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}  
        @method("PATCH")
         <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Product Name</label>
            <input type="text" class="form-control" id="recipient-name" name="title" value="{{$produs->title}}">
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Product Description/Contents</label>
            <input type="text" class="form-control" id="recipient-name" name="content" value="{{$produs->content}}">
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Product Images</label>
            <input type="file" class="form-control" id="recipient-name" name="image">
            <img src="{{ asset($produs->image) }}" width= '50' height='50' class="img img-responsive" />
          </div> 
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Product Category</label>
            <input type="text" class="form-control" id="recipient-name" name="prodcategory">
          </div>
  

  
       
      <input type="submit" value="Update" class="btn btn-success"></br>

      </form>
      </div> -->