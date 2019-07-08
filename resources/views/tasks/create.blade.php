@extends('layouts.app')

@section('content')
<div class="container">

    {{-- Form for creating a new task --}}
    <form action="/tasks" enctype="multipart/form-data" method="post">
        @csrf
        <div class="col-8 offset-2">
            <div class="row">

                <label for="title" class="col-md-4 col-form-label">Title</label>


                <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" title="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="row">

                <label for="description" class="col-md-4 col-form-label">Description</label>


                <input id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror" description="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="row">

                <label for="due" class="col-md-4 col-form-label">Due Date</label>


                <input id="due" name="due" type="date" class="form-control @error('due') is-invalid @enderror" due="due" value="{{ old('due') }}" required autocomplete="due" autofocus>

                @error('due')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="row">

                <label for="category" class="col-md-4 col-form-label">Category</label>


                <input id="category" name="category" type="text" class="form-control @error('category') is-invalid @enderror" category="category" value="{{ old('category') }}" required autocomplete="category" autofocus>

                @error('category')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="row">

                <label for="department" class="col-md-4 col-form-label">Department</label>


                <input id="department" name="department" type="text" class="form-control @error('department') is-invalid @enderror" department="department" value="{{ old('department') }}" required autocomplete="department" autofocus>

                @error('department')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="row pt-4">
                <button class="btn btn-primary">Create Task</button>
            </div>
        </div>
    </form>
</div>
@endsection
