<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Nevisandeh;
use App\Models\Product;
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
                    return view('admin.product.list');
          }

          /**
           * Show the form for creating a new resource.
           */
          public function create()
          {
                    $nevisandeh = Nevisandeh::all()->groupBy('name');
                    return view('admin.product.create', compact('nevisandeh'));
          }

          /**
           * Store a newly created resource in storage.
           */
          public function store(Request $request)
          {
                    $validated = $request->validate([
                              'name_book' => 'required|min:5|max:255',
                              'nevisande_id' => 'required|exists:nevisandehs,id',
                              'entesharat' => 'required|min:5|max:255',
                              'description' => 'required|min:35',
                              'shabak' => 'min:7',
                              'code_book' => 'required|min:7',
                              'motarjem' => 'required|min:5',
                              'main_price' => 'required|min:4',
                              'off_price' => 'min:4',
                              'status' => ['required' , Rule::in(['active', 'disabled'])],
                              'inventory' => 'required|min:1',
                              'image' => 'required|file|mimes:jpeg,png,gif,webp|max:5000',
                    ]);

                    if ($request->hasFile('image')) {
                              $path = 'public/images/products';
                              $fullPath = $request->file('image')->store($path);
                              //$img = Image::make($request->image)->resize(300,200)->save(public_path('images/'.$name.'.'.$extension));
                              $validated['image'] = $fullPath;
                    }

                    $nevisandeh = Nevisandeh::find($validated['nevisande_id']);
                    unset($validated['nevisande_id']);
                    
                    if($nevisandeh->products()->create($validated)){
                              session()->flash('product-generated' , 'محصول با موفقیت ایجاد شد!');
                    }else{
                              Storage::delete($fullPath);
                    }
                    return to_route('product.create');
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
                    return view('admin.product.list', compact('product'));
          }

          /**
           * Update the specified resource in storage.
           */
          public function update(UpdateProductRequest $request, Product $product)
          {
                    //
          }

          /**
           * Remove the specified resource from storage.
           */
          public function destroy(Product $product)
          {
                    //
          }
}
