@extends('Dashboard.layout.master')
@section('content')
                  <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>All Routine</h5>
                                        <form class="d-inline-flex">
                                            <a href="{{route('add_routine')}}" class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus"></i>Add New
                                            </a>
                                        </form>
                                    </div>

                                    <div class="table-responsive table-product">
                                        <table class="table all-package theme-table" id="table_id">
                                            <thead>
                                                <tr>
                                                    <th>S/L</th>
                                                    <th>Routine Title</th>
                                                    <th>Class</th>
                                                    <th>Created at</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($routines as $routine)
                                                <tr>
                                                    <td>
                                                        <div class="">
                                                            <span>{{$loop->iteration}}</span>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="user-name">
                                                            <span>{{$routine->title}}</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="user-name">
                                                            <span>{{$routine->class}}</span>
                                                        </div>
                                                    </td>
                                                    <td>{{$routine->created_at}}</td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0)">
                                                                    <i class="ri-eye-line"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                 <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#editRoutine{{$routine->id}}">
                                                                    <i class="ri-pencil-line"></i>
                                                                </a>
                                                                @include('Dashboard.modal.edit-routine-modal')
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#deleteRoutine{{$routine->id}}">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                                @include('Dashboard.modal.delete-routine-modal')
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
                {{$routines->links('pagination::bootstrap-5')}}
@endsection
