<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreNevisandehRequest;
use App\Http\Requests\UpdateNevisandehRequest;
use App\Models\Nevisandeh;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;


class NevisandehController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Nevisandeh::orderBy('id', 'desc')->get();
        return view('admin.nevisandeh.list', compact('users'));
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
        //    dd($request->all());

        $request->validate([
            'name' => 'required|min:5|max:255',
            'bio' => 'required|min:25',
            'image' => 'required|file|mimes:jpeg,png,gif,webp|max:5000',
        ]);
        $inputs = $request->all();

        if ($request->hasFile('image')) {
            $extension = 'jpeg';
            $name = \Str::random(10);
            $img = Image::make($request->image)->save(public_path('images/' . $name . '.' . $extension));
            //$img = Image::make($request->image)->resize(300,200)->save(public_path('images/'.$name.'.'.$extension));
            $inputs['image'] = 'images/nevisaneh/' . $img->basename;
        }
        $create = Nevisandeh::create($inputs);
        return to_route('nevisandeh.index');
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
        return view('admin.nevisandeh.edite', compact('nevisandeh'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNevisandehRequest $request, Nevisandeh $nevisandeh)
    {
        $inputs = $request->all();
        if ($request->hasFile('image')) {
            $extension = 'jpeg';
            $name = \Str::random(10);
            $img = Image::make($request->image)->save(public_path('images/' . $name . '.' . $extension));
            //$img = Image::make($request->image)->resize(300,200)->save(public_path('images/'.$name.'.'.$extension));
            $inputs['image'] = 'images/' . $img->basename;
        }
        $create = $nevisandeh->update($inputs);
        return to_route('nevisandeh.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nevisandeh $nevisandeh)
    {
        $nevisandeh->delete();
        return to_route('nevisandeh.index');

    }
}
