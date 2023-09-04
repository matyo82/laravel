<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Author;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Genre;
use App\Models\Age;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
          /**
           * Display a listing of the resource.
           */
          public function index()
          {
			        $products=Product::orderBy('created_at','desc')->get();
                    return view('admin.product.list',compact('products'));
          }

          /**
           * Show the form for creating a new resource.
           */
          public function create()
          {
                    $authors = Author::all();
                    $genres = Genre::all();
                    $ages = Age::all();
                    return view('admin.product.create', compact('authors','genres','ages'));
          }

          /**
           * Store a newly created resource in storage.
           */
          public function store(StoreProductRequest $request)
          {
			        $inputs=$request->all();
                    if ($request->hasFile('image')) {
						$name=\Str::random(10);
                        $img = Image::make($request->image);
						$extension='jpeg';
						$img->save(public_path('images/products/'.$name.'.'.$extension));
                    }
					$inputs['image']='images/products/'.$name.'.'.$extension;
                    Product::create($inputs);
                    return to_route('product.index');
          }

          /**
           * Display the specified resource.
           */
          public function show(Product $product)
          {
                    // next time ...
          }

          /**
           * Show the form for editing the specified resource.
           */
          public function edit(Product $product)
          {
                    $authors = Author::all();
                    $genres = Genre::all();
                    $ages = Age::all();
                    return view('admin.product.edite', compact('product','authors','genres','ages'));
		   }

          /**
           * Update the specified resource in storage.
           */
          public function update(UpdateProductRequest $request, Product $product)
          {
			        $inputs=$request->all();
                    if ($request->hasFile('image')) {
						$name=\Str::random(10);
                        $img = Image::make($request->image);
						$extension='jpeg';
						$img->save(public_path('images/products/'.$name.'.'.$extension));
                    }
					$inputs['image']='images/products/'.$name.'.'.$extension;
                    $product->update($inputs);
                    return to_route('product.index');
          }

          /**
           * Remove the specified resource from storage.
           */
          public function destroy(Product $product)
          {
                    $product->delete();
				    return to_route('product.index');

					
          }
}
