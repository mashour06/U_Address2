@extends('admin.admin-layouts.admin-layout')

@section('content')
    <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Update User</h1>
            </div>

            <!-- Content Row -->
        <div class="container">
            <div class="row">

                {{-- add product form --}}
                <form method="POST" action="{{ route('postUpdatedUser', $user->id) }}">
                    {{-- product uploading success/fail message --}}
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button class="close" type="button" data-dismiss="alert">x</button>
                    {{ session()->get('message') }}
                </div>
                @endif
                    @csrf
                    <div class="mb-3">
                      <label for="add-user" class="form-label">Name</label>
                      <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="add-user">
                      <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                    </div>
                    <div class="mb-3">
                      <label for="add-product" class="form-label">Email</label>
                      <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="add-product">
                      <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="">
                        <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="">
                        <span class="text-danger">@error('password_confirmation') {{ $message }} @enderror</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Update User</button>
                </form>
            </div>
        </div>
        </div>
        <!-- /.container-fluid -->

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
