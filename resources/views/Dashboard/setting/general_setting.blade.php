@extends('Dashboard.layout.master')
@section('content')
                      <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>General Setting</h5>
                                        {{-- <form class="d-inline-flex">
                                            <a href="{{route('all_teacher')}}" class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus"></i>All Teachers
                                            </a>
                                        </form> --}}
                                    </div>

                                    <div class="">
                                       <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                                    <form class="theme-form theme-form-2 mega-form" method="POST" enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="row">
                                                            {{-- ------------ Site Title ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Site Title</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->title}}" name="title" class="form-control @error('title')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('title')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                         {{-- ------------ Fav Icone ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Fav Icone</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input name="fav_icone" class="form-control mb-2 @error('fav_icone')
                                                                    is-invalid
                                                                    @enderror" type="file">
                                                                    <span class="text-danger">
                                                                        <img src="{{asset('image/general-setting')}}/{{$data->fav_icone}}" alt="fav-icone" width="50">
                                                                        @error('fav_icone')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <span>Social Link</span>
                                                            <hr>
                                                            {{-- ------------ Facbook Page Link ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Facebook Page Link</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->fb_link}}" name="fb_url" class="form-control @error('fb_url')is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('fb_url')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ X url ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">X-Profile Link</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->x_link}}" name="x_url" class="form-control @error('x_url')is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('x_url')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Instagram Url ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Instagram Page Link</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->instagram_link}}" name="insta_url" class="form-control @error('insta_url')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('insta_url')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            {{-- ------------ Youtube Url ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">YouTube Link </label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->youtube_link}}" name="youtube_url" class="form-control @error('youtube_url')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('youtube_url')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>


                                                            {{-- ------------ Linkdin Url ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Linkdin Page Link </label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->linkdin_link}}" name="linkdin_url" class="form-control @error('linkdin_url')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('linkdin_url')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <span>Footer Section</span>
                                                            <hr>
                                                            {{-- ------------ Footer ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Footer Text </label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{$data->footer_text}}" name="footer" class="form-control @error('footer')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('footer')
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
