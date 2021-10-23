@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card mt-3">
                <h5 class="card-header">{{ $post->user->name }}</h5>
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text">{{ $post->content }}</p>
                  <div class="d-flex">
                    <a href="{{ route('post.edit', [$post]) }}" class="btn btn-warning ml-2">edit</a>
                    <form action="{{ route('post.destroy', [$post]) }}" method="post" class="ml-2">
                      @csrf
                      @method('DELETE')
                        <button class="btn btn-danger">delete</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

        </div>
    </div>

@endsection
