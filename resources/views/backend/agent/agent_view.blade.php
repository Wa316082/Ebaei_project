@extends('layouts.auth_layout')
@section('title','Agent')
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
                                    <h3 class="card-title">Agent</h3>
                                    {{-- <a href="{{ url('admin/order/create') }}" class="btn btn-dark ">Create New</a> --}}
                                    <a class="btn btn-dark" data-bs-toggle="modal" href="#exampleModalToggleagent" role="button">Create New</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Agent Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($agents as $agent )


                                        <tr>
                                            <td>{{ $agent->id }}</td>
                                            <td>{{ $agent->name }}</td>
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

    @include('backend.agent.agent_create')

@endsection
