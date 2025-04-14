@extends('layouts.app')

@section('content')
    <h1>Create User Starboy</h1>
    
    <form action="{{ route('starboys.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Age:</label>
            <input type="number" name="old" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tier:</label>
            <input type="text" name="tier" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Role:</label>
            <input type="text" name="role" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Level:</label>
            <input type="number" name="level" class="form-control" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('starboys.index') }}" class="btn btn-secondary">Back to List</a>
    </form>
@endsection