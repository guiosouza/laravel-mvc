@extends('layout')
@section('content')
    <div class="col">
        <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="auto" src="{{ asset($post->image) }}"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

            <div class="card-body">
                <p class="card-text">{{ $post->content }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                </div>
            </div>
        </div>
    </div>
@endsection
