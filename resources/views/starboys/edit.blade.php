@extends('layouts.app')

@section('content')
    <h1>Edit User {{$starboy -> name}}</h1>
    
    <form action="{{ route('starboys.update', $starboy) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" value="{{ $starboy->name }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Age:</label>
            <input type="number" name="old" value="{{ $starboy->old }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tier:</label>
            <input type="text" name="tier" value="{{ $starboy->tier }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Role:</label>
            <input type="text" name="role" value="{{ $starboy->role }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Level:</label>
            <input type="number" name="level" value="{{ $starboy->level }}" class="form-control" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('starboys.index') }}" class="btn btn-secondary">Back to List</a>
    </form>
@endsection