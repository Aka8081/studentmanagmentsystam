@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Result Details
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $result->id }}</td>
                            </tr>
                            <tr>
                                <th>Student Name</th>
                                <td>{{ $result->student->name }}</td>
                            </tr>
                            <tr>
                                <th>Maths</th>
                                <td>{{ $result->maths }}</td>
                            </tr>
                            <tr>
                                <th>Science</th>
                                <td>{{ $result->science }}</td>
                            </tr>
                            <tr>
                                <th>English</th>
                                <td>{{ $result->english }}</td>
                            </tr>
                            <tr>
                                <th>Gujarati</th>
                                <td>{{ $result->gujarati }}</td>
                            </tr>
                            <tr>
                                <th>Computer</th>
                                <td>{{ $result->computer }}</td>
                            </tr>
                            <tr>
                                <th>Exam Year</th>
                                <td>{{ $result->exam_year }}</td>
                            </tr>
                            <tr>
                                <th>Obtained Marks</th>
                                <td>{{ $result->obtained_marks }}</td>
                            </tr>
                            <tr>
                                <th>Total Marks</th>
                                <td>{{ $result->total_marks }}</td>
                            </tr>
                            <tr>
                                <th>Percentage</th>
                                <td>{{ $result->percentage }}%</td>
                            </tr>
                            <tr>
                                <th>Percentile</th>
                                <td>{{ $result->percentile }}</td>
                            </tr>
                            <tr>
                                <th>Record Added By</th>
                                <td>{{ $result->record_added_by }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('results.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
