<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{

    // Show Locations
    public function index(){
        return view('location.index', [
            'locations' => Location::latest()->simplePaginate(10)
        ]);
    }

    // Show Single Location Data 
    public function show(Location $location){
        return view('location.show', ['location' => $location]);
    }

    // Show Location Create Form
    public function create(){
        return view('location.create');
    }

    // Store Location Data
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'address_line_one' => 'required',
            'address_line_two' => '',
            'country' => 'required',
            'city' => 'required',
            'contact_person_name' => 'required',
            'contact_person_email' => 'required',
            'contact_person_phoneNumber' => 'required',

        ]);

        Location::create($formFields);

        return redirect('/locations')->with('message', 'Successfully created Location');

    }

    // Show Location Data Edit Form 
    public function edit(Location $location){
        return view('location.edit', ['location' => $location]);
    }

    // Edit Location Data 
    public function update(Request $request, Location $location){
        $formFields = $request->validate([
            'name' => 'required',
            'address_line_one' => 'required',
            'address_line_two' => '',
            'country' => 'required',
            'city' => 'required',
            'contact_person_name' => 'required',
            'contact_person_email' => 'required',
            'contact_person_phoneNumber' => 'required',

        ]);

        $location->update($formFields);

        return back()->with('message', 'Location successfully edited');
    }

    // Delete Location Data 
    public function destroy(Location $location){
        $location->delete();

        return redirect('/locations')->with('message', 'Listing deleted successfully');
    }
}
