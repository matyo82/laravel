<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreNevisandehRequest;
use App\Http\Requests\UpdateNevisandehRequest;
use App\Models\Nevisandeh;
use App\Http\Controllers\Controller;


class NevisandehController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.nevisandeh.list');
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
        return($request);
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
        //
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
