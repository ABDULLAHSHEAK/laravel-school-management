@extends('Dashboard.layout.master')
@section('content')
                      <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Add Students</h5>
                                        <form class="d-inline-flex">
                                            <a href="{{route('all_students')}}" class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus"></i>All Students
                                            </a>
                                        </form>
                                    </div>

                                    <div class="">
                                       <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                                    <form class="theme-form theme-form-2 mega-form" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-header-1">
                                                            <h5>Students Information</h5>
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
                                                                    @enderror" type="text" placeholder="Enter Student Full Name">
                                                                    <span class="text-danger">
                                                                        @error('name')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                         {{-- ------------ Students father name------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Father`s Name *</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('fa_name')}}" name="fa_name" class="form-control @error('fa_name')
                                                                    is-invalid
                                                                    @enderror" type="text" placeholder="Enter Student Father`s Name">
                                                                    <span class="text-danger">
                                                                        @error('fa_name')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Students Mothers ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Mother`s Name *</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('ma_name')}}" name="ma_name" class="form-control @error('ma_name')
                                                                    is-invalid
                                                                    @enderror" type="text" placeholder="Enter Student Mother`s Name">
                                                                    <span class="text-danger">
                                                                        @error('ma_name')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Students Phone ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Student Phone *</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('student_phone')}}" name="student_phone" class="form-control @error('student_phone')
                                                                    is-invalid
                                                                    @enderror" type="text" placeholder="Enter Student Phone">
                                                                    <span class="text-danger">
                                                                        @error('student_phone')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Students Parents Phone ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Student Parent`s Phone *</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('parents_phone')}}" name="parents_phone" class="form-control @error('parents_phone')
                                                                    is-invalid
                                                                    @enderror" type="text" placeholder="Enter Parent`s Phone">
                                                                    <span class="text-danger">
                                                                        @error('parents_phone')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Students email ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Student Email(Optional)</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('email')}}" name="email" class="form-control @error('email')
                                                                    is-invalid
                                                                    @enderror" type="email" placeholder="Enter Student Email">
                                                                    <span class="text-danger">
                                                                        @error('email')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            {{-- ------------ Students Date ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Date Of Birth *</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('birthdate')}}" name="birthdate" class="form-control @error('birthdate')is-invalid
                                                                    @enderror" type="date">
                                                                    <span class="text-danger">
                                                                        @error('birthdate')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Students Address ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Student Address *</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <textarea name="address" id="" cols="30" rows="2"  class="form-control @error('address')is-invalid
                                                                    @enderror"> </textarea>
                                                                    <span class="text-danger">
                                                                        @error('address')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Students Gender ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Gender *</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <select name="gender" id="" class="form-control @error('gender')is-invalid
                                                                    @enderror">
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                        <option value="Others">Others</option>
                                                                    </select>
                                                                    <span class="text-danger">
                                                                        @error('gender')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Students Blood Group ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Blood Group </label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <select name="blood" id="" class="form-control @error('blood')is-invalid
                                                                    @enderror">
                                                                        <option value="No Blood Group Selected">No Blood Group Selected</option>
                                                                        <option value="A+">A+</option>
                                                                        <option value="A-">A-</option>
                                                                        <option value="B+">B+</option>
                                                                        <option value="B-">B-</option>
                                                                        <option value="AB+">AB+</option>
                                                                        <option value="AB-">AB-</option>
                                                                        <option value="O+">O+</option>
                                                                        <option value="O-">O-</option>
                                                                    </select>
                                                                    <span class="text-danger">
                                                                        @error('blood')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Students Roll ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Student Roll *</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('roll')}}" name="roll" class="form-control @error('roll')is-invalid
                                                                    @enderror" type="text" placeholder="Enter Student Roll">
                                                                    <span class="text-danger">
                                                                        @error('roll')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Students Registration ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Student Registration</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input value="{{old('reg')}}" name="reg" class="form-control @error('reg')is-invalid
                                                                    @enderror" type="text" placeholder="Enter Registration No">
                                                                    <span class="text-danger">
                                                                        @error('reg')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Students Class ------------------  --}}
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Select Class *</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <select name="class" id="" class="form-control @error('class')is-invalid
                                                                    @enderror">
                                                                    @foreach ($classes as $class)
                                                                    <option value="{{$class->id}}">{{$class->class_name}}</option>
                                                                    @endforeach
                                                                    </select>
                                                                    <span class="text-danger">
                                                                        @error('class')
                                                                        {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------ Students Photo ------------------  --}}
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
