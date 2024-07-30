@extends('layouts.app')  

@section('content')  
    <div class="container">  
        <h1>Instructors</h1>  
        <a href="{{ route('instructors.create') }}" class="btn btn-primary">Add Instructor</a>  
        <table class="table">  
            <thead>  
                <tr>  
                    <th>Instructor ID</th>  
                    <th>Instructor Name</th>  
                    <th>Actions</th>  
                </tr>  
            </thead>  
            <tbody>  
                @foreach ($instructors as $instructor)  
                    <tr>  
                        <td>{{ $instructor->InstructorID }}</td>  
                        <td>{{ $instructor->InstructorName }}</td>  
                        <td>  
                            <a href="{{ route('instructors.show', $instructor->InstructorID) }}" class="btn btn-info">View</a>  
                            <a href="{{ route('instructors.edit', $instructor->InstructorID) }}" class="btn btn-warning">Edit</a>  
                            <form action="{{ route('instructors.destroy', $instructor->InstructorID) }}" method="POST" style="display:inline;">  
                                @csrf  
                                @method('DELETE')  
                                <button type="submit" class="btn btn-danger">Delete</button>  
                            </form>  
                        </td>  
                    </tr>  
                @endforeach  
            </tbody>  
        </table>  
    </div>  
@endsection