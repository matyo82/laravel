<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUserRequest;


class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = User::orderBy('created_at', 'desc')->where('user_type', 1)->get();
        // dd(auth());
        // User::create([
        //     'name' => 'mohsen',
        //     'email' => 'mohsen@gmail.com',
        //     'password' => 123,
        //     'user_type' => 1,
        //     'status' => 1
        // ]);
        // auth()->loginUsingId(3);
        // return auth()->user()->id;
        $auth_user_id = auth()->user();

        return view('admin.users.admin.index', compact('admins', "auth_user_id"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(User $admin)
    {
        return view('admin.users.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminUserRequest $request, User $admin)
    {
        $inputs = $request->all();
        $admin->update($inputs);
        return to_route('admins.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
