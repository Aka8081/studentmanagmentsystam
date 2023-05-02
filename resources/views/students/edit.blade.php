@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Student</h1>
    <form method="POST" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $student->name }}" required>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" class="form-control" id="age" value="{{ $student->age }}" required>
        </div>
        <div class="form-group">
            <label for="dob">DOB:</label>
            <input type="date" name="dob" class="form-control" id="dob" value="{{ $student->dob }}" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea name="address" class="form-control" id="address" required>{{ $student->address }}</textarea>
        </div>
        <div class="form-group">
            <label for="parent_mobile_no">Parent Mobile No:</label>
            <input type="text" name="parent_mobile_no" class="form-control" id="parent_mobile_no" value="{{ $student->parent_mobile_no }}" required>
        </div>
        <div class="form-group">
            <label for="parent_email_id">Parent Email:</label>
            <input type="email" name="parent_email_id" class="form-control" id="parent_email_id" value="{{ $student->parent_email_id }}" required>
        </div>
        <div class="form-group">
            <label for="student_photo">Photo:</label>
            <input type="file" name="student_photo" class="form-control-file" id="student_photo">
            @if ($student->student_photo)
            <img src="{{ asset('storage/' . $student->student_photo) }}" alt="{{ $student->name }}" class="mt-2" style="max-height: 200px;">
            @endif
        </div>
        <div class="form-group">
            <label for="student_year_group">Year Group:</label>
            <select name="student_year_group" class="form-control" id="student_year_group" required>
                <option value="">Select Year Group</option>
                <option value="1" {{ $student->year_group == '1' ? 'selected' : '' }}>Year 1</option>
                <option value="2" {{ $student->year_group == '2' ? 'selected' : '' }}>Year 2</option>
                <option value="3" {{ $student->year_group == '3' ? 'selected' : '' }}>Year 3</option>
                <option value="4" {{ $student->year_group == '4' ? 'selected' : '' }}>Year 4</option>
                <option value="5" {{ $student->year_group == '5' ? 'selected' : '' }}>Year 5</option>
                <option value="6" {{ $student->year_group == '6' ? 'selected' : '' }}>Year 6</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
