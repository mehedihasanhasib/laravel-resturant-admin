@extends('dashboard')
@section('dashboard_content')
<div class="content-wrapper">

    <div class="container my-5">

        <div class="row">
            <div class="col-lg-10">
                <div class="card p-4">
                    <h1 class="p-4 text-xl">Add Review</h1>
                    <form method="POST" action="/dashboard/add-blog/submit" enctype="multipart/form-data"
                        class="text-primary">
                        @csrf

                        <div class="col">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" required autofocus
                                placeholder="Enter Menue name*">
                        </div>

                        <div class="col">
                            <label class="form-label">Position</label>
                            <input type="text" class="form-control" name="position" required autofocus
                                placeholder="Enter Menue name*">
                        </div>
               

                        <div class="col">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" required autofocus
                                placeholder="Enter Menue name*">
                        </div>

                        <div class="col my-3">
                            <label class="form-label">Review Description</label>
                            <textarea type="text" class="form-control" name="desc" required autofocus
                                placeholder="Enter Menue Details"></textarea>
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