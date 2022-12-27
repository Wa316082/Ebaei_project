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
                            <div class="card-body">
                                <label for="">Select Order Type</label>
                                <div class="w-100  d-flex">


                                        <div class="mr-2">
                                            <button type="button" class="btn btn-light border btn-ecommerce"><i class="fas fa-solid fa-cart-shopping mr-1"></i>E-Commerce</button>
                                        </div>
                                        <div class="mr-2">
                                            <button type="button" class="btn btn-light border btn-domestic"><i class="fas fa-solid fa-van-shuttle mr-1"></i>Domestic</button>
                                        </div>
                                        <div class="mr-2">
                                            <button type="button" class="btn btn-info border btn-international"><i class=" fas fa-solid fa-plane-departure mr-1"></i>International</button>
                                        </div>


                                </div>
                                <form action="{{ url('admin/order/store') }}" method="POST">
                                    @csrf
                                    <div class=" row d-flex align-items-center">

                                        {{-- sender Information --}}

                                        <div class="my-2 py-2 bg-info pl-2 col-12 d-flex rounded">
                                            <span><i class="fas fa-solid fa-bars pr-2"></i></span>
                                            Sender Information
                                        </div>
                                        <div class="row e-commerce d-none">
                                            <div class="form-group col-md-6 col-lg-4">
                                                <label for="agent">Agent <span class="text-danger">*</span></label>
                                                <select name="agent" class="form-control select2 agent" id="agent" style="width: 100%;">
                                                    <option value="" selected="selected">Select Agent</option>
                                                    @foreach ($agents as $agent)
                                                        <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('agent')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6 col-lg-4">
                                                <label for="merchant">Merchant <span class="text-danger">*</span></label>
                                                <select name="merchant" class="form-control select2" id="merchant" style="width: 100%;">
                                                    <option value="" selected="selected">Select One</option>

                                                </select>
                                                @error('merchant')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                       <div class="row others">
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

                                            </select>
                                            @error('sender_zone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6 col-lg-4">
                                            <label for="sender_area">Aria/Origin <span class="text-danger">*</span></label>
                                            <select name="sender_area" class="form-control select2" id="sender_area" style="width: 100%;">
                                                <option value="" selected="selected">Select One</option>

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

                                            </select>
                                            @error('reciever_zone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6 col-lg-4">
                                            <label for="reciever_area">Aria/Origin <span class="text-danger">*</span></label>
                                            <select name="reciever_area" class="form-control select2" id="reciever_area" style="width: 100%;">
                                                <option value="" selected="selected">Select One</option>

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
                                            <label>Shipment Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="shipment_date" id="shipment_date">
                                            @error('shipment_date')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-lg-4 d-flex flex-column">
                                            <label>Delivery Type<span class="text-danger">*</span> </label>
                                            <div class="d-flex">
                                                <div class="mr-4 icheck-success d-inline">
                                                    <input type="radio" name="shipment_type" value="Regular"  id="radioSuccess1">
                                                    <label class="fw-normal" for="radioSuccess1">Regular
                                                    </label>
                                                </div>
                                                <div class="mr-4 icheck-success d-inline">
                                                    <input type="radio" name="shipment_type" value=""  id="radioSuccess2">
                                                    <label class="fw-normal" for="radioSuccess2">Express
                                                    </label>
                                                </div>
                                                <div class="icheck-success d-inline">
                                                    <input type="radio" name="shipment_type" value="TDD" id="radioSuccess3">
                                                    <label class="fw-normal" for="radioSuccess3">TDD
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
                                                    <input type="radio" name="perel_type" value="Document"  id="radioSuccess4">
                                                    <label class="fw-normal" for="radioSuccess4">Document
                                                    </label>
                                                </div>
                                                <div class="mr-4 icheck-success d-inline">
                                                        <input type="radio" name="perel_type" value="Percel"  id="radioSuccess5">
                                                        <label class="fw-normal" for="radioSuccess5">Percel
                                                        </label>
                                                </div>
                                                {{-- <div class="icheck-success d-inline">
                                                        <input type="radio" name="perel_type" value="type 3"  id="radioSuccess6">
                                                        <label class="fw-normal" for="radioSuccess6">type 3
                                                        </label>
                                                </div> --}}
                                                @error('perel_type')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12  delivery-time ">
                                            <label>Delivery Time<span class="text-danger">*</span> </label>
                                            <div class="d-flex justify-content-between">
                                                <div class="mr-4 icheck-success d-inline">
                                                    <input type="radio" name="delivery_time" value="Any"  id="radioSuccess7">
                                                    <label class="fw-normal" for="radioSuccess7">Any
                                                    </label>
                                                </div>
                                                <div class="mr-4 icheck-success d-inline">
                                                        <input type="radio" name="delivery_time" value="Peack" id="radioSuccess8">
                                                        <label class="fw-normal" for="radioSuccess8">Peack
                                                        </label>
                                                </div>
                                                <div class="icheck-success d-inline">
                                                        <input type="radio" name="delivery_time" value="Off-peack" id="radioSuccess9">
                                                        <label class="fw-normal" for="radioSuccess9">Off-peack
                                                        </label>
                                                </div>
                                                <div class="icheck-success d-inline">
                                                    <input type="radio" name="delivery_time" value="On-peack"  id="radioSuccess10">
                                                    <label class="fw-normal" for="radioSuccess10">On-peack
                                                    </label>
                                                </div>



                                            </div>
                                            @error('delivery_time')
                                                    <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                        {{-- <div class="col-md-6 col-lg-4 d-flex flex-column">
                                            <label>Product Type<span class="text-danger">*</span> </label>
                                            <div class="d-flex">
                                                <div class="mr-4 icheck-success d-inline">
                                                    <input type="radio" name="product_type" value="Type 1"  id="radioSuccess11">
                                                    <label class="fw-normal" for="radioSuccess11">Type 1
                                                    </label>
                                                </div>
                                                <div class="mr-4 icheck-success d-inline">
                                                        <input type="radio" name="product_type" value="Type 2"  id="radioSuccess12">
                                                        <label class="fw-normal" for="radioSuccess12">Type 2
                                                        </label>
                                                </div>
                                                <div class="icheck-success d-inline">
                                                        <input type="radio" name="product_type"  id="radioSuccess12">
                                                        <label class="fw-normal" for="radioSuccess12">Air freight
                                                        </label>
                                                </div>
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
                                        </div> --}}

                                        <div class="form-group col-md-6 col-lg-4 ">
                                            <label for="product_type">Product Type<span class="text-danger">*</span> </label>
                                            <input type="text" name="product_type" class="form-control" id="product_type"
                                                placeholder="Product Type">
                                            @error('product_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6 col-lg-4 ">
                                            <label for="pieces">Pieces<span class="text-danger">*</span> </label>
                                            <input type="text" name="pieces" class="form-control" id="pieces"
                                                placeholder="Pieces">
                                            @error('pieces')
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
                                        <div class="form-group col-12 international-ewight row">
                                            <div class="col-2">
                                                <label for="weight">Weight<span class="text-danger">*</span> </label>
                                                <input type="number" name="weight" class="form-control" id="weight"
                                                    placeholder="Weight">
                                                @error('weight')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-2">
                                                <label for="final_weight">Final Weight<span class="text-danger">*</span> </label>
                                                <input type="number" readonly name="final_weight" class="form-control" id="final_weight"
                                                    placeholder="Final Weight">
                                                @error('final_weight')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-2 height">
                                                <label for="height">Height<span class="text-danger">*</span> </label>
                                                <input type="number" name="height" class="form-control" id="height"
                                                    placeholder="Height">
                                                @error('height')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-2 width">
                                                <label for="width">Width<span class="text-danger">*</span> </label>
                                                <input type="number" name="width" class="form-control" id="width"
                                                    placeholder="Width">
                                                @error('width')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-2 length">
                                                <label for="length">Length<span class="text-danger">*</span> </label>
                                                <input type="number" name="length" class="form-control" id="length"
                                                    placeholder="Length">
                                                @error('length')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-2 volume_weight">
                                                <label for="volume_weight">Volume Weight<span class="text-danger">*</span> </label>
                                                <input type="number" name="volume_weight" readonly class="form-control" id="volume_weight"
                                                    placeholder="Volume Weight">
                                                @error('volume_weight')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="remarks">Remarks<span class="text-danger">*</span> </label>
                                            <input type="text" name="remarks" class="form-control" id="remarks"
                                                placeholder="Remarks">
                                            @error('remarks')
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




$(document).ready(function(){
  $(".btn-ecommerce").click(function(){
    $('.btn-ecommerce').removeClass('btn-light');
    $('.btn-ecommerce').addClass('btn-info');
    $(".e-commerce").removeClass("d-none");
    $('.others').addClass('d-none');
    $('.btn-ecommerce').addClass('btn-info');
    $('.btn-domestic').removeClass('btn-info');
    $('.btn-domestic').addClass('btn-light');
    $('.delivery-time').addClass('d-none');
    $('.height, .width, .length , .volume_weight').addClass('d-none');
    $('.btn-international').removeClass('btn-info');
    $('.btn-international').addClass('btn-light');



  });

  $('.btn-domestic').click(function(){
    $('.btn-domestic').removeClass('btn-light');
    $('.btn-domestic').addClass('btn-info');
    $('.btn-ecommerce').addClass('btn-light');
    $('.others').removeClass('d-none');
    $(".e-commerce").addClass("d-none");
    $('.delivery-time').removeClass('d-none');
    $('.height, .width, .length , .volume_weight').addClass('d-none');
    $('.btn-international').removeClass('btn-info');
    $('.btn-international').addClass('btn-light');


  });

  $('.btn-international').click(function(){
    $('.btn-ecommerce').addClass('btn-light');
    $('.btn-domestic').removeClass('btn-info');
    $('.btn-domestic').addClass('btn-light');
    $('.delivery-time').addClass('d-none');
    $(".e-commerce").addClass("d-none");
    $('.btn-international').removeClass('btn-light');
    $('.btn-international').addClass('btn-info');
    $('.others').removeClass('d-none');
    $('.height, .width, .length , .volume_weight').removeClass('d-none');
  })
});


$(document).on('input','#weight, #height, #width, #length',function(){
    // const parent = $(this).parent();
    var weight = $('#weight').val();
    var height = $('#height').val();
    var width = $('#width').val();
    var length = $('#length').val();

    console.log('weight= '+ weight);


    if(height != 0 && width != 0 && length != 0){
        var vol_weight = ((height * width * length)/600)

    }

    if(vol_weight!=0 || vol_weight !=null){
        $('#volume_weight').val(vol_weight)
    }

    if((vol_weight!=0 || vol_weight !=null)&& (weight != 0 && weight != null)){
        if(vol_weight > weight){
            $('#final_weight').val(vol_weight);
        }else{
            $('#final_weight').val(weight);
        }
    }else if(weight != 0 && weight != null){
        $('#final_weight').val(weight);
    }
});



$('#agent').change(function(){
    var id = $('#agent option:selected').val()
    $('select[name="merchant"]').empty();
                $.ajax({
                    type: "GET",
                    url: `/admin/order/merchant/${id}`,
                    success: function(response) {
                        // console.log(response);
                        var optional = `<option  value="">Select Merchant Name</option>`;
                        $('select[name="merchant"]').append(optional);
                        $.each(response.merchants, function(key, value) {
                            // console.log(value);
                            $('select[name="merchant"]').append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        })
                        // console.log(response.district);
                    }
                });


});


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
