@extends('layouts.site')

@section('styles')
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css files/houses.css" />
@endsection

@section('content')
    <div class="boxes" style="padding-top: 35px; padding-bottom: 75px">
        @foreach ($properties as $property)
            <div class="box">
                <img src="{{ asset($property->img) }}" alt="{{ $property->name }}" />
                <div class="text_info">
                    <h3><i class="fas fa-home"></i>{{ $property->name }}</h3>
                    <p>{{ $property->description }}</p>
                </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">{{ $property->price }}$</div>
                <div class="text_info" style="text-align: center">
                    <a href="{{ route('property', $property) }}"
                        style="margin: 0 10px 20px;
                        width: 125px;
                        height: 30px;
                        text-transform: uppercase;
                        border: none;
                        border-radius: 6px;
                        background-color: gold;
                        color: white;
                        font-weight: 600;
                        cursor: pointer;  padding: 7px 40px;">تفاصيل</a>
                </div>
            </div>

    @endforeach
    </div>
    {{ $properties->links() }}
@endsection
