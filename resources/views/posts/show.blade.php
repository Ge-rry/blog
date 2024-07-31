<!-- resources/views/posts/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $post->title }}</div>

                <div class="panel-body">
                    <p>{{ $post->body }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
