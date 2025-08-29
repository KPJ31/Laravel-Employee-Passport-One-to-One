@extends('layouts.app')

@section('main-content')
    <div class="row pt-5">
        <div class="col-5 mx-auto">
            <div class="card p-4 shadow">
                <h1 class="mb-4 text-center fw-bold">Employees Details</h1>
                <form action="{{ route('employees.show', $employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <b class="fs-5">Employee Name:</b>
                        <lable class="fs-5">{{ $employee->name }}</lable>
                    </div>

                    <div class="mb-3">
                        <b class="fs-5">Email:</b>
                        <lable class="fs-5">{{ $employee->email }}</lable>
                    </div>

                    <div class="mb-3">
                        <b class="fs-5">Address:</b>
                        <lable class="fs-5">{{ $employee->address }}</lable>
                    </div>

                    <div class="mb-3">
                        <b class="fs-5">Passport Number:</b>
                        <lable class="fs-5">{{ $employee->employee->passnum }}</lable>
                    </div>

                    <div class="mb-3">
                        <b class="fs-5">Issue Date:</b>
                        <lable class="fs-5">{{ $employee->employee->idate }}</lable>
                    </div>

                    <div class="mb-3">
                        <b class="fs-5">Expiry Date:</b>
                        <lable class="fs-5">{{ $employee->employee->edate }}</lable>
                    </div>

                    <div class="text-center">
                        <a class="btn btn-primary" href="{{ route('employees.index') }}">Back</a>
                        <a class="btn btn-secondary" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

@endsection