@extends('layouts.app')

@section('main-content')
    <div class="row pt-5">
        <div class="mx-auto">
            <a class="btn btn-primary" href="{{ route('employees.create') }}">Create</a>
            <a class="btn btn-primary" href="{{ route('passports.index') }}">Passport Table</a>
            <div class="card p-4 shadow">
                <h1 class="text-center mb-3">Employees Table</h1>
            <table class="table table-bordered border-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Passport Number</th>
                        <th scope="col">Action</th>
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
                            <td>
                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                    @endforelse
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection