@extends('layouts.app')

@section('content')
    <h1>Starboy Details</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $starboy->name }}</h5>
            <p class="card-text">
                <strong>Age:</strong> {{ $starboy->old }}<br>
                <strong>Tier:</strong> {{ $starboy->tier }}<br>
                <strong>Role:</strong> {{ $starboy->role }}<br>
                <strong>Level:</strong> {{ $starboy->level }}
            </p>
            <a href="{{ route('starboys.edit', $starboy) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('starboys.destroy', $starboy) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    
    <a href="{{ route('starboys.index') }}" class="btn btn-secondary mt-3">Back to List</a>
@endsection