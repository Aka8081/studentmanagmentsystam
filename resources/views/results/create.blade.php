@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Result') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ (isset($result)) ? route('results.update',$result->id) : route('results.store')  }}">
                        @csrf
                        @if (isset($result))
                        @method('PUT')
                        @endif

                        <div class="form-group row my-2">
                            <label for="student_id" class="col-md-4 col-form-label text-md-right">{{ __('Student ID') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="student_id" type="text" class="form-control @error('student_id') is-invalid @enderror" name="student_id" value="{{ old('student_id') }}" required autofocus> --}}
                                <select name="student_id" id="student_id" class="form-select">
                                    @foreach ($students as $std)
                                        <option value="{{ $std->id }}">{{ $std->name }}</option>
                                    @endforeach
                                </select>
                                @error('student_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="maths" class="col-md-4 col-form-label text-md-right">{{ __('Maths Marks') }}</label>

                            <div class="col-md-6">
                                <input id="maths" type="text" class="form-control @error('maths') is-invalid @enderror" name="maths" value="{{ $result->maths??"" }}" required>

                                @error('maths')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="science" class="col-md-4 col-form-label text-md-right">{{ __('Science Marks') }}</label>

                            <div class="col-md-6">
                                <input id="science" type="text" class="form-control @error('science') is-invalid @enderror" name="science" value="{{ $result->science??"" }}" required>

                                @error('science')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="english" class="col-md-4 col-form-label text-md-right">{{ __('English Marks') }}</label>

                            <div class="col-md-6">
                                <input id="english" type="text" class="form-control @error('english') is-invalid @enderror" name="english" value="{{ $result->english??"" }}" required>

                                @error('english')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="gujarati" class="col-md-4 col-form-label text-md-right">{{ __('Gujarati Marks') }}</label>

                            <div class="col-md-6">
                                <input id="gujarati" type="text" class="form-control @error('gujarati') is-invalid @enderror" name="gujarati" value="{{ $result->gujarati??'' }}" required>

                                  @error('gujarati')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="computer" class="col-md-4 col-form-label text-md-right">{{ __('computer Marks') }}</label>

                            <div class="col-md-6">
                                <input id="computer" type="text" class="form-control @error('computer') is-invalid @enderror" name="computer" value="{{ $result->computer??"" }}" required>

                                @error('computer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="exam_year" class="col-md-4 col-form-label text-md-right">{{ __('exam_year Marks') }}</label>

                            <div class="col-md-6">
                                <input id="exam_year" type="text" class="form-control @error('exam_year') is-invalid @enderror" name="exam_year" value="{{ $result->exam_year??"" }}" required>

                                @error('exam_year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="total_marks" class="col-md-4 col-form-label text-md-right">{{ __('total_marks') }}</label>

                            <div class="col-md-6">
                                <input id="total_marks" type="text" class="form-control @error('total_marks') is-invalid @enderror" name="total_marks" value="{{ $result->total_marks??"" }}" required>

                                @error('total_marks')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
