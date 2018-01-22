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
                        <form role="form" method="post" action="{{ route('PostInsertStudent') }}">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Full Name Khmer</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name in khmer" name="name_khmer">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Full Name Latin</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="name_latin">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone Number</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter phone number" name="phone_number">
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
                                        @foreach($relationship as $key => $value)
                                        <span><input type="radio" name="relationship" value="{{$value->id}}"> {{ $value->relationship }} &nbsp;&nbsp;</span>
                                        @endforeach
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date Of Birth</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="datepicker" name="date_of_birth">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nationality</label>
                                        <select class="form-control select2" style="width: 100%;" name="nationality">
                                            @foreach($nationality as $key => $value)
                                            <option value="{{$value->id}}">{{$value->nationality}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>





                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Address</h3>
                                        </div>
                                    </div>
                                </div>

                                <!-- /.box-header -->

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Provinces</label>
                                        <select class="form-control select2" style="width: 100%;" name="province_id" id="province_id">
                                            <option>------please select------</option>
                                            @foreach($province as $key => $value)
                                                <option value="{{ $value->procode}}">{{$value->PROVINCE}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $('#province_id').on('change', function(e){
                                          var provinceID = $('#province_id').val();
                                         // alert(provinceID);
                                          $.ajax({
                                            type: 'GET',
                                            url: "{{ route('GetDistrict') }}",
                                            data: {'province_id': provinceID},
                                            success: function (data) {
                                                // console.log(data);
                                                var obj = JSON.parse(data);

                                                $("#district_id").empty();
                                                $("#district_id").append('<option selected="selected">-----Please select-----</option>');
                                                $.each(obj, function (index, element) {
                                                    $("#district_id").append(new Option(element.DName_en, element.DCode));
                                                });
                                            },
                                            error: function (report){
                                                console.log(report);
                                            }
                                        });
                                    });
                                </script>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>District</label>
                                        <select class="form-control select2" style="width: 100%;" name="district_id" id="district_id">
                                            <option>------please select------</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <script type="text/javascript">
                                    $('#district_id').on('change', function(e){
                                          var districtID = $('#district_id').val();
                                         // alert(districtID);
                                          $.ajax({
                                            type: 'GET',
                                            url: "{{ route('GetCommune') }}",
                                            data: {'district_id': districtID},
                                            success: function (data) {
                                                // console.log(data);
                                                var obj = JSON.parse(data);

                                                $("#commune_id").empty();
                                                $("#commune_id").append('<option selected="selected">-----Please select-----</option>');
                                                $.each(obj, function (index, element) {
                                                    $("#commune_id").append(new Option(element.CName_en, element.CCode));
                                                });
                                            },
                                            error: function (report){
                                                console.log(report);
                                            }
                                        });
                                    });
                                </script>




                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Commune</label>
                                        <select class="form-control select2" style="width: 100%;" name="commune_id" id="commune_id">
                                            <option>------please select------</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $('#commune_id').on('change', function(e){
                                          var CommuneID = $('#commune_id').val();
                                         // alert(CommuneID);
                                          $.ajax({
                                            type: 'GET',
                                            url: "{{ route('GetVillage') }}",
                                            data: {'commune_id': CommuneID},
                                            success: function (data) {
                                                // console.log(data);
                                                var obj = JSON.parse(data);
                                               // alert(obj);

                                                $("#village_id").empty();
                                                $("#village_id").append('<option selected="selected">-----Please select-----</option>');
                                                $.each(obj, function (index, element) {
                                                    $("#village_id").append(new Option(element.VName_en, element.VCode));
                                                });
                                            },
                                            error: function (report){
                                                console.log(report);
                                            }
                                        });
                                    });
                                </script>




                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Village</label>
                                        <select class="form-control select2" style="width: 100%;" name="village_id" id="village_id">
                                            <option>------please select------</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                 

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Current Address Study</label>
                                        <textarea class="form-control" placeholder="Enter current address" name="address"></textarea>
                                    </div>
                                </div>

                                <div class="footer col-sm-12"><hr>
                                    <button type="submit" class="btn btn-default">Register</button>
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
