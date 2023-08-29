<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreNevisandehRequest;
use App\Http\Requests\UpdateNevisandehRequest;
use App\Models\Image;
use App\Models\Nevisandeh;
use App\Http\Controllers\Controller;


class NevisandehController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Nevisandeh::all()->groupBy('id');
        return view('admin.nevisandeh.list', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.nevisandeh.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(\Illuminate\Http\Request $request)
    {
//        dd($request);

        $request->validate([
            'name' => 'required|min:5|max:255',
            'bio' => 'required|min:25',
//            'image' => 'required|file|mime:jpeg,png,gif,webp|max:5000',
        ]);


        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');
//            dd($path);
        }
        $create = Nevisandeh::create([
            'name' => $request->name,
            'bio' => $request->bio,
            'image' => $path,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Nevisandeh $nevisandeh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nevisandeh $nevisandeh)
    {
        return view('admin.nevisandeh.edite');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNevisandehRequest $request, Nevisandeh $nevisandeh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nevisandeh $nevisandeh)
    {
        //
    }
}
