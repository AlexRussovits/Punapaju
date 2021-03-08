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

    <form method="post" action="{{asset('/dashboard/edit/user_edit/action/'.$user->id)}}">
        @csrf
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="text"  name="name" class="form-control" value="{{$user->name}}" id="name">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="text"  name="username" class="form-control" value="{{$user->username}}" id="username">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="text" name="password" class="form-control" value="{{$user->password}}"  id="password">
        </div>
        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
            <button type="submit" class="btn btn-primary">Изменить</button>
        </div>
    </form>
@endsection
