@extends('dashboard')
@section('dashboard_content')
<div class="content-wrapper">

    <div class="container my-5">

        <div class="row">
            <div class="col-lg-10">
                <h1 class="text-xl py-3">Manage Book Message</h1>
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Date</th>
                        <th scope="col">Message</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td>Otto</td>

                      </tr>
      
                  </table>
          
            </div>
        </div>
    </div>
</div>

<!-- /.content -->
</div>
@endsection