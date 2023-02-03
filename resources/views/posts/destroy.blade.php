@extends('layout.app')
@section('title') destroy @endsection
@section('content')

<table class="table">
    <thead>


        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">description</th>
            <th scope="col">created_by</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$destroys['id']}}</td>
            <td>{{$destroys['title']}}</td>
            <td>{{$destroys['created_by']}}</td>
            <td>{{$destroys['description']}}</td>
            <td>{{$destroys['slug']}}</td>
        </tr>

        <tr class=" text-center">
            <td scope="col-12"> are you want destroy this</td>
        </tr>
        <tr>
            <td scope="col-12">
             <a href="{{route('posts.index')}}" class="btn btn-danger delete" data-confirm="Are you sure to delete this item?">yes</a>
            <a href="{{route('posts.index')}}" class="btn btn-danger delete" data-confirm="Are you sure to delete this item?">no</a>
       </td> </tr>
    </tbody>
</table>

</div>
@endsection
