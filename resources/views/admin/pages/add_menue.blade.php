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


                        <h1 class="p-4 text-xl">Add Menue</h1>
                        <form method="POST" action="{{ route('add_menue.store') }}" enctype="multipart/form-data"
                            class="text-primary">
                            @csrf

                            <div class="col">
                                <label class="form-label">Menue Title</label>
                                <input type="text" class="form-control" name="title" autofocus
                                    placeholder="Enter Menue name*">
                                @error('title')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="col">
                                <label class="form-label">Menue Price</label>
                                <input type="text" class="form-control" name="price" autofocus
                                    placeholder="Enter Menue name*">
                                @error('price')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="col">
                                <label class="form-label">Category</label>
                                <input type="text" class="form-control" name="category" autofocus
                                    placeholder="Enter Menue name*">
                                @error('category')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="col">
                                <label class="form-label">Menue Picture</label>
                                <input type="file" class="form-control" name="image" autofocus
                                    placeholder="Enter Menue name*">
                                @error('image')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="col my-3">
                                <label class="form-label">Menue Description</label>
                                <textarea type="text" class="form-control" name="description" autofocus placeholder="Enter Menue Details"></textarea>
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
