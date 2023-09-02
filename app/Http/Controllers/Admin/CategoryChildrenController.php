<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ChildrenCategoryRequest;
use App\Models\Category;
use GuzzleHttp\Psr7\Request;
use App\Http\Controllers\Controller;

class CategoryChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category_childs = Category::orderBy('id','desc')->whereNotNull('parent_id')->get();
        return view('admin.categories.children.list',compact('category_childs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
		$parents = Category::orderBy('id','desc')->whereNull('parent_id')->get();
        return view('admin.categories.children.create',compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ChildrenCategoryRequest $request)
    {
		$inputs=$request->all();
        Category::create($inputs);
        return to_route('category-childs.index');
    }


	
	public function show(Category $child){
		
	}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category_child)
    {
		$parents = Category::orderBy('id','desc')->whereNull('parent_id')->get();
        return view('admin.categories.children.edit', compact('category_child','parents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ChildrenCategoryRequest $request,Category $category_child)
    {
		$inputs=$request->all();
        $category_child->update($inputs);
        return to_route('category-childs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category_child)
    {
        $category_child->delete();
        return to_route('category-childs.index');
    }
}
