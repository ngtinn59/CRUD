@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Edit User: {{ $user->name }}</h1>
        <form action="{{ route('users.update', $user->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control"  aria-describedby="emailHelp">
            </div>
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <textarea  name= "address" class="form-control">{{ old('address') }}</textarea>
            </div>
            @error('address')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            @error('password')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
