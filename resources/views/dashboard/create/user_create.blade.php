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

    <form method="post" action="{{asset('/dashboard/create/user_create/action/')}}">
        @csrf
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="text"  name="name" class="form-control" id="name">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="text"  name="username" class="form-control" id="username">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="text" name="password" class="form-control"  id="password">
        </div>
        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
            <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>
@endsection

