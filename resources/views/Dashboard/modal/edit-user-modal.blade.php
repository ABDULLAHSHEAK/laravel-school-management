    <div class="modal fade theme-modal remove-coupon" id="edit_user{{ $user->id }}" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box">
                          <form action="{{route('update_users')}}" class="theme-form theme-form-2 mega-form" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-header-1">
                                                            <h5>Users Information</h5>
                                                        </div>

                                                        <div class="row">
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title c mb-0">First
                                                                    Name</label>
                                                                <div class="">
                                                                    <input value="{{$user->name}}" name="name" class="form-control @error('name')
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
                                                                    class="c col-form-label form-label-title">Email
                                                                    Address</label>
                                                                <div class="">
                                                                    <input value="{{$user->email}}" name="email" class="form-control @error('email')is-invalid
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
                                                                    class="c col-form-label form-label-title">Profie Image</label>
                                                                <div class="">
                                                                    <input value="{{old('img')}}" name="img" class="form-control mb-2 @error('img')
                                                                    is-invalid
                                                                    @enderror" type="file">
                                                                    <img src="{{asset('image/user')}}/{{$user->img}}" alt="User Image" width="80">
                                                                    <span class="text-danger">
                                                                        @error('img')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="c col-form-label form-label-title">Password</label>
                                                                <div class="">
                                                                    <input value="{{$user->password}}" name="password" class="form-control @error('password')
                                                                    is-invalid
                                                                    @enderror" type="text">
                                                                    <span class="text-danger">
                                                                        @error('password')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <input type="text" value="{{$user->id}}" name="id" hidden>
                                                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-animation btn-md fw-bold"
                            data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Update</button>
                        </form>
             </div>
             </div>
            </div>
     </div>
    </div>
