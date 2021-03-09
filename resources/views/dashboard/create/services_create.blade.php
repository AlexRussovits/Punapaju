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

    <form method="post" enctype="multipart/form-data" action="{{asset('/dashboard/create/services_create/action/')}}">
        @csrf
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="text"  name="title" class="form-control" id="title">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="text"  name="description" class="form-control" id="description">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="file" name="image" class="form-control"  id="image">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="text" name="descr_long"  class="form-control" id="descr_long">
        </div>
        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
            <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>
@endsection
