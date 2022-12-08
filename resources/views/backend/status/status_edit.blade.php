@extends('layouts.auth_layout')
@section('title','status')
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
                        <form action="{{ url('admin/status/update',$status->id) }}" method="POST">
                            @csrf
                            <div class="card-body row d-flex align-items-center">
                                <div class="form-group col-md-6  ">
                                    <label for="name">Status Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name',$status->name) }}"
                                        placeholder="Enter Name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <input type="hidden" name="posted_by" value="{{ $status->posted_by }}">
                                <div class="form-group col-md-6 ">
                                    <label for="display_name">Status Display Name <span class="text-danger">*</span></label>
                                    <input type="text" name="display_name" class="form-control" id="display_name" value="{{ old('display_name',$status->display_name) }}"
                                        placeholder="Enter Name">
                                    @error('display_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </div>

</div>

@include('backend.status.status_create')

@endsection
