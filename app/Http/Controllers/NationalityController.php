<?php

namespace App\Http\Controllers;

use App\Models\Nationality;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NationalityController extends Controller 
{
    public function nationalities() 
    {
        $nationalities = Nationality::all();
        return view('nationalities.index',compact('nationalities'));
    }

    public function create()
    {
        return view('nationalities.create');
    }

    public function store(Request $request)
    {
        $nationality = Nationality::create([
            'name' => $request->name
        ]);

        return redirect()->route('nationalities.index')->with('message','Nationalité enregistrée !');
    }

    public function show($id)
    {
        $nationality =  Nationality::findOrFail($id);
        return view('nationalities.show',compact('nationality'));
    }

    public function edit($id)
    {
        $nationality =  Nationality::findOrFail($id);
        return view('nationalities.edit',compact('nationality'));
    }

    public function update(Request $request, $id)
    {
        $nationality =  Nationality::findOrFail($id);
        $nationality->update([
            'name' => $request->name
        ]);

        return redirect()->route('nationalities.index')->with('message','Nationalité modifiée !');
    }

    public function destroy($id)
    {
        $nationality =  Nationality::findOrFail($id);
        $nationality->delete();

        return redirect()->route('nationalities.index')->with('message','Nationalité suprimée !');
    }
}