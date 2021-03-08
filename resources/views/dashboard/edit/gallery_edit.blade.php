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

    <form method="post" enctype="multipart/form-data" action="{{asset('/dashboard/edit/gallery_edit/action/'.$gallery->id)}}">
        @csrf
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="file"  name="img" class="form-control" value="{{$gallery->img}}" id="img">
        </div>
        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
            <button type="submit" class="btn btn-primary">Изменить</button>
        </div>
    </form>
@endsection
