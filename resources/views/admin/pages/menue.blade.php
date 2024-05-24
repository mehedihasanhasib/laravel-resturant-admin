@extends('dashboard')
@section('dashboard_content')
    <div class="content-wrapper">

        <div class="container my-5">

            @if (@session()->has('status'))
                <div class="alert alert-success">
                    {{ session()->get('status') }}
                </div>
            @endif

            <div class="row">
                <div class="col-lg-10">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menus as $menu)
                                <tr>
                                    <td scope="row">
                                        <img src="{{ 'menu_images/' . $menu->image }}" alt="image" width="50">
                                    </td>
                                    <td class="align-middle"> {{ $menu->title }} </td>
                                    <td class="align-middle">{{ $menu->category }}</td>
                                    <td class="align-middle">{{ $menu->price }}</td>
                                    <td class="align-middle">
                                        <form action="{{ route('menu.edit', ['id' => $menu->id]) }}" class="inline-block">
                                            <button class="btn btn-sm btn-success">Edit</button>
                                        </form>
                                        <form method="post" action="{{ route('menu.delete', ['id' => $menu->id]) }}"
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

                    <div class="float-right mr-3">
                        {{ $menus->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- /.content -->
    </div>
@endsection
