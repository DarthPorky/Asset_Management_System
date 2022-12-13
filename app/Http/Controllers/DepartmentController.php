<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    // Show all Department
    public function index(){
        return view('department.index', ['departments' => Department::latest()->simplePaginate(10)]);
    }

    // Show Single Department
    public function show(Department $department){
        return view('department.show', ['department' => $department]);
    }

    // Show Form to create Department
    public function create(){
        return view('department.create');
    }

    // Store Department Data
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'contact_person_name' => ['required'],
            'contact_person_email' => ['required', 'email'],
            'contact_person_phoneNumber' => 'required',
            'status' => 'required',
        ]);

        Department::create($formFields);

        return redirect('/departments')->with('message', 'Successfully added Employee');
    }

    // Show Department Edit Form
    public function edit(Department $department){
        return view('department.edit', ['department' => $department]);
    }

    // Edit Department Data
    public function update(Request $request, Department $department){
        $formFields = $request->validate([
            'name' => 'required',
            'contact_person_name' => ['required'],
            'contact_person_email' => ['required', 'email'],
            'contact_person_phoneNumber' => 'required',
            'status' => 'required',
        ]);

        $department->update($formFields);

        return back()->with('message', 'Successfully edited department');
    }

    // Delete Department Data
    public function destroy(Department $department){
        $department->delete();

        return redirect('/departments')->with('message', 'department deleted successfully');
    }
}
