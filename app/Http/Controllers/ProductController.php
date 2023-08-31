<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Nevisandeh;
use App\Models\Product;
use AWS\CRT\HTTP\Request;
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
    public function store(\Illuminate\Http\Request $request)
    {
//        return $request;
        $request->validate([
            'name-book' => 'required|min:5|max:255',
            'nevisande' => 'required',
            'entesharat' => 'required|min:5|max:255',
            'caption' => 'required|min:35',
            'shabak' => 'min:7',
            'code-book' => 'required|min:7',
            'motarjem' => 'required|min:5',
            'main-price' => 'required|min:4',
            'off-price' => 'min:4',
            'status' => 'required',
            'inventory' => 'required|min:1',
            'image' => 'required|file|mimes:jpeg,png,gif,webp|max:5000',
        ]);
        $inputs = $request->all();
        $inputs['main-price'] =intval($inputs['main-price']) ;
        $inputs['off-price'] =intval($inputs['off-price']) ;
        $inputs['inventory'] = intval($inputs['inventory']);

        if ($request->hasFile('image')) {
            $extension = 'jpeg';
            $name = \Str::random(10);
            $img = Image::make($request->image)->save(public_path('images/product/' . $name . '.' . $extension));
            //$img = Image::make($request->image)->resize(300,200)->save(public_path('images/'.$name.'.'.$extension));
            $inputs['image'] = 'images/product/' . $img->basename;
        }
        $create = ProductController::create($inputs);
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
