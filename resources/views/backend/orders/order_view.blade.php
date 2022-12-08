@extends('layouts.auth_layout')
@section('title','Order')
@section('admin_content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <div class="content-header">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-header bg-success w-100">
                    <div class="d-flex justify-content-between align-items-center ">
                        <h3 class="card-title">Orders</h3>
                        <a href="{{ url('admin/order/create') }}" class="btn btn-dark ">Place order</a>

                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
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
                        @foreach ($orders as $order )


                      <tr>
                        <td>{{ $order->sender_name }}</td>
                        <td>{{ $order->sender_contact }}</td>
                        <td>{{ $order->reciver_name }}</td>
                        <td>{{ $order->reciver_contact }}</td>
                        <td>{{ $order->order_price }}</td>
                        <td>{{ $order->waybill_number }}</td>
                        <td>actions</td>
                      </tr>
                      @endforeach

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
