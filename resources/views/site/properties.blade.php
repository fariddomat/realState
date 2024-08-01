@extends('layouts.site')

@section('content')
<div class="container">
    <h1>Properties in {{ $category->name }}</h1>
    <div class="row">
        @foreach($properties as $property)
        <div class="col-md-4">
            <h3><a href="{{ route('property', $property) }}">{{ $property->name }}</a></h3>
            <p>{{ $property->description }}</p>
        </div>
        @endforeach
    </div>
    {{ $properties->links() }}
</div>
@endsection
