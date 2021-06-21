<?php

namespace App\Http\Controllers;

use App\Models\Lawfirm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LawfirmController extends Controller 
{
    public function lawfirms() 
    {
        $lawfirms = Lawfirm::all();
        return view('lawfirms.index',compact('lawfirms'));
    }

    public function create()
    {
        return view('lawfirms.create');
    }

    public function store(Request $request)
    {
        $lawfirm = Lawfirm::create([
            'contact_id' => $request->contact_id
        ]);

        return redirect()->route('lawfirms.index')->with('message','Cabinet d\'avocat enregistré !');
    }
    public function show($id)
    {
        $lawfirm = Lawfirm::findOrFail($id);
        return view('lawfirms.show',compact('lawfirm'));
    }

    public function edit($id)
    {
        $lawfirm = Lawfirm::findOrFail($id);
        return view('lawfirms.edit',compact('lawfirm'));
    }

    public function update(Request $request, $id)
    {
        $lawfirm = Lawfirm::findOrFail($id);
        $lawfirm->update([
            'contact_id'=> $request->contact_id
        ]);

        return redirect()->route('lawfirms.index')->with('message','Cabinet d\'avocat modifié !');
    }

    public function destroy($id)
    {
        $lawfirm = Lawfirm::findOrFail($id);
        $lawfirm->delete();
        return redirect()->route('lawfirms.index')->with('message','Cabinet d\'avocat suprimé !');
    }
}