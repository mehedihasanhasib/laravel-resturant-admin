@extends('dashboard')
@section('dashboard_content')
    <div class="content-wrapper">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card p-4">

                        <h1 class="p-4 text-xl">Edit Menue</h1>
                        <form method="POST" action="{{ route('menu.update', ['id' => $menu->id]) }}"
                            enctype="multipart/form-data" class="text-primary">
                            @method('put')
                            @csrf

                            <!-- title -->
                            <div class="col">
                                <label class="form-label">Menue Title</label>
                                <input value="{{ $menu->title }}" type="text" class="form-control" name="title"
                                    autofocus placeholder="Enter Menue name*">
                                @error('title')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- price -->
                            <div class="col">
                                <label class="form-label">Menue Price</label>
                                <input value="{{ $menu->price }}" type="text" class="form-control" name="price"
                                    autofocus placeholder="Enter Menue name*">
                                @error('price')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- category -->
                            <div class="col">
                                <label class="form-label">Category</label>
                                <input value="{{ $menu->category }}" type="text" class="form-control" name="category"
                                    autofocus placeholder="Enter Menue name*">
                                @error('category')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- image -->
                            <div class="col mt-2">
                                <label class="form-label">Menue Picture</label>
                                <input value="{{ asset('menu_images/' . $menu->image) }}" type="file"
                                    class="form-control" id="fileInput" name="image" autofocus
                                    placeholder="Enter Menue name*">
                                @error('image')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- description -->
                            <div class="col my-3">
                                <label class="form-label">Menue Description</label>
                                <textarea type="text" class="form-control" name="description" autofocus placeholder="Enter Menue Details">
                                    {{ Str::squish($menu->description) }}
                                </textarea>
                                @error('description')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- submit button -->
                            <button type="submit" class="btn text-light bg-warning">
                                <b>Update</b>
                            </button>
                        </form>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- /.content -->
    </div>
@endsection
