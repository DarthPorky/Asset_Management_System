<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AssignController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Start of Asset Routes */

Route::get('/', function(){
    return view('dashboard.index');
});

// Show Assets
Route::get('/assets', [AssetController::class, 'index']);

// Show create Asset Form
Route::get('/assets/create', [AssetController::class, 'create']);

// Store Asset Data
Route::post('/assets', [AssetController::class, 'store']);

// Show Asset Edit Form
Route::get('/assets/{asset}/edit', [AssetController::class, 'edit']);

// Edit Asset Data
Route::put('/assets/{asset}', [AssetController::class, 'update']);

// Delete Asset Data
Route::delete('/assets/{asset}', [AssetController::class, 'destroy']);

// Show Single Asset
Route::get('/assets/{asset}', [AssetController::class, 'show']);

/* End of Asset Routes */

/* Start of Location Routes */

// Show All Locations
Route::get('/locations', [LocationController::class, 'index']);

// Show create location Form
Route::get('/locations/create', [LocationController::class, 'create']);

// Store location Data
Route::post('/locations', [LocationController::class, 'store']);

// Show Location Edit Form
Route::get('/locations/{location}/edit', [LocationController::class, 'edit']);

// Edit Location Data
Route::put('/locations/{location}', [LocationController::class, 'update']);

// Delete Location Data
Route::delete('/locations/{location}', [LocationController::class, 'destroy']);

// Show Single Location
Route::get('/locations/{location}', [LocationController::class, 'show']);

/* End of Location Routes */

/* Start of Employee Routes */

// Show All Employee
Route::get('/employees', [EmployeeController::class, 'index']);

// Show create Employee Form
Route::get('/employees/create', [EmployeeController::class, 'create']);

// Store Employee Data
Route::post('/employees', [EmployeeController::class, 'store']);

// Show Employee Edit Form
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit']);

// Edit Employee Data
Route::put('/employees/{employee}', [EmployeeController::class, 'update']);

// Delete Employee Data
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy']);

// Show Single Employee
Route::get('/employees/{employee}', [EmployeeController::class, 'show']);

/* End of Employee Routes */

/* Start of Department Routes */

// Show All Department
Route::get('/departments', [DepartmentController::class, 'index']);

// Show create Department Form
Route::get('/departments/create', [DepartmentController::class, 'create']);

// Store Department Data
Route::post('/departments', [DepartmentController::class, 'store']);

// Show Department Edit Form
Route::get('/departments/{department}/edit', [DepartmentController::class, 'edit']);

// Edit Department Data
Route::put('/departments/{department}', [DepartmentController::class, 'update']);

// Delete Department Data
Route::delete('/departments/{department}', [DepartmentController::class, 'destroy']);

// Show Single Department
Route::get('/departments/{department}', [DepartmentController::class, 'show']);

/* End of Department Routes */

/* Start of Vendor Routes */

// Show All Vendor
Route::get('/vendors', [VendorController::class, 'index']);

// Show create Vendor Form
Route::get('/vendors/create', [VendorController::class, 'create']);

// Store Vendor Data
Route::post('/vendors', [VendorController::class, 'store']);

// Show Vendor Edit Form
Route::get('/vendors/{vendor}/edit', [VendorController::class, 'edit']);

// Edit Vendor Data
Route::put('/vendors/{vendor}', [VendorController::class, 'update']);

// Delete Vendor Data
Route::delete('/vendors/{vendor}', [VendorController::class, 'destroy']);

// Show Single Vendor
Route::get('/vendors/{vendor}', [VendorController::class, 'show']);

/* End of Vendor Routes */

/* Start of Assigned Assets Routes */

// Show All Assigned Assets
Route::get('/assign', [AssignController::class, 'index']);

// Show create Assigned Assets Form
Route::get('/assign/create', [AssignController::class, 'create']);

// Store Assigned Assets Data
Route::post('/assign', [AssignController::class, 'store']);

// Show Assigned Assets Edit Form
Route::get('/assign/{assign}/edit', [AssignController::class, 'edit']);

// Edit Assigned Assets Data
Route::put('/assign/{assign}', [AssignController::class, 'update']);

// Delete Assigned Assets Data
Route::delete('/assign/{assign}', [AssignController::class, 'destroy']);

// Show Single Assigned Assets
Route::get('/assign/{assign}', [AssignController::class, 'show']);

/* End of Assigned Assets Routes */

