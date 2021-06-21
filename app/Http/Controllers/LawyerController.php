<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LawyerController extends Controller 
{
    public function lawyers() 
    {
        $lawyers = Lawyer::all();
        return view('lawyers.index',compact('lawyers'));
    }

    public function create()
    {
        return view('lawyers.create');
    }

    public function store(Request $request)
    {
        $lawyer = Lawyer::create([
            'contact_id'=> $request->contact_id,
            'civilstate_id'=> $request->civilstate_id,
            'barreau'=> $request->barreau,
            'user_id'=> $request->user_id
        ]);

        return redirect()->route('lawyers.index')->with('message','Avocat enregistré !');
    }

    public function show($id)
    {
        $lawyer = Lawyer::findOrFail($id);
        return view('lawyers.show', compact('lawyer'));
    }

    public function edit($id)
    {
        $lawyer = Lawyer::findOrFail($id);
        return view('lawyers.edit', compact('lawyer'));
    }

    public function update(Request $request, $id)
    {
        $lawyer = Lawyer::findOrFail($id);
        $lawyer->update([
            'contact_id'=> $request->contact_id,
            'civilstate_id'=> $request->civilstate_id,
            'barreau'=> $request->barreau,
            'user_id'=> $request->user_id
        ]);

        return redirect()->route('lawyers.index')->with('message','Avocat modifié !');
    }

    public function destroy($id)
    {
        $lawyer = Lawyer::findOrFail($id);
        $lawyer->delete();

        return redirect()->route('lawyers.index')->with('message','Avocat suprimé !');
    }
}