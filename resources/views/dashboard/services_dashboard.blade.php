@extends('dashboard.layout.layout_dashboard')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Description(Long)</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
            <tr>
                <th scope="row">{{$service->id}}</th>
                <td>{{$service->title}}</td>
                <td>{{$service->description}}</td>
                <td>{{$service->image}}</td>
                <td>{{$service->descr_long}}</td>
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
