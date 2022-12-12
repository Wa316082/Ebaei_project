@extends('layouts.auth_layout')
@section('title','Merchants')
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
                                    <h3 class="card-title">Merchant</h3>
                                    {{-- <a href="{{ url('admin/order/create') }}" class="btn btn-dark ">Create New</a> --}}
                                    <a class="btn btn-dark" data-bs-toggle="modal" href="#exampleModalTogglemerchant" role="button">Create New</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Merchant Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($merchants as $merchant )


                                        <tr>
                                            <td>{{ $merchant->id }}</td>
                                            <td>{{ $merchant->name }}</td>
{{--                                            <td class="d-flex align-items-center justify-content-center">--}}
{{--                                                <a href="{{ url('admin/status/edit',$status->id) }}" class="btn btn-sm btn-primary">Edit</a>--}}
{{--                                                <a href="{{ url('admin/status/delete',$status->id) }}" class="btn btn-sm btn-danger ml-2">Delete</a>--}}
{{--                                            </td>--}}
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

    @include('backend.merchant.merchant_create')

@endsection
