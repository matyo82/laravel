<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookRequest;
use Illuminate\Http\Request;


class BookRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book_requests = BookRequest::orderBy('id', 'desc')->get();
        return view('admin.book_request.list', ['book_requests' => $book_requests]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.book_request.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:255',
            'writer' => 'required|min:5|max:255',
            'description' => 'required|min:25',
        ]);
        $inputs = $request->all();
        // dd($inputs);
        BookRequest::create($inputs);
        return redirect(route('book-request.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookRequest $book_request)
    {
        return view('admin.book_request.edit', compact('book_request'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookRequest $book_request)
    {
        $request->validate([
            'title' => 'required|min:5|max:255',
            'writer' => 'required|min:5|max:255',
            'description' => 'required|min:25',
        ]);
        $inputs = $request->all();
        $book_request->update($inputs);
        return redirect(route('book-request.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookRequest $book_request)
    {
        $book_request->delete();
        return redirect(route('book-request.index'));
    }
}