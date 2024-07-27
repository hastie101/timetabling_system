@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Student Details</h1>
        <p><strong>ID:</strong> {{ $student->StudentID }}</p>
        <p><strong>Name:</strong> {{ $student->StudentName }}</p>
        <p><strong>Email:</strong> {{ $student->Email }}</p>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
