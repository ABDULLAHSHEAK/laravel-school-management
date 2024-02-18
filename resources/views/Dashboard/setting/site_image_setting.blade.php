@extends('Dashboard.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>Site Image </h5>
                        </div>

                        <div class="">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                <form class="theme-form theme-form-2 mega-form" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header-1">
                                        <h5>Change Site Image </h5>
                                    </div>
                                    
                                    {{-- school history  --}}

                                    <div class="row">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-lg-2 col-md-3 mb-0">School History</label>
                                            <div class="col-md-9 col-lg-10">
                                                <textarea name="history" class="form-control @error('history')is-invalid
                                                                    @enderror" id="editor" cols="30" rows="4">{{$images->history}}</textarea>
                                                                    <span class="text-danger">
                                                                        @error('history')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                            </div>
                                        </div>
                                            {{-- --- History bg image ----  --}}

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Background Image</label>
                                            <div class="col-md-9 col-lg-10">
                                                <img src="{{asset('image/site_image')}}/{{$images->bg_img}}" alt="img" width="100">
                                                <input value="{{ old('bg_img') }}" name="bg_img"
                                                    class="form-control mt-2 @error('bg_img')
                                                                    is-invalid
                                                                    @enderror"
                                                    type="file">
                                                <span class="text-danger">
                                                    @error('bg_img')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>

                                        {{-- -------- info hot line image -----  --}}

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Info/Hotline img(218*454 px)</label>
                                            <div class="col-md-9 col-lg-10">
                                                <img src="{{asset('image/site_image')}}/{{$images->info_img}}" alt="img" width="100">
                                                <input value="{{ old('info_img') }}" name="info_img"
                                                    class="form-control mt-2 @error('info_img')
                                                                    is-invalid
                                                                    @enderror"
                                                    type="file">
                                                <span class="text-danger">
                                                    @error('info_img')
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
