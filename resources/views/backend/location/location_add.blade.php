@extends('layouts.auth_layout')
@section('title', 'Location')
@section('admin_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header  bg-success w-100">
                        <div class="d-flex justify-content-between">
                            <h3>Location Add</h3>
                        </div>
                    </div>
                    <div class="card-body ">
                        <form action="{{ url('admin/location/store') }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="simpleinput"> Name</label>
                                        <input type="text" id="simpleinput" class="form-control" name="name">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror


                                    </div>

                                </div>

                                    <div class="form-group col-lg-3 col-md-6 mb-3 cc">
                                        <label for="type">Type</label>
                                        <select class="form-control select2 " id="type" name="type">

                                            <option value=""> Select Type</option>
                                            <option   value="Country">Country</option>
                                            <option   value="Zone/Division/City">Zone/Division/City</option>
                                            <option class="divis" value="Area/Origin">Area/Origin</option>
                                            {{-- <option  value="Thana">Thana</option>
                                            <option  value="Area">Area</option> --}}

                                        </select>
                                        @error('type')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror


                                    </div>

                                @php
                                    $countries=App\Models\Location::where('parent_id',0)->get();
                                    // dd($countries);
                                @endphp
                                <div class="col-lg-3 col-md-6 q1 country d-none">
                                    <div class="form-group mb-3">
                                        <label for="country_id">Country</label>
                                        <select class="form-control select2 country_id  cont" id="country_id" name="country_id">
                                            <option value=""> Select Country</option>
                                            @foreach ( $countries as $country)

                                                <option value="{{ $country->id }}">{{  $country->name  }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                {{-- division --}}
                                    <div class="form-group col-lg-3 col-md-6 q2 zone d-none mb-3">
                                        <label for="zone_id">Zone/Division/City</label>
                                        <select class="form-control select2 set " id="zone_id" name="zone_id">
                                            <option> Select Zone/Division/City</option>
                                            {{-- <option value="2">Dhaka</option>
                                            <option  value="5">Rajshahi</option> --}}
                                        </select>

                                    </div>

                                </div>

                            <div style="text-align:center;">
                                <button type="submit" class="btn btn-success waves-effect waves-light ">Submit</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div><!-- /.container-fluid -->

            </div>

        </div>
    @endsection
    @section('scripts')
        <script>
            // division1212
            $('.country_id').change(function() {
                // console.log("hello");
                var id = $('.country_id option:selected').val();
                console.log(id);
                $('select[name="zone_id"]').empty();
                $.ajax({
                    type: "GET",
                    url: `/admin/location/zone_get/${id}`,
                    success: function(response) {
                        console.log(response);
                        var optional = `<option  value="">Select Zone Name</option>`;
                        $('select[name="zone_id"]').append(optional);
                        $.each(response.zones, function(key, value) {
                            // console.log(value);
                            $('select[name="zone_id"]').append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        })
                        // console.log(response.district);
                    }
                });
            });
            // district
            // $('.set').change(function() {
            //     var data = $('.set option:selected').val();
            //     // console.log(data);
            //     $('select[name="district_get"]').empty();
            //     $.ajax({
            //         type: "GET",
            //         url: `/admin/location/district/ajax/${data}`,
            //         success: function(response) {
            //             var optional = `<option  value="">Select District Name</option>`;
            //             $('select[name="district_get"]').append(optional);
            //             $.each(response.district, function(key, value) {
            //                 // console.log(value);
            //                 $('select[name="district_get"]').append('<option value="' + value.id +
            //                     '">' + value.name + '</option>');
            //             })
            //             // console.log(response.district);
            //         }
            //     });
            // });
            // //  for thana ajax
            // $('.disset').change(function() {
            //     var data_thana = $('.disset option:selected').val();
            //     // console.log(data_thana);
            //     $('select[name="thana_get"]').empty();
            //     $.ajax({
            //         type: "GET",
            //         url: `/admin/location/thana/ajax/${data_thana}`,
            //         success: function(response) {
            //             var optional = `<option value="">Select Thana name</option>`;
            //             $('select[name="thana_get"]').append(optional);
            //             $.each(response.thana, function(key, value) {
            //                 // console.log(value);
            //                 $('select[name="thana_get"]').append('<option value="' + value.id +
            //                     '">' + value.name + '</option>');
            //             })
            //             // console.log(response.thana);
            //         }
            //     });
            // });
        </script>
        <script>
            $('#type').change(function() {
                var data = $('#type option:selected').text();
                if (data == 'Country') {
                    $(".country").addClass("d-none");
                    $(".zone").addClass("d-none");
                    // $(".area").addClass("d-none");
                    // $(".thana").addClass("d-none");
                }
                if (data == 'Zone/Division/City') {
                    console.log('hello');
                    $(".country").removeClass("d-none");
                    $(".zone").addClass("d-none");
                    // $(".area").addClass("d-none");
                    // $(".thana").addClass("d-none");
                }
                if (data == 'Area/Origin') {
                    console.log('hello');
                    $(".country").removeClass("d-none");
                    $(".zone").removeClass("d-none");
                    // $(".area").addClass("d-none");
                    // $(".thana").addClass("d-none");
                }
                // $(".q1").addClass("d-block");
                // location.reload();
                // $(".div").addClass("d-none");
                // if (data == 'Thana') {
                //     $(".country").removeClass("d-none");
                //     $(".dis").removeClass("d-none");
                //     $(".div").removeClass("d-none");
                //     $(".thana").addClass("d-none");
                // }
                // $(".q2").addClass("d-block");
                // if (data == 'Area') {
                //     $(".country").removeClass("d-none");
                //     $(".thana").removeClass("d-none");
                //     $(".dis").removeClass("d-none");
                //     $(".div").removeClass("d-none");
                //     // $(".dis").addClass("d-none");
                //     // $(".thana").addClass("d-none");
                // }
                // $(".q3").addClass("d-block");
                //  $(".div").addClass("d-none");
            })
            // $("filtercombo option[value='District']").on('click', function(){
            //     $(".ddd").removeClass("d-none");
            // });
            $(document).ready(function() {
                // $('.selDiv option[value="SEL1"]')
                $(".cc option[value='District']").click(function() {
                    // console.log('labony');
                    // if($(this).prop("checked") == true){
                    //     $("#get").removeClass("d-none");
                    // }
                    // else if($(this).prop("checked") == false){
                    //     $("#get").addClass("d-none");
                    // }
                });
            });
        </script>
    @endsection
