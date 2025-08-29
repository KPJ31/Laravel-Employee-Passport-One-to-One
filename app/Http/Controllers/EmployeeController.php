<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::with('employee')->get();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
        ]);
        
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->address = $request->address;

        $employee->save();

        $employee->employee()->create([
            'passnum' => $request->passnum,
            'idate' => $request->idate,
            'edate' => $request->edate,
        ]);
            
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
         return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
        ]);

        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->address = $request->address;

        $employee->save();

        $employee->employee()->update([
            'passnum' => $request->passnum,
            'idate' => $request->idate,
            'edate' => $request->edate,
        ]);
            
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted');
    }
}
