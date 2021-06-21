<?php

namespace App\Http\Controllers;

use App\Models\Civilstate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CivilstateController extends Controller 
{
    public function civilstates() 
    {
        $civilstates = Civilstate::all();
        return view('civilstates.index',compact('civilstates'));
    }

    public function create()
    {
        return view('civilstates.create');
    }
    
    public function store(Request $request)
    {
        $civilstate = Civilstate::create([
            'user_id' => $request->user_id,
            'gender' => $request->gender,
            'name' => $request->name,
            'birthname' => $request->birthname,
            'firstname' => $request->firstname,
            'firstname2' => $request->firstname2,
            'firstname3' => $request->firstname3,
            'birthdate' => $request->birthdate,
            'birthplace' => $request->birthplace,
            'nationality_id' => $request->nationality_id
        ]);

        return redirect()->route('civilstates.index')->with('message','Etat civil enregistré !');
        
    }

    public function show($id)
    {
        $civilstate = Civilstate::findOrFail($id);
        return view('civilstates.show',compact('civilstate'));
    }

    public function edit($id)
    {
        $civilstate = Civilstate::findOrFail($id);
        return view('civilstates.edit', compact('civilstate'));
    }

    public function update(Request $request, $id)
    {
        $civilstate = Civilstate::findOrFail($id);
        $civilstate->update([
            'user_id'=> $request->user_id,
            'gender' => $request->gender,
            'name' => $request->name,
            'birthname' => $request->birthname,
            'firstname' => $request->firstname,
            'firstname2' => $request->firstname2,
            'firstname3' => $request->firstname3,
            'birthdate' => $request->birthdate,
            'birthplace' => $request->birthplace,
            'nationality_id' => $request->nationality_id
        ]);

        return redirect()->route('civilstates.index')->with('message','Etat civil modifié !');

    }

    public function destroy($id)
    {
        $civilstate = Civilstate::findOrFail($id);
        $civilstate->delete();
        return redirect()->route('civilstates.index')->with('message','Etat civil suprimé !');
    }
}