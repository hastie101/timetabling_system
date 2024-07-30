@extends('layouts.app')  

@section('content')  
    <div class="container">  
        <h1>Course Instructors</h1>  
        <a href="{{ route('course_instructors.create') }}" class="btn btn-primary">Add Course Instructor</a>  
        <table class="table">  
            <thead>  
                <tr>  
                    <th>Serial Number</th>  
                    <th>Course ID</th>  
                    <th>Instructor ID</th>  
                    <th>Actions</th>  
                </tr>  
            </thead>  
            <tbody>  
                @foreach ($courseInstructors as $courseInstructor)  
                    <tr>  
                        <td>{{ $courseInstructor->SerialNumber }}</td>  
                        <td>{{ $courseInstructor->CourseID }}</td>  
                        <td>{{ $courseInstructor->InstructorID }}</td>  
                        <td>  
                            <a href="{{ route('course_instructors.show', $courseInstructor->SerialNumber) }}" class="btn btn-info">View</a>  
                            <a href="{{ route('course_instructors.edit', $courseInstructor->SerialNumber) }}" class="btn btn-warning">Edit</a>  
                            <form action="{{ route('course_instructors.destroy', $courseInstructor->SerialNumber) }}" method="POST" style="display:inline;">  
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