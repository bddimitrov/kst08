@extends('layout.master')

@section('content')

    <div class="col-md-6 offset-md-3">
        @foreach($posts as $post)
            <div class="card" style="margin-top: 20px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection
