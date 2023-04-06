<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
Use Session;  

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Role::create(['name'=>'writer']);
        // Role::create(['name'=>'editer']);
        // Role::create(['name'=>'publisher']);
        // $role = Role::create(['name' => 'writer']);
        // $permission = Permission::create(['name' => 'publish product']);
        dd(1);
        $role = Role::find(4);
        $permission = Permission::find(7);
        // $role->givePermissionTo($permission); (Thêm quyền cho người dùng )
        // $permission->assignRole($role); (thêm quyền cho người dùng)
        // $role->revokePermissionTo($permission); (Xóa quyền của người dùng)
        // $permission->removeRole($role);  (Xóa quyền của người dùng)
        return view('admin.user.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}