    <div class="modal fade theme-modal remove-coupon" id="editNotice{{ $notice->id }}" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box">
                        <form action="{{route('update_notice') }}"
                            class="theme-form theme-form-2 mega-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header text-center">
                                <h5>Notice Information</h5>
                            </div>

                            <div class="row">
                                <div class="mb-2 row align-items-center">
                                    <label class="form-label-title mb-0">Notice Title</label>
                                    <div class="">
                                        <input value="{{ $notice->title }}" name="title"
                                            class="form-control @error('title')
                                                                    is-invalid
                                                                    @enderror"
                                            type="text">
                                        <span class="text-danger">
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="mb-2 row align-items-center">
                                    <label class="col-form-label form-label-title">Notice Descriptions</label>
                                    <div class="">
                                        <textarea value="{{ old('description') }}" name="description"
                                            class="form-control @error('description')is-invalid
                                                                    @enderror"
                                            id="editor" cols="30" rows="4">{{ $notice->description }}</textarea>
                                        <span class="text-danger">
                                            @error('description')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="mb-2 row align-items-center">
                                    <label class=" col-form-label form-label-title">Notice(pdf only)</label>
                                    <div class="">
                                        <input value="{{ old('file') }}" name="file"
                                            class="form-control @error('file')
                                                                    is-invalid
                                                                    @enderror"
                                            type="file">
                                        <span>File Name : {{ $notice->file }}</span>
                                        <span class="text-danger">
                                            @error('file')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <input type="text" value="{{$notice->id}}" name="id" hidden>

                                {{-- <div class="row align-items-center">
                                    <button type='submit' class="btn btn-primary" name="submit">Update</button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                        {{-- <a href="{{ url('/all-notice', $notice->id) }}"> --}}
                            <button type="submit" class="btn btn-animation btn-md fw-bold"
                            data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Update</button>
                        </form>
                {{-- </a> --}}
            </div>
        </div>
    </div>
    </div>
