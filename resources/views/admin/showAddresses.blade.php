@extends('admin.admin-layouts.admin-layout')

@section('content')
    <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Show All Addresses</h1>
            </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Show all products DataTales -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Addresses</h6>
            </div>
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Address Line 1</th>
                                <th>Address Line 2</th>
                                <th>City</th>
                                <th>District</th>
                                <th>ZIP Code</th>
                                <th>Country</th>
                                <th>User</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        {{-- begin loop --}}
                        @foreach($addresses as $address)
                            <tr>
                                <td>{{ $address->address_line1 }}</td>
                                <td>{{ $address->address_line2 }}</td>
                                <td>{{ $address->city }}</td>
                                <td>{{ $address->district }}</td>
                                <td>{{ $address->zip }}</td>
                                <td>{{ $address->country }}</td>
                                <td><a href="{{ route('updateUser', $address->user_id) }}">{{ $address->user_id }}</a></td>
                                <td><a href="{{ route('updateAddress', $address->id) }}" class="btn btn-primary">Edit</a></td>
                                <td><a href="{{ route('deleteAddress', $address->id) }}" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        {{-- end loop --}}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

@endsection
