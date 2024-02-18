@extends('Dashboard.layout.master')
@section('content')
                  <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>All Students</h5>
                                        <form class="d-inline-flex">
                                            <a href="{{route('show_students')}}" class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus"></i>Add New
                                            </a>
                                        </form>
                                    </div>

                                    <div class="table-responsive table-product">
                                        <table class="table all-package theme-table" id="table_id">
                                            <thead>
                                                <tr>
                                                    <th>S/L</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Class</th>
                                                    <th>Father`s Name</th>
                                                    <th>Created at</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($students as $student)
                                                <tr>
                                                    <td style="text-align: center">{{$loop->iteration}}</td>
                                                    <td>
                                                        <div class="table-image">
                                                            <img src="{{asset('image/student')}}/{{$student->img}}" class="img-fluid"
                                                                alt="">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="user-name">
                                                            <span>{{$student->name}}</span>
                                                        </div>
                                                    </td>
                                                    <td>{{$student->class}}</td>
                                                    <td>{{$student->fa_name}}</td>
                                                    <td>{{$student->created_at}}</td>
                                                    {{-- <td>{{createFromFormat($student->created_at)}}</td> --}}

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#viewStudent{{$student->id}}">
                                                                    <i class="ri-eye-line"></i>
                                                                </a>
                                                                @include('Dashboard.modal.view-student-modal')
                                                            </li>

                                                            <li>
                                                                <a href="{{url('edit-student',$student->id)}}">
                                                                    <i class="ri-pencil-line"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#deleteStudent{{$student->id}}">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                                @include('Dashboard.modal.delete-student')
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                 @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{$students->links('pagination::bootstrap-5')}}
@endsection
