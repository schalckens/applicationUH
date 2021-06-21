<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller 
{
    public function roles() 
    {
        $roles = Role::all();
        return view('roles.index',compact('roles'));
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        $role = Role::create([
            'name'=> $request->name
        ]);
        return redirect()->route('roles.index')->with('message','Role enregistré !');
    }
    
    public function show($id)
    {
        $role = Role::findOrFail($id);
        return view('roles.show',compact('role'));
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('roles.edit',compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->update([
            'name'=> $request->name
        ]);
        return redirect()->route('roles.index')->with('message','Role modifié !');
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->route('roles.index')->with('message','Role suprimé !');
    }
}