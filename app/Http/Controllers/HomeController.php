<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        //Creating Roles using Spatie Package
        // $role = Role::create(['name' => 'admin']);   
        // $permission=Permission::create(['name'=>'add users']);
         // Permission::create(['name'=>'add roles']);
        // $role=Role::findById(1);
        // $permission=Permission::findById(1);
        // $permission1=Permission::findById(2);
        // $role->syncPermissions($permission,$permission1);
        // Role::create(['name'=>'buyer']);
        // Role::create(['name'=>'seller']);
        // Role::create(['name'=>'superadmin']);
        // Permission::create(['name'=>'Add Product']);
        // Permission::create(['name'=>'Add Roles']);
        // Permission::create(['name'=>'View Product']);
        // $role=Role::findById(3);
        // $permission=Permission::findById(5);
        // $role->givePermissionTo($permission);
        // $permissions=Permission::all();
        // $role->syncPermissions($permissions);
        // $user->assignRole('buyer');
        return view('admin.dashboard');
    }
}
