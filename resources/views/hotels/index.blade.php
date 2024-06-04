@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Hotels</h1>
                <a href="{{ route('hotels.create') }}" class="btn btn-primary">Add Hotel</a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered mt-3">
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Rooms</th>
                        <th>Price per Night</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($hotels as $hotel)
                    <tr>
                        <td>{{ $hotel->name }}</td>
                        <td>{{ $hotel->location }}</td>
                        <td>{{ $hotel->rooms }}</td>
                        <td>{{ $hotel->price_per_night }}</td>
                        <td>
                            <form action="{{ route('hotels.destroy',$hotel->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('hotels.show',$hotel->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('hotels.edit',$hotel->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
