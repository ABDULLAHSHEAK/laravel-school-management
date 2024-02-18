@extends('Dashboard.layout.master')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Class-Room</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-md-8">

                <div class="x_content">
                    <form class="" action="" method="POST" novalidate>
                        @csrf
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Class Name<span
                                    class="required">*</span></label>
                            <div class="col-md-9 col-sm-9">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2"
                                    name="class_name" placeholder="Enter Class Name" value="{{$class->class_name}}" />
                            </div>
                        </div>
                        <div class="ln_solid mt-2">
                            <div class="form-group">
                                <div class="">
                                    <button type='submit' class="btn btn-primary" name="submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
