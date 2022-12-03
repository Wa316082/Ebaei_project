@extends('layouts.auth_layout')
@section('title','Dashboard')
@section('admin_content')
<section id="main-content">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-title">
            <h4>Yearly Sales </h4>

          </div>
          <div class="sales-chart">
            <canvas id="sales-chart"></canvas>
          </div>
        </div>
      </div>
      <!-- /# column -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-title">
            <h4>Team Total Completed </h4>

          </div>
          <div class="sales-chart">
            <canvas id="team-chart"></canvas>
          </div>
        </div>
        <!-- /# card -->
      </div>
      <!-- /# column -->
    </div>


    

</section>
@endsection
