<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>

                <div class="panel-body">
                    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
                    <hr>
                    @foreach ($posts as $post)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>{{ $post->title }}</h3>
                            </div>
                            <div class="panel-body">
                                <p>{{ $post->body }}</p>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
