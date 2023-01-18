@extends('layouts.auth_layout')
@section('title', 'Operations')
@section('admin_content')



    <div class="content-wrapper">

        <div class="content-header">

            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">


                        <div class="card">
                            <div class="card-header">
                                <h3>Gorup Entry</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('admin/order/bulkentry') }}" accept=".xls" class=""
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Upload Your CSV FIle</label>
                                        <input type="file" name="file" id="fileUpload" class="form-control col-md-6">

                                    </div>
                                    <div>
                                        <button type="submit" id="upload" class="btn btn-primary">Import</button>
                                    </div>
                                </form>

                            </div>
                        </div>


                    </div>




                </div>
            </div>
        </div>
    </div>













@endsection
