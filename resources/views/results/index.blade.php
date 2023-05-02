@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header"><a href="{{ route('results.create') }}" class="btn btn-primary btn-sm">Add Result</a> {{ __('Results') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Maths</th>
                                <th>Science</th>
                                <th>English</th>
                                <th>Gujarati</th>
                                <th>Computer</th>
                                <th>Exam Year</th>
                                <th>Obtained Marks</th>
                                <th>Total Marks</th>
                                <th>Percentage</th>
                                <th>Percentile</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($results as $result)
                            <tr>
                                <td>{{ $result->student->name }}</td>
                                <td>{{ $result->maths }}</td>
                                <td>{{ $result->science }}</td>
                                <td>{{ $result->english }}</td>
                                <td>{{ $result->gujarati }}</td>
                                <td>{{ $result->computer }}</td>
                                <td>{{ $result->exam_year }}</td>
                                <td>{{ $result->obtained_marks }}</td>
                                <td>{{ $result->total_marks }}</td>
                                <td>{{ $result->percentage }}</td>
                                <td>{{ $result->percentile }}</td>
                                <td>
                                    <form action="{{ route('results.destroy', $result->id) }}" method="POST">
                                        <a href="{{ route('results.show', $result->id) }}" class="btn btn-info">Show</a>
                                        <a href="{{ route('results.edit', $result->id) }}" class="btn btn-primary">Edit</a>
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
            </div>
        </div>
    </div>
</div>
@endsection
