@extends('layouts.app')

@section('main-content')
    <div class="row pt-5">
        <div class="col-8 mx-auto">
            <div class="card p-4 shadow">
                <h1 class="mb-4 text-center">Employees Edit Form</h1>
                <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input id="name" name="name" type="text" value="{{ $employee->name }}" class="form-control" placeholder="Full Name" required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input id="email" name="email" type="email" value="{{ $employee->email }}" class="form-control"  placeholder="xxxxx@xxxx.xxx" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address:</label>
                        <textarea id="address" name="address" rows="3" class="form-control" placeholder="Address" required>{{ $employee->address }}</textarea>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="passnum" class="form-label">Passport Number:</label>
                        <input id="passnum" name="passnum" type="text" value="{{ $employee->employee->passnum }}" class="form-control" placeholder="Passport Number" required>
                        @error('passnum')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="idate" class="form-label">Issue Date:</label>
                        <input id="idate" name="idate" type="date" value="{{ $employee->employee->idate }}" class="form-control" required>
                        @error('idate')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="edate" class="form-label">Expiry Date:</label>
                        <input id="edate" name="edate" type="date" value="{{ $employee->employee->edate }}" class="form-control" required>
                        @error('edate')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success">update</button>
                        <button type="reset" class="btn btn-secondary">Clear</button>                          
                        <a class="btn btn-primary" href="{{ route('employees.index') }}">Back</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

@endsection