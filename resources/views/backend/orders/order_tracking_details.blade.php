@extends('layouts.auth_layout')
@section('title','Details')
@section('admin_content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <div class="content-header">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Remarks</th>
                        <th>Posted On</th>
                        <th>Posted By</th>
                        <th>Status</th>

                      </tr>
                      </thead>
                      <tbody>



                        @foreach ($histories as $history )
                      <tr>
                        <td>{{ $history->remarks }}</td>
                        <td>{{ Carbon\Carbon::parse($history->posted_on)->format('D-Y-m-d h:i -a') }}</td>
                        <td>{{ $history->posted_by }}</td>
                        <td>{{ $history->status->name }}</td>

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
