<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller 
{
    public function addresses() 
    {
        $addresses = Address::all();
        return view('addresses.index',compact('addresses'));
    }

    public function create()
    {
        return view('addresses.create');
    }

    public function store(Request $request)
    {
        $address = Address::create([
            'address' => $request->address,
            'address2' => $request->address2,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
        ]);

        //dd($address);
        
        return redirect()->route('addresses.index')->with('message','Adresse enregistrée !');
    }
    public function show($id)
    {
        $address = Address::findOrFail($id);
        return view('addresses.show',compact('address'));
    }

    public function edit($id)
    {
        $address = Address::findOrFail($id);
        return view('addresses.edit',compact('address'));
    }

    public function update(Request $request, $id)
    {
        $address = Address::findOrFail($id);
        $address->update([
            'address' => $request->address,
            'address2' => $request->address2,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
        ]);
        return redirect()->route('addresses.index')->with('message','Adresse modifiée !');
    }

    public function destroy($id)
    {
        $address = Address::findOrFail($id);
        $address->delete();

        return redirect()->route('addresses.index')->with('message','Adresse Suprimée !');
    }
}