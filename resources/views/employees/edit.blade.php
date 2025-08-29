@extends('layouts.app')

@section('main-content')
    <div class="row pt-5">
        <div class="col-8 mx-auto">
            <div class="card p-4 shadow">
                <h1 class="mb-4 text-center">Employees Edit Form</h1>
                <form action="" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input id="name" name="name" type="text" value="{{  }}" class="form-control" required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" name="email" type="email" value="{{  }}" class="form-control" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea id="address" name="address" rows="3" class="form-control" required>{{  }}</textarea>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update</button> 
                        <a class="btn btn-primary" href="">Back</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

@endsection