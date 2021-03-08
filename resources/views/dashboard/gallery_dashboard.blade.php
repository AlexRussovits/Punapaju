@extends('dashboard.layout.layout_dashboard')
@section('content')
    @if(session('success_delivery'))
        <div class="alert alert-success">
            <p class="mb-0">
                Gallery was updated
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
    <div>
        <button type="button" class="btn btn-secondary"><a>Create</a></button>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Handle</th>

        </tr>
        </thead>
        <tbody>
        @foreach($galleries as $gallery)
            <tr>
                <th scope="row">{{$gallery->id}}</th>
                <td>{{$gallery->img}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary"><a href={{'/dashboard/edit/gallery_edit/'.$gallery->id}}>Edit</a></button>
                        <button type="button" class="btn btn-secondary"><a>Delete</a></button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
