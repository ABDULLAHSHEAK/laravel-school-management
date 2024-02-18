@extends('Dashboard.layout.master')
@section('content')
                      <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>All Directors</h5>
                                        <form class="d-inline-flex">
                                            <a href="{{route('all_directors')}}" class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus"></i>All Directors
                                            </a>
                                        </form>
                                    </div>

                                    <div class="">
                                       <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                                    <form class="theme-form theme-form-2 mega-form" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-header-1">
                                                            <h5>Directors Information</h5>
                                                        </div>

                                                        <div class="row">
                                                            {{-- ------------ full name ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Full
                                                                    Name *</label>
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
                                                         {{-- ------------ Directors title------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Director Title *</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('title')}}" name="title" class="form-control @error('title')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('title')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Directors Phone ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Director Phone *</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('phone')}}" name="phone" class="form-control @error('phone')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('phone')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Directors Date ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Joining Date *</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('date')}}" name="date" class="form-control @error('date')is-invalid
                                                                    @enderror" type="date">
                                                                    <span class="text-danger">
                                                                        @error('date')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Directors Address ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Director Address</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('address')}}" name="address" class="form-control @error('address')is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('address')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Directors email ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Email</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('email')}}" name="email" class="form-control @error('email')
                                                                    is-invalid
                                                                    @enderror" type="email">
                                                                    <span class="text-danger">
                                                                        @error('email')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            {{-- ------------ Directors Photo ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Photo</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input name="img" class="form-control @error('img')
                                                                    is-invalid
                                                                    @enderror" type="file">
                                                                    <span class="text-danger">
                                                                        @error('img')
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
