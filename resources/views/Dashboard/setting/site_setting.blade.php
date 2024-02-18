@extends('Dashboard.layout.master')
@section('content')
                      <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Site Setting</h5>
                                    </div>

                                    <div class="">
                                       <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                                    <form class="theme-form theme-form-2 mega-form" method="POST" enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="row">
                                                            {{-- ------------ School name ------------------  --}}

                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                class="form-label-title col-lg-2 col-md-3 mb-0">School Name</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->school_name}}" name="school_name" class="form-control @error('school_name')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('school_name')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                         {{-- ------------ School Address ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">School Address</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->school_address}}" name="school_address" class="form-control @error('address')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('address')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Establish Year ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Establish Year</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->establis_date}}" name="establis_date" class="form-control @error('year')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('year')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            {{-- ------------ EIIN Number ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">EIIN Number</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->eiin_number}}" name="eiin_number" class="form-control @error('eiin_number')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('eiin_number')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            {{-- ------------ School Code ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">School Code</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->school_code}}" name="school_code" class="form-control @error('school_code')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('school_code')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            {{-- ------------ School Number ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">School Number</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->school_number}}" name="school_number" class="form-control @error('school_number')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('school_number')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            {{-- ------------ HotLine Number ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Hot-Line Number</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->hot_line}}" name="hot_line" class="form-control @error('hotline_number')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('hotline_number')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            {{-- ------------ School Email ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">School Email</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->school_email}}" name="school_email" class="form-control @error('school_email')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('school_email')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            {{-- ------------ Principal Email ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Principal Email</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->principal_email}}" name="principal_email" class="form-control @error('principal_email')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('principal_email')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            {{-- ------------ Web Url ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Website URL</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->web_url}}" name="web_url" class="form-control @error('web_url')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('web_url')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            {{-- ------------ School Logo ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">School Logo</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <img src="{{asset('image/site_setting')}}/{{$data->school_logo}}" alt="School Logo" width="100">
                                                                    <input name="school_logo" class="form-control mt-2 @error('school_logo')
                                                                    is-invalid
                                                                    @enderror" type="file">
                                                                    <span class="text-danger">
                                                                        @error('school_logo')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            {{-- ------------ Gov Logo ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Gov Logo</label>
                                                                <div class="col-md-9 col-lg-10"> 
                                                                 <img src="{{asset('image/site_setting')}}/{{$data->gov_logo}}" alt="School Logo" width="100">
                                                                    <input name="gov_logo" class="form-control mt-2 @error('gov_logo')
                                                                    is-invalid
                                                                    @enderror" type="file">
                                                                    <span class="text-danger">
                                                                        @error('gov_logo')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>


                                                            <div class="row align-items-center">
                                                               <button type='submit' class="btn btn-primary" name="submit">Save Changes</button>
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
