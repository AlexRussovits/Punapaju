@extends('dashboard.layout.layout_dashboard')
@section('content')
    @if(session('success_delivery'))
        <div class="alert alert-success">
            <p class="mb-0">
                Your appointment was edited
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
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary"><a href="{{'/dashboard/edit/appointment_edit/'.$appointment->id}}">Edit</a></button>
                    <button type="button" class="btn btn-secondary"><a>Delete</a></button>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
