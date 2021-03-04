@extends('dashboard.layout.layout_dashboard')
@section('content')
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
                <td>@mdo</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
