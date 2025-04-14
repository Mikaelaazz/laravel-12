@extends('layouts.app')

@section('content')
    <h1>Starboy Rulers</h1>
    <a href="{{ route('starboys.create') }}" class="btn btn-primary">Create New Starboy</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Tier</th>
                <th>Role</th>
                <th>Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($starboys as $starboy)
                <tr>
                    <td>{{ $starboy->name }}</td>
                    <td>{{ $starboy->old }}</td>
                    <td>{{ $starboy->tier }}</td>
                    <td>{{ $starboy->role }}</td>
                    <td>{{ $starboy->level }}</td>
                    <td>
                        <a href="{{ route('starboys.show', $starboy) }}" class="btn btn-info">View</a>
                        <a href="{{ route('starboys.edit', $starboy) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('starboys.destroy', $starboy) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

