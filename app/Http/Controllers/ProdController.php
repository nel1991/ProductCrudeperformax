<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProdController extends Controller
{
    public function index()
    {
         /* $prods = Product::all();

        return view('productpage')->with('prods', $prods);*/
      /* return view('productpage');*/
    }

   public function view(){
        $prods = Product::all();

        return view('productpage')->with('prods', $prods);
    }

    public function create(){

        return view('create');
    }

    public function store(Request $request){

        $requestData = $request->all();
      /*  $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path;*/
        Product::create($requestData);
        return redirect('productpage')->with('flash_message', 'saved!');  
  
    }
}
