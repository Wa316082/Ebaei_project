@extends('layouts.auth_layout')
@section('title', 'Order')
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
                                    <div>
                                        <button type="button" class="btn  btn-light ml-2" data-toggle="modal"
                                            data-target="#exampleModalCenter">
                                            Update Status
                                        </button>
                                        <a href="{{ url('admin/order/create') }}" class="btn btn-dark ">Place order</a>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="mb-4 border shadow-sm p-3">
                                    <form action="{{ url('admin/order/search') }}" method="GET" class="d-flex row">

                                        <div class="col-md-6">
                                            <label for="waybill_number">Search by Waybill No:</label>
                                            <input type="text" name="waybill_number" placeholder="waybill number"
                                                class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="daterange">Date Range</label>
                                            <input type="text" class="form-control" name="dates" placeholder="Dates"
                                                id="demo" />
                                        </div>

                                        {{-- <div class="col-md-3">
                                <label for="waybill">Merchant Name</label>
                                <select name="merchant_name" class="form-control select2" id="merchant_name">
                                  <option value="" selected="selected">Select One</option>
                                  @foreach ($merchants as $merchant)
                                  <option value="{{ $merchant->id }}">{{ $merchant->name }}</option>
                                  @endforeach
                              </select> --}}
                                        <div class="mt-3"><button type="submit" class="btn btn-success"><span><i
                                                        class="fas fa-solid fa-magnifying-glass fw-6"></i></span>
                                                Search</button></div>
                                </div>

                                </form>
                            </div>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><input class="mr-1 check_all" type="checkbox"><span>All</span></th>
                                        <th>Waybill number</th>
                                        <th>Sender Name</th>
                                        <th>Sender Mobile</th>
                                        <th>Reciever Name</th>
                                        <th>Reciever Mobile</th>
                                        <th>Order price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td> <input type="checkbox" id="{{ $order->id }}" value="{{ $order->id }}"
                                                    class="check_box" /></td>
                                            <td>{{ $order->waybill_number }}</td>
                                            <td>{{ $order->sender_name }}</td>
                                            <td>{{ $order->sender_contact }}</td>
                                            <td>{{ $order->reciever_name }}</td>
                                            <td>{{ $order->reciever_contact }}</td>
                                            <td>{{ $order->order_price }}</td>

                                            <td><a target="__blank" href="{{ url('admin/order/Cn', $order->id) }}"
                                                    class="btn btn-success"><i
                                                        class="fas fa-solid fa-file-invoice fs-4 "></i></a></td>
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

    @include('backend.orders.order_status_add')

@endsection


@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js">
    </script>
    <script>
        $(".check_all").click(function() {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
    </script>

    <script>
        $(":checkbox").change(function() {
            if ($.cookie("test") == null) {
                var checked = [];
            } else {
                var checked = [$.cookie("test")];
            }
            if ($.cookie("nottest") == null) {
                var notchecked = [];
            } else {
                var notchecked = [$.cookie("nottest")];
            }
            $("input[type='checkbox']:checked").map(function() {
                if ($(this).is(':checked')) {
                    this.checked ? checked.push(this.id) : '';
                }
                var cc = $.cookie("test", checked, {
                    expires: 5
                });
            });
            if (!$(this).is(':checked')) {
                $(this).map(function() {
                    var ccc = notchecked.push(this.id);
                });
                var dd = $.cookie("nottest", notchecked, {
                    expires: 5
                });
            }
            $('#not_check_id').val(notchecked);
            $('#order_get_id').val(checked);
        });
        $.removeCookie("test");
        $.removeCookie("nottest");


        //   $(document).ready(function() {
        //       $(".check_all").click(function() {
        //           if ($(this).is(":checked")) {
        //               var isAllChecked = 0;
        //               $(".check_all").each(function() {
        //                   if (!this.checked)
        //                       isAllChecked = 1;
        //               });
        //               if (isAllChecked == 0) {
        //                   $(".check_box").prop("checked", true);
        //               }
        //           } else {
        //               $(".check_box").prop("checked", false);
        //           }
        //       });
        //   });



        $('.data_parent').change(function() {
            var data = $('.data_parent option:selected').data("parent");
            if (data == "Delivered") {
                $('#proves').removeClass('d-none');
            } else {
                $('#proves').addClass('d-none');
            }
        })
    </script>
@endsection
