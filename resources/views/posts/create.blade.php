@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="{{ route('post.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">title</label>
                        <input type="title" class="form-control" id="title" >
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">content</label>
                        <input type="content" class="form-control" id="content">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>

@endsection
