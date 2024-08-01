@extends('layouts.site')

@section('content')
<div class="container">
    <h1>{{ $property->name }}</h1>
    <p>{{ $property->description }}</p>
    <p>Price: ${{ $property->price }}</p>
    <form action="{{ route('order', $property) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Order</button>
    </form>
    <form action="{{ route('addToFavorite', $property) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-secondary">Add to Favorite</button>
    </form>
    <h2>Comments</h2>
    @foreach($comments as $comment)
    <div>
        <p>{{ $comment->content }}</p>
        <small>by {{ $comment->user->name }}</small>
    </div>
    @endforeach
    <form action="{{ route('comment', $property) }}" method="POST">
        @csrf
        <textarea name="comment" rows="4" class="form-control"></textarea>
        <button type="submit" class="btn btn-success">Add Comment</button>
    </form>
</div>
@endsection
