@extends('Dashboard.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- chart caard section start -->
            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="main-tiles border-5 border-0  card-hover card o-hidden">
                    <div class="custome-1-bg b-r-4 card-body">
                        <div class="media align-items-center static-top-widget">
                            <div class="media-body p-0">
                                <span class="m-0">Total Users</span>
                                <h4 class="mb-0 counter">{{ $users }}
                                    <span class="badge badge-light-primary grow">
                                </h4>
                            </div>
                            <div class="align-self-center text-center">
                                <i class="ri-user-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                    <div class="custome-2-bg b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="media-body p-0">
                                <span class="m-0">Total Teachers</span>
                                <h4 class="mb-0 counter">{{ $teacher }}
                                    <span class="badge badge-light-danger grow">
                                </h4>
                            </div>
                            <div class="align-self-center text-center">
                                <i class="ri-shopping-bag-3-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="main-tiles border-5 card-hover border-0  card o-hidden">
                    <div class="custome-3-bg b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="media-body p-0">
                                <span class="m-0">Total Students</span>
                                <h4 class="mb-0 counter">{{ $student }}
                                    <a href="add-new-product.html" class="badge badge-light-secondary grow">
                                        ADD NEW</a>
                                </h4>
                            </div>

                            <div class="align-self-center text-center">
                                <i class="ri-chat-3-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                    <div class="custome-4-bg b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="media-body p-0">
                                <span class="m-0">Total Notice</span>
                                <h4 class="mb-0 counter">{{ $notice }}
                                    <span class="badge badge-light-success grow">
                                </h4>
                            </div>

                            <div class="align-self-center text-center">
                                <i class="ri-user-add-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Student info Start  -->
            <div class="col-xl-12 col-md-12">
                <div class="card o-hidden card-hover">
                    <div class="card-header card-header-top card-header--2 px-0 pt-0">
                        <div class="card-header-title">
                            <h4>Recent Added Student</h4>
                        </div>

                        <div class="best-selling-box d-sm-flex d-none">
                            <span>Short By:</span>
                            <div class="dropdown">
                                <button class="btn p-0 dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" data-bs-auto-close="true">Today</button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div>
                            <div class="table-responsive">
                                <table
                                    class="best-selling-table w-image
                                            w-image
                                            w-image table border-0">
                                    <tbody>
                                        @foreach ($students as $student)


                                        <tr>
                                            <td>
                                                <div class="best-product-box">
                                                    <div class="product-image">
                                                        <img src="{{asset('image/student')}}/{{$student->img}}"
                                                            class="img-fluid" alt="Product">
                                                    </div>
                                                    <div class="product-name">
                                                        <h5>Student Name</h5>
                                                        <h4>{{$student->name}}</h4>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>Father`s Name</h6>
                                                    <h5>{{$student->fa_name}}</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>Student Phone</h6>
                                                    <h5>{{$student->student_phone}}</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>Roll</h6>
                                                    <h5>{{$student->roll}}</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>Class</h6>
                                                    <h5>{{$student->class}}</h5>
                                                </div>
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
            <!-- Student info Start  End -->


            <div class="col-12">
                <div class="card o-hidden card-hover">
                    <div class="card-header border-0 pb-1">
                        <div class="card-header-title p-0">
                            <h4>Teachers</h4>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="category-slider no-arrow">
                            @foreach ($teachers as $teacher)
                                <div>
                                    <div class="dashboard-category"
                                        style="    border: 2px solid #ddd;
    padding: 5px;
    border-radius: 5px;
    background: #048e84;
    color: #fff;
    max-width: 200px;
    width: 100%;
    margin:5px;
    ">
                                        <a href="javascript:void(0)" class="">
                                            <img src="{{ asset('image/teacher') }}/{{ $teacher->img }}" class="img-fluid"
                                                alt="teacher img">
                                        </a>
                                        <a href="javascript:void(0)" class="">
                                            <h6 style="color: #fff;text-align:center;padding:5px">{{ $teacher->name }}</h6>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


            <!-- Board Of Director Start  -->
            <div class="col-xl-12 col-md-12">
                <div class="card o-hidden card-hover">
                    <div class="card-header card-header-top card-header--2 px-0 pt-0">
                        <div class="card-header-title">
                            <h4>Board Of Director</h4>
                        </div>

                        <div class="best-selling-box d-sm-flex d-none">
                            <span>Short By:</span>
                            <div class="dropdown">
                                <button class="btn p-0 dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" data-bs-auto-close="true">Today</button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div>
                            <div class="table-responsive">
                                <table
                                    class="best-selling-table w-image
                                            w-image
                                            w-image table border-0">
                                    <tbody>
                                        @foreach ($directors as $director)


                                        <tr>
                                            <td>
                                                <div class="best-product-box">
                                                    <div class="product-image">
                                                        <img src="{{asset('image/director')}}/{{$director->img}}"
                                                            class="img-fluid" alt="Product">
                                                    </div>
                                                    <div class="product-name">
                                                        <h5>Student Name</h5>
                                                        <h4>{{$student->name}}</h4>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>Director Title</h6>
                                                    <h5>{{$director->title}}</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>Director Phone</h6>
                                                    <h5>{{$director->phone}}</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>Joining Date</h6>
                                                    <h5>{{$director->date}}</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>Email</h6>
                                                    <h5>{{$director->eamil}}</h5>
                                                </div>
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
            <!-- Student info Start  End -->





            <!-- To Do List start-->
            <div class="col-xxl-4 col-md-6">
                <div class="card o-hidden card-hover">
                    <div class="card-header border-0">
                        <div class="card-header-title">
                            <h4>To Do List</h4>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <ul class="to-do-list">
                            <li class="to-do-item">
                                <div class="form-check user-checkbox">
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault">
                                </div>
                                <div class="to-do-list-name">
                                    <strong>Pick up kids from school</strong>
                                    <p>8 Hours</p>
                                </div>
                            </li>
                            <li class="to-do-item">
                                <div class="form-check user-checkbox">
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault1">
                                </div>
                                <div class="to-do-list-name">
                                    <strong>Prepare or presentation.</strong>
                                    <p>8 Hours</p>
                                </div>
                            </li>
                            <li class="to-do-item">
                                <div class="form-check user-checkbox">
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault2">
                                </div>
                                <div class="to-do-list-name">
                                    <strong>Create invoice</strong>
                                    <p>8 Hours</p>
                                </div>
                            </li>
                            <li class="to-do-item">
                                <div class="form-check user-checkbox">
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault3">
                                </div>
                                <div class="to-do-list-name">
                                    <strong>Meeting with Alisa</strong>
                                    <p>8 Hours</p>
                                </div>
                            </li>

                            <li class="to-do-item">
                                <form class="row g-2">
                                    <div class="col-8">
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter Task Name">
                                    </div>
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary w-100 h-100">Add
                                            task</button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- To Do List end-->


        </div>
    </div>
@endsection
