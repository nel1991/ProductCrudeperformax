<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product Crud</title>
  <!-- bootstrap 5 css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <!-- BOX ICONS CSS-->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <!-- custom css -->
<link rel="stylesheet" type="text/css" href="{{ asset('prod.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('sidebar.css') }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Side-Nav -->
  <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100">
      <a href="{{ url('/prod') }}" class="nav-link h5 text-white my-2">
        Product Dashboard</br>
      </a>



 



<button class="drop-button">
<!--   <img src="{{ asset('images/shopping.png') }}"> -->
  <i class="bx bx-conversation"></i><span class="mx-2">Create</span>
  </button>
  <div id="dropdown-container">
  
    <a href="{{url('/prod/create')}}" class="nav-link text-white" type>
       Add Product</br>
      </a>

    <a href="{{ url('/catcreate/create')}}">Add Category</a>
        
  </div>

      <!-- <a href="{{url('/prod/create')}}" class="nav-link h5 text-white my-2" type>
        <i class="bx bx-conversation"></i><span class="mx-2">Create</span></br>
      </a> -->
    <!--   <li href="{{url('/prod/create')}}" class="nav-link">
        <i class="bx bxs-dashboard"></i>
        <span class="mx-2">Create</span>
      </li> -->
      
    </ul>

    
  </div>

  <!-- Main Wrapper -->
  <div class="p-1 my-container active-cont">
    <!-- Top Nav -->
    <nav class="navbar top-navbar navbar-light bg-light px-5">
      <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
    </nav>
    <!--End Top Nav -->
    <!-- <h3 class="text-dark p-3"> 💻 📱
    </h3> -->
   

<div class="container">
<div class="container">



<!-- @foreach([1,2,3,4,5] as $item)
    {{$item}}
    @foreach([6,7,8,9,10] as $item2)
        {{$item2}}
    @endforeach
@endforeach -->


<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Content</th>
      <th scope="col">Images</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($prodc as $prod) 

    <tr>
      <th scope="row">{{$prod->id}}</th>
       <th scope="row">{{$prod->title}}</th>
       <th scope="row">{{$prod->content}}</th>
       <th>
     <img src="{{ asset($prod->image) }}" width= '80' height='100' class="img img-responsive">
   </th>

   <th>

      <!-- 
    <a href="{{ url('/prod/' . $prod->id . '/edit') }}" title="Edit"><button class="btn btn-light btn-sm"> -->
    <a href="{{ url('/prod/' . $prod->id . '/edit') }}" title="Edit"><button class="btn btn-light btn-sm"><i class='bx bx-comment-edit'></i></button></a>
          <a href="{{ url('/prod/' . $prod->id) }}" title="View"><button class="btn btn-light btn-sm"><i class='bx bxs-book-content'></i></button></a> 
           <form method="POST" action="{{ url('/prod' . '/' . $prod->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-light btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
           </form> 


       </th>
    
    </tr>

   @endforeach 
 

  </tbody>
</table>
</div>




</div>



</div>



</div>


  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>




  <script type="text/javascript">


 

var menu_btn = document.querySelector("#menu-btn");
var sidebar = document.querySelector("#sidebar");
var container = document.querySelector(".my-container");
menu_btn.addEventListener("click", () => {
  sidebar.classList.toggle("active-nav");
  container.classList.toggle("active-cont");
});


  </script>



  <script type="text/javascript">
    

var dropdown = document.getElementsByClassName("drop-button");

var i;

for(i=0; i < dropdown.length; i++) {
  console.log("Inside for loop");
  dropdown[i].addEventListener("click", function() {
    console.log("click eventlistener added");
    this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
    console.log("dropdownContent.style.display is block ")
    dropdownContent.style.display = "none";
  }
    else  {
      dropdownContent.style.display= "block";
    }
  });
}



  </script>
</body>

</html>