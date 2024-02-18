@extends('Dashboard.layout.master')
@section('content')
                  <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>All Directors</h5>
                                        <form class="d-inline-flex">
                                            <a href="{{route('add_directors')}}" class="align-items-center btn btn-theme d-flex">
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
                                                @foreach ($directors as $director)
                                                <tr>
                                                    <td style="text-align: center">{{$loop->iteration}}</td>
                                                    <td>
                                                        <div class="table-image">
                                                            <img src="{{asset('image/director')}}/{{$director->img}}" class="img-fluid"
                                                                alt="">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="user-name">
                                                            <span>{{$director->name}}</span>
                                                        </div>
                                                    </td>
                                                    <td>{{$director->title}}</td>
                                                    <td>{{$director->phone}}</td>
                                                    <td>{{$director->created_at}}</td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#viewDirector{{$director->id}}">
                                                                    <i class="ri-eye-line"></i>
                                                                </a>
                                                                @include('Dashboard.modal.view-director-modal')
                                                            </li>

                                                            <li>
                                                                <a href="{{url('edit-directors',$director->id)}}">
                                                                    <i class="ri-pencil-line"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#deleteDirector{{$director->id}}">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                                @include('Dashboard.modal.director-modal')
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
                {{$directors->links('pagination::bootstrap-5')}}
@endsection
