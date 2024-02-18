@extends('Dashboard.layout.master')
@section('content')
                      <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Add Users</h5>
                                        <form class="d-inline-flex">
                                            <a href="{{route('all-users')}}" class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus"></i>All Users
                                            </a>
                                        </form>
                                    </div>

                                    <div class="">
                                       <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                                    <form class="theme-form theme-form-2 mega-form" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-header-1">
                                                            <h5>Users Information</h5>
                                                        </div>

                                                        <div class="row">
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">First
                                                                    Name</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('name')}}" name="name" class="form-control @error('name')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('name')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Email
                                                                    Address</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('email')}}" name="email" class="form-control @error('email')is-invalid
                                                                    @enderror" type="email">
                                                                    <span class="text-danger">
                                                                        @error('email')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Profie Image</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('img')}}" name="img" class="form-control @error('img')
                                                                    is-invalid
                                                                    @enderror" type="file">
                                                                    <span class="text-danger">
                                                                        @error('img')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Password</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('password')}}" name="password" class="form-control @error('password')
                                                                    is-invalid
                                                                    @enderror" type="password">
                                                                    <span class="text-danger">
                                                                        @error('password')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="row align-items-center">
                                                               <button type='submit' class="btn btn-primary" name="submit">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
