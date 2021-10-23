@extends('layouts.app')
@section('content')


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                @if ($errors->any()) 
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                @if (session('message'))
                    <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                @endif
                <form action="{{ route('post.update', $post) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="title" class="form-label">title</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $post->title) }}">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">content</label>
                        <textarea name="content" id="content" class="form-control" cols="30" rows="7">{{ old('content', $post->content) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>

@endsection
