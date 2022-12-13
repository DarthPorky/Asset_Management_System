<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Employee;
use App\Models\Vendor;
use App\Models\Department;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    // Show all Employees
    public function index(){
        return view('employee.index', ['employees' => DB::table('employees')
        ->join('departments', 'employees.department', '=', 'departments.id')
        ->join('locations', 'employees.location', '=', 'locations.id')
        ->select('employees.*', 'departments.name as department_name', 'locations.name as location')->paginate(10),
    ]);
    }

    // Show Single Employee
    public function show(Employee $employee){
        return view('employee.show', [
            'employee' => $employee,
            'location' => DB::table('locations')->where('id', $employee->location)->first(),
            'department' => DB::table('departments')->where('id', $employee->department)->first(),
            'locations' => Location::all(),
            'departments' => Department::all()
        ]);
    }

    // Show Form to create Employee
    public function create(){
        return view('employee.create', [
            'locations' => Location::all(),
            'departments' => Department::all(),
            'employees' => Employee::all(),
            'vendors' => Vendor::all()
        ]);
    }

    // Store Employee Data
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('employees', 'email')],
            'phone_number' => 'required',
            'location' => 'required',
            'reporting_manager' => 'required',
            'department' => 'required'
        ]);

        Employee::create($formFields);

        return redirect('/employees')->with('message', 'Successfully added Employee');
    }

    // Show Employee Edit Form
    public function edit(Employee $employee){
        
        return view('employee.edit', [
            'employee' => $employee,
            'department' => DB::table('departments')->where('id', $employee->department)->first(),
            'location' => DB::table('locations')->where('id', $employee->location)->first(),
            'departments' => Department::all(),
            'locations' => Location::all(),
            'employees' => Employee::all()
        ]);
    }

    // Edit Employee Data
    public function update(Request $request, Employee $employee){
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'phoneNumber' => 'required',
            'location' => 'required',
            'reporting_manager' => 'required',
            'department' => 'required'
        ]);

        $employee->update($formFields);

        return back()->with('message', 'Successfully edited Employee');
    }

    // Delete Employee Data
    public function destroy(Employee $employee){
        DB::table('assigns')->where('assign_to', $employee->id)->delete();
        $employee->delete();

        return redirect('/employees')->with('message', 'Employee deleted successfully');
    }
}
