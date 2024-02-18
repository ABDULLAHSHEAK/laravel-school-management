@extends('Dashboard.layout.master')
@section('content')
                  <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>All Users</h5>
                                        <form class="d-inline-flex">
                                            <a href="{{route('add-users')}}" class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus"></i>Add New
                                            </a>
                                        </form>
                                    </div>

                                    <div class="table-responsive table-product">
                                        <table class="table all-package theme-table" id="table_id">
                                            <thead>
                                                <tr>
                                                    <th>S/L</th>
                                                    <th>User</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($users as $user)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>
                                                        <div class="table-image">
                                                            <img src="{{asset('image/user')}}/{{$user->img}}" class="img-fluid"
                                                                alt="">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="user-name">
                                                            <span>{{$user->name}}</span>
                                                        </div>
                                                    </td>
                                                    <td>{{$user->email}}</td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                 <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#view_user{{$user->id}}">
                                                                    <i class="ri-eye-line"></i>
                                                                </a>
                                                                @include('Dashboard.modal.view-user-modal')
                                                            </li>

                                                            <li>
                                                                 <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#edit_user{{$user->id}}">
                                                                    <i class="ri-pencil-line"></i>
                                                                </a>
                                                                @include('Dashboard.modal.edit-user-modal')
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_user{{$user->id}}">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                                @include('Dashboard.modal.delete-user-modal')
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
                {{$users->links('pagination::bootstrap-5')}}
@endsection
