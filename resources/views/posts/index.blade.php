@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                @if (session('message'))
                    <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                @endif
              @foreach ($posts as $post)
              <div class="card mt-3">
                <h5 class="card-header">{{ $post->user->name }}</h5>
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text">{{ $post->content }}</p>
                  <a href="{{ route('post.show', [$post]) }}" class="btn btn-primary">view</a>
                  <a href="{{ route('post.edit', [$post]) }}" class="btn btn-warning">edit</a>
                </div>
              </div>
              @endforeach
            </div>

        </div>
    </div>

@endsection
