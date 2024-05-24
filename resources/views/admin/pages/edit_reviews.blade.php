@extends('dashboard')
@section('dashboard_content')
    <div class="content-wrapper">

        <div class="container my-5">

            <div class="row">
                <div class="col-lg-10">
                    <div class="card p-4">
                        @if (@session()->has('status'))
                            <div class="alert alert-success">
                                {{ session()->get('status') }}
                            </div>
                        @endif
                        <h1 class="p-4 text-xl">Edit Review</h1>
                        <form method="POST" action="{{ route('review.update', ['id' => $review->id]) }}"
                            enctype="multipart/form-data" class="text-primary">
                            @method('put')
                            @csrf

                            <!-- name -->
                            <div class="col">
                                <label class="form-label">Name</label>
                                <input value="{{ $review->name }}" type="text" class="form-control" name="name"
                                    required autofocus placeholder="Enter Menue name*">
                                @error('name')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- position -->
                            <div class="col">
                                <label class="form-label">Position</label>
                                <input value="{{ $review->position }}" type="text" class="form-control" name="position"
                                    required autofocus placeholder="Enter Menue name*">
                                @error('position')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- image -->
                            <div class="col">
                                <label class="form-label">Image</label>
                                <input value="{{ asset('review_images/' . $review->image) }}" type="file"
                                    class="form-control" name="image" required autofocus placeholder="Enter Menue name*">
                                @error('image')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- description -->
                            <div class="col my-3">
                                <label class="form-label">Review Description</label>
                                <textarea type="text" class="form-control" name="description" required autofocus placeholder="Enter Menue Details">
                            {{ Str::squish($review->description) }}
                            </textarea>
                                @error('description')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn text-light bg-warning">
                                <b>Submit</b>
                            </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content -->
    </div>
@endsection
