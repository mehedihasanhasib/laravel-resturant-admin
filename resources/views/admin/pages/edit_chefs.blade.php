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
                        <h1 class="p-4 text-xl">Edit Chefs</h1>
                        <form method="post" action="{{ route('add_chefs.update', ['id' => $chef->id]) }}"
                            enctype="multipart/form-data" class="text-primary">
                            @method('put')
                            @csrf

                            <div class="col">
                                <label class="form-label">Name</label>
                                <input value="{{ $chef->name }}" type="text" class="form-control" name="name"
                                    required autofocus placeholder="Enter Menue name*">
                                @error('name')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="col">
                                <label class="form-label">Position</label>
                                <input value="{{ $chef->position }}" type="text" class="form-control" name="position"
                                    required autofocus placeholder="Enter Menue name*">
                                @error('position')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>


                            <div class="col">
                                <label class="form-label">Image</label>
                                <input value="{{ $chef->image }}" type="file" class="form-control" name="image"
                                    required autofocus placeholder="Enter Menue name*">
                                @error('image')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="col my-3">
                                <label class="form-label">Chefs Description</label>
                                <textarea type="text" class="form-control" name="description" required autofocus placeholder="Enter Menue Details">
                                    {{ Str::squish($chef->description) }}
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

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content -->
    </div>
@endsection
