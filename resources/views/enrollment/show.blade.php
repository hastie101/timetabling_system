@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Enrollment Details</h1>
        <p><strong>Student ID:</strong> {{ $enrollment->StudentID }}</p>
        <p><strong>Class ID:</strong> {{ $enrollment->ClassID }}</p>
        <a href="{{ route('enrollments.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
