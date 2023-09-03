<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreNevisandehRequest;
use App\Http\Requests\UpdateNevisandehRequest;
use App\Models\Nevisandeh;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


class NevisandehController extends Controller
{
          protected $rules = [
                    'name' => 'required|min:5|max:255',
                    'bio' => 'required|min:25',
                    'image' => 'required|file|mimes:jpeg,png,gif,webp|max:5000',
          ];

          /**
           * Display a listing of the resource.
           */
          public function index()
          {
                    $nevisandehs = Nevisandeh::orderBy('id', 'desc')->get();
                    return view('admin.nevisandeh.list', compact('nevisandehs'));
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
                    $validated = $request->validate($this->rules);

                    if ($request->hasFile('image')) {
                              $path = 'public/images/nevisandehs';
                              $fullPath = $request->file('image')->store($path);
                              //$img = Image::make($request->image)->resize(300,200)->save(public_path('images/'.$name.'.'.$extension));
                              $validated['image'] = $fullPath;
                    }

                    if (Nevisandeh::create($validated)) {
                              session()->flash('success', 'نویسنده با موفقیت ایجاد شد!');
                    } else {
                              Storage::delete($fullPath);
                              session()->flash('failed', 'ایجاد نویسنده با خطا مواجه شد!');
                    }

                    return to_route('nevisandeh.index');
          }

          /**
           * Display the specified resource.
           */
          public function show(Nevisandeh $nevisandeh)
          {
                    //
          }

<<<<<<< HEAD
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nevisandeh $nevisandeh)
    {
        $nevisandeh->delete();
        return to_route('nevisandeh.index');
    }
=======
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
                    $validated = $request->validate($this->rules);

                    if ($request->hasFile('image')) {
                              $path = 'public/images/nevisandehs';
                              $fullPath = $request->file('image')->store($path);
                              //$img = Image::make($request->image)->resize(300,200)->save(public_path('images/'.$name.'.'.$extension));
                              $validated['image'] = $fullPath;
                    }

                    $oldPath = $nevisandeh->image;
                    if ($nevisandeh->update($validated)) {
                              Storage::delete($oldPath);
                              session()->flash('success', 'نویسنده با موفقیت ویرایش شد!');
                    } else {
                              Storage::delete($fullPath);
                              session()->flash('failed', 'ویرایش نویسنده با خطا مواجه شد!');
                    }

                    return to_route('nevisandeh.index');
          }

          /**
           * Remove the specified resource from storage.
           */
          public function destroy(Nevisandeh $nevisandeh)
          {
                    if ($nevisandeh->delete()) {
                              session()->flash('success', 'نویسنده  به همراه آثارش با موفقیت حذف شد!');
                    } else {
                              session()->flash('failed', 'حذف نویسنده با خطا مواجه شد!');
                    }

                    return to_route('nevisandeh.index');
          }
>>>>>>> 97318bc70bb2001c4c63eb14edad9d0990678473
}
