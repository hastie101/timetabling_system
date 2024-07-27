@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Enrollment</h1>
        <form action="{{ route('enrollments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="StudentID">Student ID</label>
                <input type="number" name="StudentID" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="ClassID">Class ID</label>
                <input type="number" name="ClassID" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Enrollment</button>
        </form>
    </div>
@endsection
