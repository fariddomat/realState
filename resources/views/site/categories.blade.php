@extends('layouts.site')

@section('content')
<div class="container">
    <h1>Categories</h1>
    <div class="row">
        @foreach($categories as $category)
        <div class="col-md-4">
            <a href="{{ route('properties', $category) }}">{{ $category->name }}</a>
        </div>
        @endforeach
    </div>
</div>
@endsection
