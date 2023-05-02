@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Student</h1>
        <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" name="age" class="form-control" id="age" required>
            </div>
            <div class="form-group">
                <label for="dob">DOB:</label>
                <input type="date" name="dob" class="form-control" id="dob" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea name="address" class="form-control" id="address" required></textarea>
            </div>
            <div class="form-group">
                <label for="parent_mobile_no">Parent Mobile No:</label>
                <input type="text" name="parent_mobile_no" class="form-control" id="parent_mobile_no" required>
            </div>
            <div class="form-group">
                <label for="parent_email_id">Parent Email:</label>
                <input type="email" name="parent_email_id" class="form-control" id="parent_email_id" required>
            </div>
            <div class="form-group">
                <label for="student_photo">Photo:</label>
                <input type="file" name="student_photo" class="form-control-file" id="student_photo" required>
            </div>
            <div class="form-group">
                <label for="student_year_group">Year Group:</label>
                <select name="student_year_group" class="form-control" id="student_year_group" required>
                    <option value="">Select Year Group</option>
                    <option value="1">Year 1</option>
                    <option value="2">Year 2</option>
                    <option value="3">Year 3</option>
                    <option value="4">Year 4</option>
                    <option value="5">Year 5</option>
                    <option value="6">Year 6</option>
                </select><br>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
