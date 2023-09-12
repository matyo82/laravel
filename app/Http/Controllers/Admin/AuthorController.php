<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


class AuthorController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::orderBy('id', 'desc')->get();
        return view('admin.authors.list', compact('authors'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        $inputs = $request->all();

        if ($request->hasFile('image')) {
						$name=\Str::random(10);
                        $img = Image::make($request->image);
						$extension='jpeg';
						$img->save(public_path('images/authors/'.$name.'.'.$extension));
                    }
					$inputs['image']='images/authors/'.$name.'.'.$extension;
		            Author::create($inputs);
                    return to_route('author.index');
        }

    

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }
    public function edit(Author $author)
    {
        return view('admin.authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $inputs = $request->all();
        if ($request->hasFile('image')) {
						$name=\Str::random(10);
                        $img = Image::make($request->image);
						$extension='jpeg';
						$img->save(public_path('images/authors/'.$name.'.'.$extension));
                    }
					$inputs['image']='images/authors/'.$name.'.'.$extension;
					$author->update($inputs);
					return to_route('author.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        if ($author->delete()) {
            session()->flash('success', 'نویسنده  به همراه آثارش با موفقیت حذف شد!');
        } else {
            session()->flash('failed', 'حذف نویسنده با خطا مواجه شد!');
        }

        return to_route('author.index');
    }
}
