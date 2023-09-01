<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use App\Models\Category;
use GuzzleHttp\Psr7\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('id','desc')->whereNull('parent_id')->get();
        return view('admin.categories.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('id','desc')->whereNull('parent_id')->get();
        return view('admin.categories.create',compact('categories'));
    }
	
	
	public function show(Category $category){
		
	}


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategorieRequest $request)
    {
		$inputs=$request->all();
        Category::create($inputs);
        return to_route('category.index');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
	    $parents = Category::orderBy('id','desc')->whereNull('parent_id')->get();
        return view('admin.categories.edit', compact('category','parents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategorieRequest $request,Category $category)
    {
		$inputs=$request->all();
        $category->update($inputs);
        return to_route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('category.index');
    }
}
