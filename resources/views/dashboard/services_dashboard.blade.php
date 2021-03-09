@extends('dashboard.layout.layout_dashboard')
@section('content')
    @if(session('success_delivery'))
        <div class="alert alert-success">
            <p class="mb-0">
                Your services was updated
            </p>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <button type="button" class="btn btn-secondary ml-5"><a href={{'/dashboard/create/services_create/'}}>Create</a></button>
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
                        <button type="button" class="btn btn-secondary"><a href="{{'/dashboard/edit/services_edit/'.$service->id}}">Edit</a></button>
                        <button type="button" class="btn btn-secondary"><a href={{'/dashboard/delete/services_delete/action/'.$service->id}}>Delete</a></button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
