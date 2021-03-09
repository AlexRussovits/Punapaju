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

    <form method="get" action="{{asset('/dashboard/delete/contacts_delete/action/'.$contact->id)}}">
        @csrf
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="name"  name="name" class="form-control" value="{{$contact->name}}" id="name">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="email"  name="email" class="form-control" value="{{$contact->email}}" id="email">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <textarea class="form-control" name="text" placeholder="Комментарий..." required>{{$contact->text}}</textarea>
        </div>
        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
            <button type="submit" class="btn btn-primary">Удалить</button>
        </div>
    </form>
@endsection
