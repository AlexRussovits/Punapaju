@extends('dashboard.layout.layout_dashboard')
@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Index Number Auto</th>
        <th scope="col">Problem</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    @foreach($appointments as $appointment)
        <tr>
            <th scope="row">{{$appointment->id}}</th>
            <td>{{$appointment->name}}</td>
            <td>{{$appointment->email}}</td>
            <td>{{$appointment->phone_number}}</td>
            <td>{{$appointment->index_number_auto}}</td>
            <td>{{$appointment->text}}</td>
            <td>@mdo</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
