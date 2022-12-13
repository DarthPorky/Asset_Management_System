<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use Illuminate\Validation\Rule;

class VendorController extends Controller
{
    // Show all Vendor
    public function index(){
        return view('asset_supplier.index', ['vendors' => Vendor::latest()->simplePaginate(10)]);
    }

    // Show Single Vendor
    public function show(Vendor $vendor){
        return view('asset_supplier.show', ['vendor' => $vendor]);
    }

    // Show Form to create Vendor
    public function create(){
        return view('asset_supplier.create');
    }

    // Store Vendor Data
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', Rule::unique('vendors', 'name')],
            'email' => ['required', 'email'],
            'phone' => 'required',
            'contact_person' => 'required',
            'designation' => 'required',
            'country' => 'required',
            'city' => 'required',
            'description' => 'required'
        ]);

        Vendor::create($formFields);

        return redirect('/vendors')->with('message', 'Successfully added Employee');
    }

    // Show Vendor Edit Form
    public function edit(Vendor $vendor){
        return view('asset_supplier.edit', [
            'vendor' => $vendor
        ]);
    }

    // Edit Employee Data
    public function update(Request $request, Vendor $vendor){
        $formFields = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => 'required',
            'contact_person' => 'required',
            'designation' => 'required',
            'country' => 'required',
            'city' => 'required',
            'description' => ''
        ]);

        $vendor->update($formFields);

        return back()->with('message', 'Successfully edited Vendor');
    }

    // Delete Vendor Data
    public function destroy(Vendor $vendor){
        $vendor->delete();

        return redirect('/vendors')->with('message', 'Vendor deleted successfully');
    }
}
