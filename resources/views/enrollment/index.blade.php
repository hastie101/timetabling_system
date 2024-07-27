@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Enrollments</h1>
        <a href="{{ route('enrollments.create') }}" class="btn btn-primary">Add Enrollment</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Class ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enrollments as $enrollment)
                    <tr>
                        <td>{{ $enrollment->StudentID }}</td>
                        <td>{{ $enrollment->ClassID }}</td>
                        <td>
                            <a href="{{ route('enrollments.show', [$enrollment->StudentID, $enrollment->ClassID]) }}" class="btn btn-info">View</a>
                            <a href="{{ route('enrollments.edit', [$enrollment->StudentID, $enrollment->ClassID]) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('enrollments.destroy', [$enrollment->StudentID, $enrollment->ClassID]) }}" method="POST" style="display:inline;">
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
