@extends('layout.app')
@section('title')index @endsection
@section('content')
    <table class="table mt-4">
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
        @foreach($posts as $post)
        <tr>
            <td>{{$post['id']}}</td>
            <td>{{$post['title']}}</td>
            <td>{{$post['created_by']}}</td>
            <td>{{$post['description']}}</td>
            <td>{{$post['slug']}}</td>
            <td>
                <a href="{{route('posts.show',$post['id'])}}" class="btn btn-info">View</a>
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="{{route('posts.destroy',$post['id'])}}" class="btn btn-danger delete" data-confirm="Are you sure to delete this item?" >Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

</div>
@endsection

