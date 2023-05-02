@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Students</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('students.create') }}" class="btn btn-primary mb-2">Add Student</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Parent Mobile No</th>
                    <th>Parent Email</th>
                    <th>Photo</th>
                    <th>Year Group</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->parent_mobile_no }}</td>
                        <td>{{ $student->parent_email_id }}</td>
                        <td><img src="{{ asset('storage/' . $student->student_photo) }}" alt="{{ $student->name }}" style="width: 50px;"></td>
                        <td>{{ $student->year_group }} Years</td>
                        <td>
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                            <form method="POST" action="{{ route('students.destroy', $student->id) }}" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

