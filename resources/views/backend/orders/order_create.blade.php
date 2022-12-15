@extends('layouts.auth_layout')
@section('title', 'Order')
@section('admin_content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Add order</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('admin/order/store') }}" method="POST">
                                @csrf
                                <div class="card-body row d-flex align-items-center">

                                    {{-- sender Information --}}

                                    <div class="my-2 py-2 bg-info pl-2 col-12 d-flex rounded">
                                        <span><i class="fas fa-solid fa-bars pr-2"></i></span>
                                        Sender Information
                                    </div>

                                    <div class="form-group col-md-6 col-lg-4 ">
                                        <label for="sender_name">Sender Name <span class="text-danger">*</span></label>
                                        <input type="text" name="sender_name" class="form-control" id="sender_name"
                                            placeholder="Enter Name">
                                        @error('sender_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4 ">
                                        <label for="sender_contact">Phone/Mobile <span class="text-danger">*</span></label></label>
                                        <input type="number" name="sender_contact" class="form-control" id="sender_contact"
                                            placeholder="Enter Phone/Mobile">
                                        @error('sender_contact')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4 ">
                                        <label for="sender_email">Email <span class="text-danger">*</span></label>
                                        <input type="email" name="sender_email" class="form-control" id="sender_email"
                                            placeholder="Enter Email">
                                        @error('sender_email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4">
                                        <label for="sender_country">Country <span class="text-danger">*</span></label>
                                        <select name="sender_country" class="form-control select2 sender_country" id="sender_country" style="width: 100%;">
                                            <option value="" selected="selected">Select Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('sender_country')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4">
                                        <label for="sender_zone">Division/District/City <span class="text-danger">*</span></label>
                                        <select name="sender_zone" class="form-control select2" id="sender_zone" style="width: 100%;">
                                            <option value="" selected="selected">Select One</option>
                                            <option value="1">Dhaka</option>
                                            <option value="2">Mumbai</option>
                                            <option value="3">Newyourk</option>
                                            <option value="4">Shanghai</option>
                                        </select>
                                        @error('sender_zone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4">
                                        <label for="sender_area">Aria/Origin <span class="text-danger">*</span></label>
                                        <select name="sender_area" class="form-control select2" id="sender_area" style="width: 100%;">
                                            <option value="" selected="selected">Select One</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                        </select>
                                        @error('sender_area')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-6 col-lg-4 ">
                                        <label for="sender_post_code">Zip/Post Code<span class="text-danger">*</span> </label>
                                        <input type="sender_post_code" name="sender_post_code" class="form-control" id="sender_post_code"
                                            placeholder="Enter Zip/Post Code">
                                        @error('sender_post_code')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4 ">
                                        <label for="sender_address">Address<span class="text-danger">*</span></label>
                                        <input type="text" name="sender_address" class="form-control" id="sender_address"
                                            placeholder="Enter Address">
                                    </div>

                                    {{-- Reciver Information --}}

                                    <div class="my-2 py-2 bg-info pl-2 col-12 d-flex rounded">
                                        <span><i class="fas fa-solid fa-bars pr-2"></i></span>
                                        Reciver Information
                                    </div>

                                    <div class="form-group col-md-6 col-lg-4 ">
                                        <label for="reciever_name">Ricever Name <span class="text-danger">*</span></label>
                                        <input type="reciever_name" name="reciever_name" class="form-control" id="reciever_name"
                                            placeholder="Enter Name">
                                        @error('reciever_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4 ">
                                        <label for="reciever_contact">Phone/Mobile <span class="text-danger">*</span></label></label>
                                        <input type="reciever_contact" name="reciever_contact" class="form-control" id="reciever_contact"
                                            placeholder="Enter Phone/Mobile">
                                        @error('reciever_contact')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4 ">
                                        <label for="reciever_email">Email <span class="text-danger">*</span></label>
                                        <input type="email" name="reciever_email" class="form-control" id="reciever_email"
                                            placeholder="Enter Email">
                                        @error('reciever_email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4">
                                        <label for="reciever_country">Country <span class="text-danger">*</span></label>
                                        <select name="reciever_country" class="form-control select2" id="reciever_country" style="width: 100%;">
                                            <option value="" selected="selected">Select Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('reciever_country')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4">
                                        <label for="reciever_zone">Division/District/City <span class="text-danger">*</span></label>
                                        <select name="reciever_zone" class="form-control select2" id="reciever_zone" style="width: 100%;">
                                            <option value="" selected="selected">Select One</option>
                                            <option value="1">Dhaka</option>
                                            <option value="2">Mumbai</option>
                                            <option value="3">Newyourk</option>
                                            <option value="4">Shanghai</option>
                                        </select>
                                        @error('reciever_zone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4">
                                        <label for="reciever_area">Aria/Origin <span class="text-danger">*</span></label>
                                        <select name="reciever_area" class="form-control select2" id="reciever_area" style="width: 100%;">
                                            <option value="" selected="selected">Select One</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                        </select>
                                        @error('reciever_area')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-6 col-lg-4 ">
                                        <label for="reciever_post_code">Zip/Post Code<span class="text-danger">*</span> </label>
                                        <input type="number" name="reciever_post_code" class="form-control" id="reciever_post_code"
                                            placeholder="Enter Zip/Post Code">
                                        @error('reciever_post_code')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4 ">
                                        <label for="reciever_address">Address<span class="text-danger">*</span></label>
                                        <input type="text" name="reciever_address" class="form-control" id="reciever_address"
                                            placeholder="Enter Address">
                                        @error('reciever_address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="my-2 py-2 bg-info pl-2 col-12 d-flex rounded">
                                        <span><i class="fas fa-solid fa-briefcase mr-2"></i></span>
                                        Order Information
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4 ">
                                        <label for="waybill_number">Waybill No:<span class="text-danger">*</span></label>
                                        <input type="text" name="waybill_number" class="form-control" id="reciever_address"
                                            placeholder="Enter Waybill">
                                        @error('waybill_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4 ">
                                        <label for="reference_number">Reference No:<span class="text-danger">*</span></label>
                                        <input type="text" name="reference_number" class="form-control" id="reciever_address"
                                            placeholder="Enter Reference Number ">
                                        @error('reference_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4">
                                        <label>Order Date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" name="order_date" id="order_date">
                                        @error('order_date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4">
                                        <label>Order Date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" name="shipment_date" id="shipment_date">
                                        @error('shipment_date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-lg-4 d-flex flex-column">
                                        <label>Shipment Type<span class="text-danger">*</span> </label>
                                        <div class="d-flex">
                                            <div class="mr-4 icheck-success d-inline">
                                                <input type="radio" name="shipment_type" value="Regular"  id="radioSuccess1">
                                                <label class="fw-normal" for="radioSuccess1">Regular
                                                </label>
                                            </div>
                                            <div class="mr-4 icheck-success d-inline">
                                                <input type="radio" name="shipment_type" value="Sea freight"  id="radioSuccess2">
                                                <label class="fw-normal" for="radioSuccess2">Sea freight
                                                </label>
                                            </div>
                                            <div class="icheck-success d-inline">
                                                <input type="radio" name="shipment_type" value="Air freight" id="radioSuccess3">
                                                <label class="fw-normal" for="radioSuccess3">Air freight
                                                </label>
                                            </div>
                                            @error('shipment_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-lg-4 d-flex flex-column">
                                        <label>Percel Type<span class="text-danger">*</span> </label>
                                        <div class="d-flex">
                                            <div class="mr-4 icheck-success d-inline">
                                                <input type="radio" name="perel_type" value="Type 1"  id="radioSuccess4">
                                                <label class="fw-normal" for="radioSuccess4">Type 1
                                                </label>
                                            </div>
                                            <div class="mr-4 icheck-success d-inline">
                                                    <input type="radio" name="perel_type" value="Type 2"  id="radioSuccess5">
                                                    <label class="fw-normal" for="radioSuccess5">Type 2
                                                    </label>
                                            </div>
                                            <div class="icheck-success d-inline">
                                                    <input type="radio" name="perel_type" value="type 3"  id="radioSuccess6">
                                                    <label class="fw-normal" for="radioSuccess6">type 3
                                                    </label>
                                            </div>
                                            @error('perel_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                     </div>
                                     {{-- <div class="col-md-6 col-lg-4 d-flex flex-column">
                                        <label>Percel Type<span class="text-danger">*</span> </label>
                                        <div class="d-flex">
                                            <div class="mr-4 icheck-success d-inline">
                                                <input type="radio" name="perel_type"  id="radioSuccess7">
                                                <label class="fw-normal" for="radioSuccess7">Type 1
                                                </label>
                                            </div>
                                            <div class="mr-4 icheck-success d-inline">
                                                    <input type="radio" name="perel_type"  id="radioSuccess8">
                                                    <label class="fw-normal" for="radioSuccess8">Type 2
                                                    </label>
                                            </div>
                                            <div class="icheck-success d-inline">
                                                    <input type="radio" name="perel_type"  id="radioSuccess9">
                                                    <label class="fw-normal" for="radioSuccess9">Air freight
                                                    </label>
                                            </div>
                                            @error('perel_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                     </div> --}}
                                     <div class="col-md-6 col-lg-4 d-flex flex-column">
                                        <label>Product Type<span class="text-danger">*</span> </label>
                                        <div class="d-flex">
                                            <div class="mr-4 icheck-success d-inline">
                                                <input type="radio" name="product_type" value="Type 1"  id="radioSuccess10">
                                                <label class="fw-normal" for="radioSuccess10">Type 1
                                                </label>
                                            </div>
                                            <div class="mr-4 icheck-success d-inline">
                                                    <input type="radio" name="product_type" value="Type 2"  id="radioSuccess11">
                                                    <label class="fw-normal" for="radioSuccess11">Type 2
                                                    </label>
                                            </div>
                                            {{-- <div class="icheck-success d-inline">
                                                    <input type="radio" name="product_type"  id="radioSuccess12">
                                                    <label class="fw-normal" for="radioSuccess12">Air freight
                                                    </label>
                                            </div> --}}
                                            @error('perel_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                     </div>
                                     <div class="form-group col-md-6 col-lg-4">
                                        <label for="delivery_date">Order Date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" name="delivery_date" id="delivery_date">
                                        @error('delivery_date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4 ">
                                        <label for="order_price">Product Price<span class="text-danger">*</span> </label>
                                        <input type="number" name="order_price" class="form-control" id="order_price"
                                            placeholder="Price">
                                        @error('order_price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4 ">
                                        <label for="final_weight">Final Weight<span class="text-danger">*</span> </label>
                                        <input type="number" name="final_weight" class="form-control" id="final_weight"
                                            placeholder="Final Weight">
                                        @error('final_weight')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>



                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-success ">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->


                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->

        </div>
    </div>

@endsection

@section('scripts')



<script>

$('#sender_country').change(function(){
    var id = $('#sender_country option:selected').val()
    $('select[name="sender_zone"]').empty();
                $.ajax({
                    type: "GET",
                    url: `/admin/location/zone_get/${id}`,
                    success: function(response) {
                        // console.log(response);
                        var optional = `<option  value="">Select Zone Name</option>`;
                        $('select[name="sender_zone"]').append(optional);
                        $.each(response.zones, function(key, value) {
                            // console.log(value);
                            $('select[name="sender_zone"]').append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        })
                        // console.log(response.district);
                    }
                });


});

$('#sender_zone').change(function(){
    var id = $('#sender_zone option:selected').val()
    // console.log(id);
    $('select[name="sender_area"]').empty();
                $.ajax({
                    type: "GET",
                    url: `/admin/location/area_get/${id}`,
                    success: function(response) {
                        // console.log(response);
                        var optional = `<option  value="">Select Area Name</option>`;
                        $('select[name="sender_area"]').append(optional);
                        $.each(response.areas, function(key, value) {
                            // console.log(value);
                            $('select[name="sender_area"]').append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        })
                        // console.log(response.district);
                    }
                });


});


$('#reciever_country').change(function(){
    var id = $('#reciever_country option:selected').val()
    $('select[name="reciever_zone"]').empty();
                $.ajax({
                    type: "GET",
                    url: `/admin/location/zone_get/${id}`,
                    success: function(response) {
                        // console.log(response);
                        var optional = `<option  value="">Select Zone Name</option>`;
                        $('select[name="reciever_zone"]').append(optional);
                        $.each(response.zones, function(key, value) {
                            // console.log(value);
                            $('select[name="reciever_zone"]').append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        })
                        // console.log(response.district);
                    }
                });


});

$('#reciever_zone').change(function(){
    var id = $('#reciever_zone option:selected').val()
    // console.log(id);
    $('select[name="reciever_area"]').empty();
                $.ajax({
                    type: "GET",
                    url: `/admin/location/area_get/${id}`,
                    success: function(response) {
                        // console.log(response);
                        var optional = `<option  value="">Select Area Name</option>`;
                        $('select[name="reciever_area"]').append(optional);
                        $.each(response.areas, function(key, value) {
                            // console.log(value);
                            $('select[name="reciever_area"]').append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        })
                        // console.log(response.district);
                    }
                });


});



</script>



@endsection
