@extends('Dashboard.layout.master')
@section('content')
                  <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>All Notices</h5>
                                        <form class="d-inline-flex">
                                            <a href="{{route('add_notice')}}" class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus"></i>Add New
                                            </a>
                                        </form>
                                    </div>

                                    <div class="table-responsive table-product">
                                        <table class="table all-package theme-table" id="table_id">
                                            <thead>
                                                <tr>
                                                    <th>S/L</th>
                                                    <th>Notice Title</th>
                                                    <th>Created at</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($notices as $notice)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>

                                                    <td>
                                                        <div class="user-name">
                                                            <span>{{$notice->title}}</span>
                                                        </div>
                                                    </td>
                                                    <td>{{$notice->created_at}}</td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="ri-eye-line"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#editNotice{{$notice->id}}">
                                                                    <i class="ri-pencil-line"></i>
                                                                </a>
                                                                @include('Dashboard.modal.edit-notice-modal')
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#noticeDelete{{$notice->id}}">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                                @include('Dashboard.modal.delete-notice-modal')
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
                {{$notices->links('pagination::bootstrap-5')}}
@endsection
