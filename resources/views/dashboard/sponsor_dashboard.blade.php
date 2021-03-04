@extends('dashboard.layout.layout_dashboard')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sponsors as $sponsor)
            <tr>
                <th scope="row">{{$sponsor->id}}</th>
                <td>{{$sponsor->img}}</td>
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
