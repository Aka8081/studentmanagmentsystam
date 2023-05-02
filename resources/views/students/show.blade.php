@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Student Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $student->name }}</h5>
                <hr>
                <p class="card-text"><strong>Age:</strong> {{ $student->age }}</p>
                <p class="card-text"><strong>Date of Birth:</strong> {{ $student->dob }}</p>
                <p class="card-text"><strong>Address:</strong> {{ $student->address }}</p>
                <p class="card-text"><strong>Parent Mobile No:</strong> {{ $student->parent_mobile_no }}</p>
                <p class="card-text"><strong>Parent Email ID:</strong> {{ $student->parent_email_id }}</p>
                <p class="card-text"><strong>Year Group:</strong> {{ $student->year_group }} Years</p>
                <p class="card-text"><strong>Added By:</strong> {{ $student->record_added_by }}</p>
                @if ($student->student_photo)
                    <hr>
                    <h5 class="card-title">Student Photo</h5>
                    <img src="{{ asset('storage/' . $student->student_photo) }}" alt="{{ $student->name }}" class="img-fluid">
                @endif
            </div>
        </div>
        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary mt-3">Edit</a>
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-3">Delete</button>
        </form>
    </div>
@endsection
