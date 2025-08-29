@extends('layouts.app')

@section('main-content')
    <div class="row pt-5">
        <div class="mx-auto">
            <a class="btn btn-primary" href="{{ route('employees.create') }}">Create</a>
            <a class="btn btn-primary" href="{{ route('employees.index') }}">Employees Table</a>
            <div class="card p-4 shadow">
                <h1 class="text-center mb-3">Passports Table</h1>
            <table class="table table-bordered border-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Employee Name</th>
                        <th scope="col">Passport Number</th>
                        <th scope="col">Issue Date</th>
                        <th scope="col">Expiry Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($passports as $passport)
                        <tr>
                            <th scope="row"> {{ $passport->id }}</th>
                            <td>{{ $passport->passport->name }}</td>
                            <td>{{ $passport->passnum }}</td>
                            <td>{{ $passport->idate }}</td>
                            <td>{{ $passport->edate }}</td>
                        </tr>
                        @empty
                    @endforelse
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection