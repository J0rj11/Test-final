<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('product.index', [
            "products" => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
         $request->validate([
            'code'     => 'required',
            'name'     => 'required',
            'category' => 'required',
            'quantity' => 'required',
            'price'    => 'required',
            'description' => 'required'
        ]);
    
        $data = Product::create($request->all());

        return response()->json([
            "message" => "Registered new product",
            "product" => $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product){
        echo "Displaying #" . $product->id . " product " . $product->name;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $request->validate([
            'code'     => 'required',
            'name'     => 'required',
            'category' => 'required',
            'quantity' => 'required',
            'price'    => 'required',
            'description' => 'required'
        ]);

        Product::where('id', $id)->update($request->all());

        return response()->json([
            "message" => "Updated product data"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $is = Product::where('id', $id)->delete();

        return response()->json([
            "message" => $is ? "Product deleted" : "Product doesn't exist"
        ]);
    }
}
