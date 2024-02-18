@extends('Dashboard.layout.master')
@section('content')
    <!-- Insert Media modal end -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="title-header option-title justify-content-start">
                            <h5>Media Library</h5>
                            <div class="right-options ms-auto">
                                <ul>
                                    <li>
                                        <a class="btn btn-solid" href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#addVideo">Add
                                            Media</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="row row-cols-xl-6 row-cols-md-5 row-cols-sm-3 row-cols-2 g-sm-3 g-2 media-library-sec ratio_square">
                            @foreach ($videos as $video)
                                <div>
                                    <div class="library-box">
                                        <label for="myCheckbox1">
                                            <div>
                                                <img src="{{ asset('image/photo-gallery') }}/{{ $video->file }}"
                                                    class="img-fluid bg-img bg_size_content" alt="">
                                                <a href="#">{{ $video->video_url }}</a>
                                            </div>
                                            <div class="dropdown">
                                                <a class="" href="#" role="button" id="dropdownMenuLink"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="dropdownMenuLink">
                                                    <li><a class="dropdown-item d-flex align-items-center" href="{{ asset('image/photo-gallery') }}/{{ $video->file }}"><i
                                                                class="ri-download-2-line me-2"></i>Download</a>
                                                    </li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="{{route('delete_video_gallery',$video->id)}}"><i
                                                                class="ri-delete-bin-line me-2"></i>Delete</a>
                                                    </li>
                                                    </li>
                                                </ul>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ $videos->links('pagination::bootstrap-5') }}
    @include('Dashboard.modal.video-gallery')
@endsection
