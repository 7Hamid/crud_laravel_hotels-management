@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Show Hotel</h1>
                <div class="card">
                    <div class="card-header">
                        <strong>{{ $hotel->name }}</strong>
                    </div>
                    <div class="card-body">
                        <p><strong>Location:</strong> {{ $hotel->location }}</p>
                        <p><strong>Rooms:</strong> {{ $hotel->rooms }}</p>
                        <p><strong>Price per Night:</strong> ${{ $hotel->price_per_night }}</p>
                        <p><strong>Description:</strong> {{ $hotel->description }}</p>
                        <a class="btn btn-primary" href="{{ route('hotels.index') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
