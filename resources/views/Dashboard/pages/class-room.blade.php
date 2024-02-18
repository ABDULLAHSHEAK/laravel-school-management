@extends('Dashboard.layout.master')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Class-Room</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-md-6">

                <div class="x_content">
                    <form class="" action="" method="POST" novalidate>
                        @csrf
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Class Name<span
                                    class="required">*</span></label>
                            <div class="col-md-9 col-sm-9">
                                <input value="{{old('class_name')}}" class="form-control @error('class_name')is-invalid
                                @enderror" data-validate-length-range="6" data-validate-words="2"
                                    name="class_name" placeholder="Enter Class Name" required="required" />
                                    <span class="text-danger">
                                        @error('class_name')
                                        {{$message}}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="ln_solid">
                            <div class="form-group">
                                <div class="col-md-3 offset-md-3 mt-3">
                                    <button type='submit' class="btn btn-primary" name="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="table">
                            <table class="table table-stripted table-hover">
                                <thead>
                                    <th>S/L</th>
                                    <th>Class Name</th>
                                    <th>Created-at</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($view_classes as $class)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$class->class_name}}</td>
                                        <td>{{$class->created_at}}</td>
                                        <td>
                                            <a href="{{url('edit-class',$class->id)}}">
                                                 <i class="ri-pencil-line"></i>
                                            </a>
                                            <a href="#"  data-bs-toggle="modal"
                                                                    data-bs-target="#deleteClass{{$class->id}}">
                                                 <i class="ri-delete-bin-line"></i>
                                            </a>

                                            @include('Dashboard.modal.delete-class-modal')
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                  <div class="p-3">
                      {{$view_classes->links('pagination::bootstrap-5')}}
                  </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection
