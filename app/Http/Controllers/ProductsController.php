<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class ProductsController extends Controller
{
	// In charge of showing the default products page
    public function index()
    {

    	$products = \App\Product::all();

    	// $products = [
    	// 	['name' => 'Apple',
    	// 	 'price' => '$1',
    	// 	],
    	// 	[
    	// 	 'name' => 'Banana',
    	// 	 'price' => '$1.20'
    	// 	]

    	// ];

    	$mostPopularProducts = [];

    	return view('products', compact('products', 'mostPopularProducts'));

    }

    public function create()
    {
        return view('products.create');
    }

    public function store( Request $request )
    {
        // Validation
        $this->validate( $request, [

            'name'=>'required|min:2|max:10',
            'description'=>'required|between:20,1000',
            'price'=>'required|digits_between:1,4',
            'stock'=>'required|integer|min:0|max:65535'

            ]);

        // Create a new product 
        $newProduct = new Product( $request->all() );

        // Populate the product with form data
        // $newProduct->name        = $request->name;
        // $newProduct->description = $request->description;
        // $newProduct->price       = $request->price;
        // $newProduct->stock       = $request->stock;

        // Save the new product
        $newProduct->save();

        return redirect('products');


    }

    public function show( $id )
    {
        // Find the product with that ID
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    public function edit( $id )
    {
        // Get the info about the product
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));

    }

    public function update( Request $request, $id )
    {
        $this->validate($request, [

            'name'=>'required|min:2'

            ]);

        // Find the product that we are editing 
        $product = Product::FindOrFail($id);

        $product->name = $request->name;

        $product->save();

        // Redirect the user back to the products page they just modified
        return redirect('products/'.$id);

    }
}
