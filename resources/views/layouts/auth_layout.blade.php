<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Ebaei')</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    {{-- <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Toastr -->
    <link href="{{ asset('admin/dashbord/css/lib/toastr/toastr.min.css')}}" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="{{ asset('admin/dashbord/css/lib/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <!-- Range Slider -->
    <link href="{{ asset('admin/dashbord/css/lib/rangSlider/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/dashbord/css/lib/rangSlider/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
    <!-- Bar Rating -->
    <link href="{{ asset('admin/dashbord/css/lib/barRating/barRating.css')}}" rel="stylesheet">
    <!-- Nestable -->
    <link href="{{ asset('admin/dashbord/css/lib/nestable/nestable.css')}}" rel="stylesheet">
    <!-- JsGrid -->
    <link href="{{ asset('admin/dashbord/css/lib/jsgrid/jsgrid-theme.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('admin/dashbord/css/lib/jsgrid/jsgrid.min.css')}}" type="text/css')}}" rel="stylesheet" />
    <!-- Datatable -->
    <link href="{{ asset('admin/dashbord/css/lib/datatable/dataTables.bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('admin/dashbord/css/lib/data-table/buttons.bootstrap.min.css')}}" rel="stylesheet" />
    <!-- Calender 2 -->
    <link href="{{ asset('admin/dashbord/css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Weather Icon -->
    <link href="{{ asset('admin/dashbord/css/lib/weather-icons.css')}}" rel="stylesheet" />
    <!-- Owl Carousel -->
    <link href="{{ asset('admin/dashbord/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('admin/dashbord/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <!-- Select2 -->
    <link href="{{ asset('admin/dashbord/css/lib/select2/select2.min.css')}}" rel="stylesheet">

    <!-- Calender -->
    <link href="{{ asset('admin/dashbord/css/lib/calendar/fullcalendar.css')}}" rel="stylesheet" /> --}}


    <!-- Common -->

    <!-- Chartist -->
    <link href="{{ asset('admin/dashbord/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    {{-- font awesome icon link  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link href="{{ asset('admin/dashbord/css/lib/font-awesome.min.css')}}" rel="stylesheet"> --}}
    <link href="{{ asset('admin/dashbord/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/dashbord/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/dashbord/css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/dashbord/css/style.css')}}" rel="stylesheet">

    {{-- Coustom css  --}}

    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
</head>

<body>

    @include('layouts.auth_body.side_bar')
    @include('layouts.auth_body.top_bar')

    <div class="content-wrap">
        <div class="main">
            @yield('admin_content')
        </div>
    </div>


 {{-- botstrap min js  --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script> --}}

    <!-- Common -->
    {{-- <script src="{{ asset('admin/dashbord/js/lib/jquery.min.js')}}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="{{ asset('admin/dashbord/js/lib/jquery.nanoscroller.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/preloader/pace.min.js')}}"></script>
    {{-- <script src="{{ asset('admin/dashbord/js/lib/bootstrap.min.js')}}"></script> --}}
    <script src="{{ asset('admin/dashbord/js/scripts.js')}}"></script>

    <!--  Chartjs -->
    <script src="{{ asset('admin/dashbord/js/lib/chart-js/Chart.bundle.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/chart-js/chartjs-init.js')}}"></script>

    {{-- select-2 js --}}

    <script src="{{ asset('admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/select2.dist.min.js') }}"></script>

    {{-- datepeacker min js  --}}
    <script src="{{ asset('admin/js/bootstrap-datepicker.min.js') }}"></script>


    <!-- Calender -->
    {{-- <script src="{{ asset('admin/dashbord/js/lib/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/moment/moment.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/calendar/fullcalendar-init.js')}}"></script>

    <!--  Flot Chart -->
    <script src="{{ asset('admin/dashbord/js/lib/flot-chart/excanvas.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/flot-chart/jquery.flot.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/flot-chart/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/flot-chart/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/flot-chart/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/flot-chart/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/flot-chart/jquery.flot.crosshair.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/flot-chart/curvedLines.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/flot-chart/flot-chart-init.js')}}"></script>

    <!--  Chartist -->
    <script src="{{ asset('admin/dashbord/js/lib/chartist/chartist.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/chartist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/chartist/chartist-init.js')}}"></script>



    <!--  Knob -->
    <script src="{{ asset('admin/dashbord/js/lib/knob/jquery.knob.min.js ')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/knob/knob.init.js ')}}"></script>

    <!--  Morris -->
    <script src="{{ asset('admin/dashbord/js/lib/morris-chart/raphael-min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/morris-chart/morris.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/morris-chart/morris-init.js')}}"></script>

    <!--  Peity -->
    <script src="{{ asset('admin/dashbord/js/lib/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/peitychart/peitychart.init.js')}}"></script>

    <!--  Sparkline -->
    <script src="{{ asset('admin/dashbord/js/lib/sparklinechart/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/sparklinechart/sparkline.init.js')}}"></script>

    <!-- Select2 -->
    <script src="{{ asset('admin/dashbord/js/lib/select2/select2.full.min.js')}}"></script>

    <!--  Validation -->
    <script src="{{ asset('admin/dashbord/js/lib/form-validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/form-validation/jquery.validate-init.js')}}"></script>

    <!--  Circle Progress -->
    <script src="{{ asset('admin/dashbord/js/lib/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/circle-progress/circle-progress-init.js')}}"></script>

    <!--  Vector Map -->
    <script src="{{ asset('admin/dashbord/js/lib/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/vector-map/country/jquery.vmap.algeria.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/vector-map/country/jquery.vmap.argentina.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/vector-map/country/jquery.vmap.brazil.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/vector-map/country/jquery.vmap.france.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/vector-map/country/jquery.vmap.germany.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/vector-map/country/jquery.vmap.greece.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/vector-map/country/jquery.vmap.iran.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/vector-map/country/jquery.vmap.iraq.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/vector-map/country/jquery.vmap.russia.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/vector-map/country/jquery.vmap.tunisia.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/vector-map/country/jquery.vmap.europe.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/vector-map/country/jquery.vmap.usa.js')}}"></script>

    <!--  Simple Weather -->
    <script src="{{ asset('admin/dashbord/js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/weather/weather-init.js')}}"></script>

    <!--  Owl Carousel -->
    <script src="{{ asset('admin/dashbord/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>

    <!--  Calender 2 -->
    <script src="{{ asset('admin/dashbord/js/lib/calendar-2/moment.latest.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/calendar-2/pignose.init.js')}}"></script>


    <!-- Datatable -->
    <script src="{{ asset('admin/dashbord/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/data-table/buttons.dataTables.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/data-table/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/data-table/datatables-init.js')}}"></script>

    <!-- JS Grid -->
    <script src="{{ asset('admin/dashbord/js/lib/jsgrid/db.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/jsgrid/jsgrid.core.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/jsgrid/jsgrid.load-indicator.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/jsgrid/jsgrid.load-strategies.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/jsgrid/jsgrid.sort-strategies.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/jsgrid/jsgrid.field.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/jsgrid/fields/jsgrid.field.text.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/jsgrid/fields/jsgrid.field.number.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/jsgrid/fields/jsgrid.field.select.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/jsgrid/fields/jsgrid.field.checkbox.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/jsgrid/fields/jsgrid.field.control.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/jsgrid/jsgrid-init.js')}}"></script>

    <!--  Datamap -->
    <script src="{{ asset('admin/dashbord/js/lib/datamap/d3.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/datamap/topojson.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/datamap/datamaps.world.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/datamap/datamap-init.js')}}"></script>

    <!--  Nestable -->
    <script src="{{ asset('admin/dashbord/js/lib/nestable/jquery.nestable.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/nestable/nestable.init.js')}}"></script>

    <!--ION Range Slider JS-->
    <script src="{{ asset('admin/dashbord/js/lib/rangeSlider/ion.rangeSlider.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/rangeSlider/moment.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/rangeSlider/moment-with-locales.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/rangeSlider/rangeslider.init.js')}}"></script>

    <!-- Bar Rating-->
    <script src="{{ asset('admin/dashbord/js/lib/barRating/jquery.barrating.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/barRating/barRating.init.js')}}"></script>

    <!-- jRate -->
    <script src="{{ asset('admin/dashbord/js/lib/rating1/jRate.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/rating1/jRate.init.js')}}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('admin/dashbord/js/lib/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/sweetalert/sweetalert.init.js')}}"></script>

    <!-- Toastr -->
    <script src="{{ asset('admin/dashbord/js/lib/toastr/toastr.min.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/lib/toastr/toastr.init.js')}}"></script> --}}


    <!--  Dashboard 1 -->
    {{-- <script src="{{ asset('admin/dashbord/js/dashboard1.js')}}"></script>
    <script src="{{ asset('admin/dashbord/js/dashboard2.js')}}"></script> --}}

    <script>
        $(document).ready(function () {


          $('.select2-single').select2();

          // Select2 Single  with Placeholder
          $('.select2-single-placeholder').select2({
            placeholder: "Select a Province",
            allowClear: true
          });

          // Select2 Multiple
          $('.select2-multiple').select2();

          // Bootstrap Date Picker
          $('#simple-date1 .input-group.date').datepicker({
            format: 'dd/mm/yyyy',
            todayBtn: 'linked',
            todayHighlight: true,
            autoclose: true,
          });

          $('#simple-date2 .input-group.date').datepicker({
            startView: 1,
            format: 'dd/mm/yyyy',
            autoclose: true,
            todayHighlight: true,
            todayBtn: 'linked',
          });

          $('#simple-date3 .input-group.date').datepicker({
            startView: 2,
            format: 'dd/mm/yyyy',
            autoclose: true,
            todayHighlight: true,
            todayBtn: 'linked',
          });

          $('#simple-date4 .input-daterange').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true,
            todayHighlight: true,
            todayBtn: 'linked',
          });

          // TouchSpin

          $('#touchSpin1').TouchSpin({
            min: 0,
            max: 100,
            boostat: 5,
            maxboostedstep: 10,
            initval: 0
          });

          $('#touchSpin2').TouchSpin({
            min:0,
            max: 100,
            decimals: 2,
            step: 0.1,
            postfix: '%',
            initval: 0,
            boostat: 5,
            maxboostedstep: 10
          });

          $('#touchSpin3').TouchSpin({
            min: 0,
            max: 100,
            initval: 0,
            boostat: 5,
            maxboostedstep: 10,
            verticalbuttons: true,
          });

          $('#clockPicker1').clockpicker({
            donetext: 'Done'
          });

          $('#clockPicker2').clockpicker({
            autoclose: true
          });

          let input = $('#clockPicker3').clockpicker({
            autoclose: true,
            'default': 'now',
            placement: 'top',
            align: 'left',
          });

          $('#check-minutes').click(function(e){
            e.stopPropagation();
            input.clockpicker('show').clockpicker('toggleView', 'minutes');
          });

        });
      </script>


</body>

</html>
