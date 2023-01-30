<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Feature;

class PermissionController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('permission.index',compact('roles'));
    }

    public function create()
    {
    return view ('permission.createPermission');
    }
    public function store(Request $request)
    {
        dd($request);
        return view('permission.sickPermission');
    }

    public function sick()
    {
    return view ('permission.sickPermission');
    }

    public function permit()
    {
    return view ('permission.permitPermission');
    }

    public function leave()
    {
    return view ('permission.leavePermission');
    }
}
