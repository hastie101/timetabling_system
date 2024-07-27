@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Students</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->StudentID }}</td>
                        <td>{{ $student->StudentName }}</td>
                        <td>{{ $student->Email }}</td>
                        <td>
                            <a href="{{ route('students.show', $student->StudentID) }}" class="btn btn-info">View</a>
                            <a href="{{ route('students.edit', $student->StudentID) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('students.destroy', $student->StudentID) }}" method="POST" style="display:inline;">
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
