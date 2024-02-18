@extends('Dashboard.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>Sidebar Setting </h5>
                        </div>

                        <div class="">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                <form action="{{route('update_sidebar')}}" class="theme-form theme-form-2 mega-form" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header-1">
                                        <h5>Change Sidebar Setting </h5>
                                    </div>
                                    
                                    {{-- Director  --}}
                                    
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Director Name</label>
                                            <div class="col-md-9 col-lg-10">
                                                <input value="{{ $data->director_name }}" name="director_name"
                                                    class="form-control mt-2 @error('director_name')
                                                                    is-invalid
                                                                    @enderror"
                                                    type="text">
                                                <span class="text-danger">
                                                    @error('director_name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>


                                        {{-- ---- director image -----  --}}

                                        
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Director Image</label>
                                            <div class="col-md-9 col-lg-10">
                                                <img src="{{asset('image/sidebar_setting')}}/{{$data->director_img}}" alt="img" width="100">
                                                <input value="{{ old('director_img') }}" name="director_img"
                                                    class="form-control mt-2 @error('director_img')
                                                                    is-invalid
                                                                    @enderror"
                                                    type="file">
                                                <span class="text-danger">
                                                    @error('director_img')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        
                                        {{-- ------- director talk -----  --}}

                                    <div class="row">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-lg-2 col-md-3 mb-0">Director Talk</label>
                                            <div class="col-md-9 col-lg-10">
                                                <textarea name="director_talk" class="form-control @error('director_talk')is-invalid
                                                                    @enderror" id="editor" cols="30" rows="4">{{$data->director_talk}}</textarea>
                                                                    <span class="text-danger">
                                                                        @error('director_talk')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                            </div>
                                        </div>


                                    {{-- =============== Principal ==========  --}} <hr>

                                    
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Principal Name</label>
                                            <div class="col-md-9 col-lg-10">
                                                <input value="{{ $data->principal_name }}" name="principal_name"
                                                    class="form-control mt-2 @error('principal_name')
                                                                    is-invalid
                                                                    @enderror"
                                                    type="text">
                                                <span class="text-danger">
                                                    @error('principal_name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>


                                        {{-- ---- director image -----  --}}

                                        
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Principal Image</label>
                                            <div class="col-md-9 col-lg-10">
                                                <img src="{{asset('image/sidebar_setting')}}/{{$data->principal_img}}" alt="img" width="100">
                                                <input value="{{ old('principal_img') }}" name="principal_img"
                                                    class="form-control mt-2 @error('principal_img')
                                                                    is-invalid
                                                                    @enderror"
                                                    type="file">
                                                <span class="text-danger">
                                                    @error('principal_img')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        

                                    <div class="row">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-lg-2 col-md-3 mb-0">Principal Talk</label>
                                            <div class="col-md-9 col-lg-10">
                                                <textarea name="principal_talk" class="form-control @error('principal_talk')is-invalid
                                                                    @enderror" id="editor" cols="30" rows="4">{{$data->principal_talk}}</textarea>
                                                                    <span class="text-danger">
                                                                        @error('principal_talk')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                            </div>
                                        </div>


                                    {{--======= Assistans Principal ===========  --}} <hr>
                                    
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Ass Principal Name</label>
                                            <div class="col-md-9 col-lg-10">
                                                <input value="{{ $data->ass_principal_name }}" name="ass_principal_name"
                                                    class="form-control mt-2 @error('ass_principal_name')
                                                                    is-invalid
                                                                    @enderror"
                                                    type="text">
                                                <span class="text-danger">
                                                    @error('ass_principal_name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>


                                        {{-- ---- ass_principal image -----  --}}

                                        
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Ass Principal Image</label>
                                            <div class="col-md-9 col-lg-10">
                                                <img src="{{asset('image/sidebar_setting')}}/{{$data->ass_principal_img}}" alt="img" width="100">
                                                <input value="{{ old('ass_principal_img') }}" name="ass_principal_img"
                                                    class="form-control mt-2 @error('ass_principal_img')
                                                                    is-invalid
                                                                    @enderror"
                                                    type="file">
                                                <span class="text-danger">
                                                    @error('ass_principal_img')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        

                                    <div class="row">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-lg-2 col-md-3 mb-0">Ass Principal Talk</label>
                                            <div class="col-md-9 col-lg-10">
                                                <textarea name="ass_principal_talk" class="form-control @error('ass_principal_talk')is-invalid
                                                                    @enderror" id="editor" cols="30" rows="4">{{$data->ass_principal_talk}}</textarea>
                                                                    <span class="text-danger">
                                                                        @error('ass_principal_talk')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                            </div>
                                        </div>
                                        <hr>

                                        {{-- ------- HotLine Image ------  --}}

                                                 <div class="mb-4 row align-items-center">
                                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Hot Line Image</label>
                                            <div class="col-md-9 col-lg-10">
                                                <img src="{{asset('image/sidebar_setting')}}/{{$data->hotline_img}}" alt="img" width="100">
                                                <input value="{{ old('hotline_img') }}" name="hotline_img"
                                                    class="form-control mt-2 @error('hotline_img')
                                                                    is-invalid
                                                                    @enderror"
                                                    type="file">
                                                <span class="text-danger">
                                                    @error('hotline_img')
                                                        {{ $message }}
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
