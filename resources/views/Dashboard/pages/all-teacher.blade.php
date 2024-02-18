@extends('Dashboard.layout.master')
@section('content')
                  <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>All Teachers</h5>
                                        <form class="d-inline-flex">
                                            <a href="{{route('add_teacher')}}" class="align-items-center btn btn-theme d-flex">
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
                                                    <th>Title</th>
                                                    <th>Phone</th>
                                                    <th>Created at</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($teachers as $teacher)
                                                <tr>
                                                    <td style="text-align: center">{{$loop->iteration}}</td>
                                                    <td>
                                                        <div class="table-image">
                                                            <img src="{{asset('image/teacher')}}/{{$teacher->img}}" class="img-fluid"
                                                                alt="">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="user-name">
                                                            <span>{{$teacher->name}}</span>
                                                        </div>
                                                    </td>
                                                    <td>{{$teacher->title}}</td>
                                                    <td>{{$teacher->phone}}</td>
                                                    <td>{{$teacher->created_at}}</td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#viewTeacher{{$teacher->id}}">
                                                                    <i class="ri-eye-line"></i>
                                                                </a>
                                                                @include('Dashboard.modal.view-teacher-modal')
                                                            </li>

                                                            <li>
                                                                <a href="{{url('edit-teacher',$teacher->id)}}">
                                                                    <i class="ri-pencil-line"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#deleteTeacher{{$teacher->id}}">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                                @include('Dashboard.modal.delete-teacher-modal')
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
                {{$teachers->links('pagination::bootstrap-5')}}
@endsection
