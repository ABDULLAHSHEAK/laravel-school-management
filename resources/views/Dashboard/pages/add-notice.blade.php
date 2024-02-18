@extends('Dashboard.layout.master')
@section('content')
                      <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Add Notice</h5>
                                        <form class="d-inline-flex">
                                            <a href="{{route('all-users')}}" class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus"></i>All Notice
                                            </a>
                                        </form>
                                    </div>

                                    <div class="">
                                       <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                                    <form class="theme-form theme-form-2 mega-form" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-header-1">
                                                            <h5>Notice Information</h5>
                                                        </div>

                                                        <div class="row">
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Notice Title</label>
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

                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Notice Descriptions</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <textarea value="{{old('description')}}" name="description" class="form-control @error('description')is-invalid
                                                                    @enderror" id="editor" cols="30" rows="4"></textarea>
                                                                    <span class="text-danger">
                                                                        @error('description')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Notice(pdf only)</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('file')}}" name="file" class="form-control @error('file')
                                                                    is-invalid
                                                                    @enderror" type="file">
                                                                    <span class="text-danger">
                                                                        @error('file')
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
