@extends('layouts.site')

@section('content')
<div class="container">
    <h1>Welcome to the Property Site</h1>
    <h2>Categories</h2>
    <div class="row">
        @foreach($categories as $category)
        <div class="col-md-4">
            <a href="{{ route('properties', $category) }}">{{ $category->name }}</a>
        </div>
        @endforeach
    </div>
    <h2>Latest Properties</h2>
    <div class="row">
        @foreach($properties as $property)
        <div class="col-md-4">
            <h3><a href="{{ route('property', $property) }}">{{ $property->name }}</a></h3>
            <p>{{ $property->description }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
