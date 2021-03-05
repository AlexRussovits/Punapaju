@extends('dashboard.layout.layout_dashboard')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{asset('/dashboard/edit/appointment_edit/action/'.$appointment->id)}}">
        @csrf
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="name"  name="name" class="form-control" value="{{$appointment->name}}" id="name">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="email"  name="email" class="form-control" value="{{$appointment->email}}" id="email">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="text" name="phone_number" class="form-control" value="{{$appointment->phone_number}}"  id="phone_number">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="text" name="index_number_auto"  class="form-control" value="{{$appointment->index_number_auto}}" id="index_number_auto">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <textarea class="form-control" name="text" placeholder="Напишите о своей проблеме..." required>{{$appointment->text}}</textarea>
        </div>
        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
            <button type="submit" class="btn btn-primary">Изменить</button>
        </div>
    </form>
@endsection
