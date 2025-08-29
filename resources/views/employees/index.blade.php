@extends('layouts.app')

@section('main-content')
    <div class="row pt-5">
        <div class="mx-auto">
            <a class="btn btn-primary" href="{{ route('employees.create') }}">Create</a>
            <div class="card p-4 shadow">
                <h1 class="text-center mb-3">Teacher's Table</h1>
            <table class="table table-bordered border-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Passport Number</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($employees as $employee)
                        <tr>
                            <th scope="row">{{ $employee->id }}</th>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->address }}</td>
                            <td>{{ $employee->employee ? $employee->employee->passnum : 'No Passport Number' }}</td>
                        </tr>
                        @empty
                    @endforelse
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection