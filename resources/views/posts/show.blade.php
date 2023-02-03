@extends('layout.app')
@section('title') show @endsection
@section('content')

<table class="table mt-4 table-dark">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$shows['id']}}</td>
            <td>{{$shows['title']}}</td>
            <td>{{$shows['created_by']}}</td>
            <td>{{$shows['description']}}</td>
            <td>{{$shows['slug']}}</td>

        </tr>

        </tbody>
        </table>

</div>
@endsection

