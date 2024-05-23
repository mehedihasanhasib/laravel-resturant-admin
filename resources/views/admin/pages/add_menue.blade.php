@extends('dashboard')
@section('dashboard_content')
    <div class="content-wrapper">

        <div class="container my-5">

            <div class="row">
                <div class="col-lg-10">
                    <div class="card p-4">
                        <h1 class="p-4 text-xl">Add Menue</h1>
                        <form method="POST" action="{{ route('add_menue.store') }}" enctype="multipart/form-data"
                            class="text-primary">
                            @csrf

                            <div class="col">
                                <label class="form-label">Menue Title</label>
                                <input type="text" class="form-control" name="title" required autofocus
                                    placeholder="Enter Menue name*">
                            </div>

                            <div class="col">
                                <label class="form-label">Menue Price</label>
                                <input type="text" class="form-control" name="price" required autofocus
                                    placeholder="Enter Menue name*">
                            </div>
                            <div class="col">
                                <label class="form-label">Category</label>
                                <input type="text" class="form-control" name="price" required autofocus
                                    placeholder="Enter Menue name*">
                            </div>

                            <div class="col">
                                <label class="form-label">Menue Price</label>
                                <input type="file" class="form-control" name="image" required autofocus
                                    placeholder="Enter Menue name*">
                            </div>

                            <div class="col my-3">
                                <label class="form-label">Menue Description</label>
                                <textarea type="text" class="form-control" name="desc" required autofocus placeholder="Enter Menue Details"></textarea>
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
