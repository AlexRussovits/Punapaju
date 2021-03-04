@extends('dashboard.layout.layout_dashboard')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->password}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary"><a>Create</a></button>
                        <button type="button" class="btn btn-secondary"><a>Edit</a></button>
                        <button type="button" class="btn btn-secondary"><a>Delete</a></button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
