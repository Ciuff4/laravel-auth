@extends('layouts.app')

@section('content')
<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Tags</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $posts as $post )
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->genre}}</td>
                <td></td>
                <td class="d-flex">
                    <a href="#" class="btn btn-primary">SHOW</a>
                    <a href="#" class="btn btn-warning">MODIFY</a>
                    <form action="">
                        <button>Delete</button>
                    </form>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
