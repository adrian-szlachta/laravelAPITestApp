<?php

namespace App\Http\Controllers;
use App\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        return Permission::all();
    }

    public function show($id)
    {
        return Permission::find($id);
    }

    public function store(Request $request)
    {
        $permission = Permission::create($request->all());

        return response()->json($permission, 201);
    }

    public function update(Request $request, Permission $permission)
    {
        $permission->update($request->all());

        return response()->json($permission, 200);
    }

    public function delete(Permission $permission)
    {
        $permission->delete();

        return response()->json(null, 204);
    }
}
