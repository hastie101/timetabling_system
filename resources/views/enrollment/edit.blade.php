@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Enrollment</h1>
        <form action="{{ route('enrollments.update', [$enrollment->StudentID, $enrollment->ClassID]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="StudentID">Student ID</label>
                <input type="number" name="StudentID" class="form-control" value="{{ $enrollment->StudentID }}" required>
            </div>
            <div class="form-group">
                <label for="ClassID">Class ID</label>
                <input type="number" name="ClassID" class="form-control" value="{{ $enrollment->ClassID }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Enrollment</button>
        </form>
    </div>
@endsection
