<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $data = Employee::all();
        return view('employee.index', compact('data'));
    }

    public function tambah(){
        return view('employee.tambah');
    } 

    public function create(Request $request){
        Employee::create($request->all());
        return redirect()->route('home_employee');
    } 
}
