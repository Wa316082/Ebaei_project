@extends('layouts.auth_layout')
@section('title','Order')
@section('admin_content')
@php
    $orders = Session::get('orders');
@endphp
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <div class="content-header">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-header bg-success w-100">
                    <div class="d-flex justify-content-between align-items-center ">
                        <h3 class="card-title">Tracking</h3>
                        {{-- <div>
                            <button type="button" class="btn  btn-light ml-2" data-toggle="modal" data-target="#exampleModalCenter">
                                Update Status
                            </button>
                            <a href="{{ url('admin/order/create') }}" class="btn btn-dark ">Place order</a>
                        </div> --}}

                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="mb-4 border shadow-sm p-3">
                        <form action="{{ url('admin/order/tracking.search') }}" method="" class="d-flex row">
                            <div class="col-md-6">
                                <label for="waybill">Search by Waybill No:</label>
                                <input type="text" name="wabn" placeholder="AWBN" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="daterange">Date Range</label>
                                <input type="text" class="form-control" name="dates" id="demo" value="01/01/2018 - 01/15/2018" />
                            </div>

                            <div class="col-md-3">
                                <label for="waybill">Merchant Name</label>
                                <select name="merchant_name" class="form-control select2" id="merchant_name">
                                  <option value="" selected="selected">Select One</option>
                                  @foreach ($merchants as $merchant )
                                  <option value="{{ $merchant->id }}">{{ $merchant->name }}</option>
                                  @endforeach
                              </select>
                            </div>
                            <div class="mt-3"><button type="submit" class="btn btn-success"><span><i class="fas fa-solid fa-magnifying-glass fw-6"></i></span> Search</button></div>
                        </form>
                    </div>
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Sender Name</th>
                        <th>Sender Mobile</th>
                        <th>Reciever Name</th>
                        <th>Reciever Mobile</th>
                        <th>Order price</th>
                        <th>Waybill number</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        @if ($orders != null)


                        @foreach ($orders as $order )
                      <tr>
                        <td>{{ $order->sender_name }}</td>
                        <td>{{ $order->sender_contact }}</td>
                        <td>{{ $order->reciver_name }}</td>
                        <td>{{ $order->reciver_contact }}</td>
                        <td>{{ $order->order_price }}</td>
                        <td>{{ $order->waybill_number }}</td>
                        <td><a href="{{ url('admin/order/track',$order->id) }}" target="_blank" class="btn btn-success btn-sm">Track</a></td>
                      </tr>
                      @endforeach
                      @endif
                      </tbody>
                    </table>
                </div>
                  <!-- /.card-body -->
                <!-- /.card -->
            </div>
        </div>

  </div>
   </div>

</div>

@endsection
