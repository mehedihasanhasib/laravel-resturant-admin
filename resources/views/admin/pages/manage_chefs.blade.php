@extends('dashboard')
@section('dashboard_content')
    <div class="content-wrapper">

        <div class="container my-5">

            <div class="row">
                <div class="col-lg-10">
                    @if (@session()->has('status'))
                        <div class="alert alert-success">
                            {{ session()->get('status') }}
                        </div>
                    @endif
                    <h1 class="text-xl py-3">Manage Chefs</h1>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Description</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chefs as $chef)
                                <tr>
                                    <td class="align-middle" scope="row">
                                        <img src="{{ 'chef_images/' . $chef->image }}" alt="image" width="50">
                                    </td>
                                    <td class="align-middle">{{ $chef->name }}</td>
                                    <td class="align-middle">{{ $chef->position }}</td>
                                    <td class="align-middle">{{ Str::limit($chef->description, 50) }}</td>
                                    <td class="align-middle">
                                        <form action="{{ route('add_chefs.edit', ['id' => $chef->id]) }}"
                                            class="inline-block">
                                            <button class="btn btn-sm btn-success">Edit</button>
                                        </form>
                                        <form method="post" action="{{ route('add_chefs.delete', ['id' => $chef->id]) }}"
                                            class="inline-block">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-danger">Delete</button>
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

    <!-- /.content -->
    </div>
@endsection
