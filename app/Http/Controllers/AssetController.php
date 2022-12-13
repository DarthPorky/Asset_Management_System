<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Employee;
use App\Models\Vendor;
use App\Models\Asset;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class AssetController extends Controller
{
    // Show all Asset
    public function index(){
        return view('item.index', ['assets' => DB::table('assets')
            ->join('vendors', 'assets.vendor', '=', 'vendors.id')
            ->join('locations', 'assets.location', '=', 'locations.id')
            ->select('assets.*',
                    'vendors.name as vendor',
                    'locations.name as location',
                    )->simplePaginate(10)
        ]);
    }

    // Show Single Asset
    public function show(Asset $asset){
        return view('item.show', [
            'asset' => $asset,
            'location' => DB::table('locations')->where('id', $asset->location)->first(),
            'vendor' => DB::table('vendors')->where('id', $asset->vendor)->first(),
        ]);
    }

    // Show Form to create Asset
    public function create(){
        return view('item.create', [
            'locations' => Location::all(),
            'vendors' => Vendor::all()
        ]);
    }

    // Store Asset Data
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'serial_number' => ['required', Rule::unique('assets', 'serial_number')],
            'price' => 'required',
            'depriciation_type' => 'required',
            'location' => 'required',
            'vendor' => 'required',
            'description' => ''
        ]);

        // if($request->hasFile('image')){
        //     $formFields['image'] = $request->file('image')->store('asset_images', 'public');
        // }

        Asset::create($formFields);

        return redirect('/')->with('message', 'Successfully added Employee');
    }

    // Show Asset Edit Form
    public function edit(Asset $asset){
        return view('item.edit', [ 
            'asset' => $asset,
            'location' => DB::table('locations')->where('id', $asset->location)->first(), 
            'vendor' => DB::table('vendors')->where('id', $asset->vendor)->first(), 
            'locations' => Location::all(),
            'vendors' => Vendor::all(), 

        ]);
    }

    // Edit Asset Data
    public function update(Request $request, Asset $asset){
        $formFields = $request->validate([
            'name' => 'required',
            'serial_number' => ['required'],
            'price' => 'required',
            'depriciation_type' => 'required',
            'location' => 'required',
            'vendor' => 'required',
            'description' => ''
        ]);

        $asset->update($formFields);

        return back()->with('message', 'Successfully edited Asset');
    }

    // Delete Asset Data
    public function destroy(Asset $asset){
        $asset->delete();

        return redirect('/')->with('message', 'Asset deleted successfully');
    }
}
