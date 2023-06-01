@extends('layouts.app')

@section('content')

    <div class="container">
        @if(session('message'))
            <div class="alert alert-primary" role="alert">
                {{session('message')}}
            </div>
        @endif
        <h1>List User</h1>
            <a href="{{route('users.create')}}" class="btn btn-primary">Create</a>
        <div>
            <table class="table table hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->address}}</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>{{ $users->links() }}</div>
        </div>
    </div>
@endsection
