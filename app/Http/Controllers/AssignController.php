<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Employee;
use App\Models\Vendor;
use App\Models\Department;
use App\Models\Assign;
use App\Models\Asset;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class AssignController extends Controller
{
    // Show all Assigned Assets
    public function index(){
        return view('assign.index', ['assigns' => DB::table('assigns')
                                        ->join('vendors', 'assigns.vendor', '=', 'vendors.id')
                                        ->join('locations', 'assigns.location', '=', 'locations.id')
                                        ->join('assets', 'assigns.asset_name', '=', 'assets.id')
                                        ->join('departments', 'assigns.department', '=', 'departments.id')
                                        ->join('employees', 'assigns.assign_to', '=', 'employees.id')
                                        ->select('assigns.*',
                                                'vendors.name as vendor',
                                                'locations.name as location',
                                                'assets.name as asset_name',
                                                'departments.name as department',
                                                'employees.name as assign_to'
                                                )->simplePaginate(10)
                                    ]);
    }

    // Show Single Assigned Asset
    public function show(Assign $assign){
        return view('assign.show', [
            'desc' => DB::table('assigns')->where('id', $assign->id)->first(),
            'location' => DB::table('locations')->where('id', $assign->location)->first(),
            'vendor' => DB::table('vendors')->where('id', $assign->vendor)->first(),
            'department' => DB::table('departments')->where('id', $assign->department)->first(),
            'asset' => DB::table('assets')->where('id', $assign->asset_name)->first(),
            'assign' => DB::table('employees')->where('id', $assign->assign_to)->first(),
        ]);
    }

    // Show Form to assign Asset
    public function create(){
        return view('assign.create', [
            'locations' => Location::all(),
            'departments' => Department::all(),
            'employees' => Employee::all(),
            'vendors' => Vendor::all(),
            'assets' => Asset::all()
        ]);
    }

    // Store Assigned Asset Data
    public function store(Request $request){
        $formFields = $request->validate([
            'vendor' => 'required',
            'location' => ['required'],
            'asset_name' => 'required',
            'department' => 'required',
            'assign_to' => 'required',
            'description' => '',
        ]);

        Assign::create($formFields);

        return redirect('/assign')->with('message', 'Successfully assigned Asset');
    }

    // Show Assigned Asset Edit Form
    public function edit(Assign $assign){
        return view('assign.edit', [
            'data' => $assign,
            'location' => DB::table('locations')->where('id', $assign->location)->first(),
            'vendor' => DB::table('vendors')->where('id', $assign->vendor)->first(),
            'department' => DB::table('departments')->where('id', $assign->department)->first(),
            'asset' => DB::table('assets')->where('id', $assign->asset_name)->first(),
            'assign' => DB::table('employees')->where('id', $assign->assign_to)->first(),
            'locations' => Location::all(),
            'departments' => Department::all(),
            'employees' => Employee::all(),
            'vendors' => Vendor::all(),
            'assets' => Asset::all()
        ]);
    }

    // Edit Assigned Asset Data
    public function update(Request $request, Assign $assign){
        $formFields = $request->validate([
            'vendor' => 'required',
            'location' => ['required'],
            'asset_name' => 'required',
            'department' => 'required',
            'assign_to' => 'required',
            'description' => '',
        ]);

        $assign->update($formFields);

        return back()->with('message', 'Successfully edited assigned Asset');
    }

    // Delete Assgined Asset Data
    public function destroy(Assign $assign){
        $assign->delete();

        return redirect('/assign')->with('message', 'Assignment deleted successfully');
    }
}
