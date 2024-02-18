@extends('Dashboard.layout.master')
@section('content')
                  <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>All Result</h5>
                                        <form class="d-inline-flex">
                                            <a href="{{route('add_result')}}" class="align-items-center btn btn-theme d-flex">
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
                                                @foreach ($results as $result)
                                                <tr>
                                                    <td>
                                                        <div class="">
                                                            <span>{{$loop->iteration}}</span>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="user-name">
                                                            <span>{{$result->title}}</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="user-name">
                                                            <span>{{$result->class}}</span>
                                                        </div>
                                                    </td>
                                                    <td>{{$result->created_at}}</td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0)">
                                                                    <i class="ri-eye-line"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                 <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#editResult{{$result->id}}">
                                                                    <i class="ri-pencil-line"></i>
                                                                </a>
                                                                @include('Dashboard.modal.edit-result-modal')
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#deleteResult{{$result->id}}">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                                @include('Dashboard.modal.delete-result-modal')
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
                {{$results->links('pagination::bootstrap-5')}}

@endsection
