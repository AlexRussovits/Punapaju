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
                <td>@mdo</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
