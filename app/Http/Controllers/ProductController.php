<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\product_category;
use App\Models\category_per_product;

use DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


 
       $prodc = Product::all();
/*        $catper = category_per_product::with('product_category')->get();
        $prodcat = product_category::with('category_per_product')->get();
   */
   




/*$col = DB::table('product')
            ->select('id')
            ->get();
*                     
/*
        return view('index')->with('catper', $catper)->with('prodcat', $prodcat);*/

        return view('index', compact('prodc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $prodcat = product_category::all();

        return view('create')->with('prodcat', $prodcat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          /*  $fpid = Product::findOrFail($request->id);*/

          $requestData = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
       $path = $request->file('image')->storeAs('images', $fileName, 'public');
       $requestData["image"] = '/storage/'.$path;
        Product::create($requestData);




/*        $fileName = time().$request->file('image')->getClientOriginalName();
       $path = $request->file('image')->storeAs('images', $fileName, 'public');
       $requestData["image"] = '/storage/'.$path;
        Product::create($requestData);
*/

   /*     $values = array(
            
            'title' => $request->input('prodcate')

        );
        product_category::create($values);*/

        $catperval = array(
            'product_id' => $request->input('id'),
            'productcategory_id' => $request->input('prodcate')
        );
        category_per_product::create($catperval);


     /*   $cat = $request->input('prodcate');

         $data=array('title'=>$cat);
        DB::table('product_category')->insert($data);*/
      /*  product_category::create($cat);*/


        return redirect('/prod')->with('flash_message', 'Saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produ = Product::find($id);
        return view('show')->with('produs', $produ);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produ = Product::find($id);
            
     /*   $prodcat = product_category::find($id);*/
       $prodcat = product_category::all();

/*return view('edit')->with('produs', $produ);*/
        /*return view('edit')->with('prodcats', $prodcat);*/

             return view('edit')->with('produs', $produ)->with('prodcat', $prodcat);
  /*      return view('edit')->with('produs', $produ, 'prodcats', $prodcat);*/

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $produ = Product::find($id);
   /*      $prodcat = product_category::find($id);*/
        $input = $request->all();

          $fileName = time().$request->file('image')->getClientOriginalName();
       /* $imageName = time().$request->file('image')->getClientOriginalName();*/
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
       /* $pathimages = $request->file('image')->storeAs('images', $imageName, 'public');*/
        $input["image"] = '/storage/'.$path;

            $produ->update($input);
      /*      $prodcat>update($input);*/
   /*     Product::update($input);*/
        return redirect('/prod')->with('flash_message', 'Updated data!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*Product::destroy($id);*/
        Product::find($id)->delete();
        return redirect('/prod')->with('flash_message', 'Deleted');
    }
}
