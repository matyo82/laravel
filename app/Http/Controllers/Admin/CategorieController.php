<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use App\Models\Categorie;
use GuzzleHttp\Psr7\Request;
<<<<<<< HEAD:app/Http/Controllers/Admin/CategorieController.php
use App\Http\Controllers\Controller;

=======
use Illuminate\Auth\Events\Validated;
>>>>>>> ed498ee46684603cf1b69529b51a644adc568127:app/Http/Controllers/CategorieController.php

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Categorie::all()->groupBy('kay');
        return view('admin.categories.list', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'kay' => 'required',
            'name' => 'required|max:50'
        ]);
        Categorie::create([
            'kay' => $request->kay,
            'name' => $request->name
        ]);
        return redirect()->back();

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        return view('admin.categories.adite', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\Illuminate\Http\Request $request, Categorie $categorie)
    {
        $categorie->update($request->all());
        return redirect('admin/categorie');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->back();
    }
}
