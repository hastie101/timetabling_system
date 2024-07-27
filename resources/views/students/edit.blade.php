@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Student</h1>
        <form action="{{ route('students.update', $student->StudentID) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="StudentName">Name</label>
                <input type="text" name="StudentName" class="form-control" value="{{ $student->StudentName }}" required>
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" name="Email" class="form-control" value="{{ $student->Email }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Student</button>
        </form>
    </div>
@endsection
