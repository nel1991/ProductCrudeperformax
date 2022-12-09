<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\product_category;
use App\Models\category_per_product;

use DB;


class ProdCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     

        $catpr = product_category::all();

        return view('prcatcreate')->with('catpr', $catpr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catpr = product_category::all();
         return view('prcatcreate')->with('catpr', $catpr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorydata = $request->all();
        product_category::create($categorydata);

        $catpr = product_category::all();
          return view('prcatcreate')->with('catpr', $catpr);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $catpr = product_category::find($id);
              return view('editcateg')->with('catprs', $catpr);
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
        
           $catpr = product_category::find($id);
            $input = $request->all();
            $catpr->update($input);

        return redirect('/catcreate')->with('flash_message', 'Updated data!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product_category::find($id)->delete();
    /*    return view('prcatcreate');*/
        return redirect('/catcreate')->with('flash_message', 'Deleted');
    }
}
