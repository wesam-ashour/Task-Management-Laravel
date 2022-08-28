@extends('layouts.master')
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="header-title">Edit user info</h4>
                                <br>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="input-sizes-preview">
                                        <form action="{{ route('users.store') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="example-input-normal" class="form-label">Name</label>
                                                <input type="text" name="name"
                                                       id="example-input-normal" class="form-control"
                                                       placeholder="Name">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="example-input-normal" class="form-label">Email</label>
                                                <input type="text" name="email"
                                                       id="example-input-normal" class="form-control"
                                                       placeholder="Email">
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="example-input-normal" class="form-label">Password</label>
                                                <input type="password" name="password" id="example-input-normal"
                                                       class="form-control"
                                                       placeholder="Password">
                                                @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="example-input-normal" class="form-label">Confirm
                                                    Password</label>
                                                <input type="password" name="confirm-password" id="example-input-normal"
                                                       class="form-control" placeholder="Confirm Password">
                                                @error('confirm-password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Role:</strong>
                                                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                                </div>
                                                @error('roles')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- /.card-body -->
                                            <div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div> <!-- end preview-->

                                </div> <!-- end tab-content-->

                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>
@endsection