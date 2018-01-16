@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Student
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Student</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Student Register</h3>
                        </div>
                        <!-- /.box-header -->


                        <!-- form start -->
                        <form role="form">
                            <div class="box-body">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Full Name Khmer</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name in khmer">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Full Name Latin</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone Number</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter phone number">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div>
                                            <label for="exampleInputEmail1">Gender</label>
                                        </div>
                                        @foreach($gender as $key => $value)
                                            <span><input value="{{$value->id}}" type="radio" name="gender" checked> {{$value->gender}} &nbsp;&nbsp;</span>
                                        @endforeach

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div>
                                            <label for="exampleInputEmail1">RelationShip</label>
                                        </div>
                                        <span><input type="radio" name="relationship" checked> Single &nbsp;&nbsp;</span>
                                        <span><input type="radio" name="relationship"> Married</span>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date Of Birth</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="datepicker">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nationality</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Khmer</option>
                                            <option>Cham</option>
                                            <option>Kuy</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="box-header with-border">
                                    <h3 class="box-title">Address</h3>
                                </div>
                                <!-- /.box-header -->

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Provinces</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option>------please select------</option>
                                            <option>Cham</option>
                                            <option>Kuy</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>District</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option>------please select------</option>
                                            <option>Cham</option>
                                            <option>Kuy</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Commune</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option>------please select------</option>
                                            <option>Cham</option>
                                            <option>Kuy</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Village</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option>------please select------</option>
                                            <option>Cham</option>
                                            <option>Kuy</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Current Address Study</label>
                                        <textarea class="form-control" placeholder="Enter current address"></textarea>
                                    </div>
                                </div>

                                <div class="footer col-sm-12"><hr>
                                    <button class="btn btn-default">Register</button>
                                    <button class="btn btn-default pull-right">Reset</button>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </section>


    </div>


    <script>
        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })
    </script>
@endsection
