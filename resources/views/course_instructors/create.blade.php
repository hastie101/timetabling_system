@extends('layouts.app')  

@section('content')  
    <div class="container">  
        <h1>Add Course Instructor</h1>  
        <form action="{{ route('course_instructors.store') }}" method="POST">  
            @csrf  
            
            <div class="form-group">  
                <label for="CourseID">Course</label>  
                <select name="CourseID" class="form-control" required>  
                    <option value="" disabled selected>Select a Course</option>  
                    @foreach($courses as $course)  
                        <option value="{{ $course->id }}">{{ $course->CourseName }}</option> <!-- Adjust accordingly to your course attributes -->  
                    @endforeach  
                </select>  
            </div>  

            <div class="form-group">  
                <label for="InstructorID">Instructor</label>  
                <select name="InstructorID" class="form-control" required>  
                    <option value="" disabled selected>Select an Instructor</option>  
                    @foreach($instructors as $instructor)  
                        <option value="{{ $instructor->id }}">{{ $instructor->InstructorName }}</option> <!-- Adjust accordingly to your instructor attributes -->  
                    @endforeach  
                </select>  
            </div>  

            <button type="submit" class="btn btn-primary">Add Course Instructor</button>  
        </form>  
    </div>  
@endsection