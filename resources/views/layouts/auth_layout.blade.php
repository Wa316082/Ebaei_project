<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Ebaie')</title>


    {{-- third party css  --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    {{-- Bootstrap Link  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/jqvmap/jqvmap.min.css') }}">

    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet"
        href="{{ asset('admin/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/summernote/summernote-bs4.min.css') }}">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/bs-stepper/css/bs-stepper.min.css') }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet"
        href="{{ asset('admin/assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->

    <!-- dropzonejs -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/dropzone/min/dropzone.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

</head>


<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed" data-panel-auto-height-mode="height">

    <div class="wrapper">
        @include('layouts.auth_body.top_bar')
        @include('layouts.auth_body.side_bar')

        @yield('admin_content')

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->

    {{-- third party scripts --}}
    {{-- jquery cdn  --}}
    <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    {{-- <script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script> --}}



    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin/assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/js/demo.js') }}"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{ asset('admin/assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <!-- InputMask -->
    {{-- <script src="{{ asset('admin/asset/plugins/moment/moment.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/asset/plugins/inputmask/jquery.inputmask.min.js') }}"></script> --}}

    <!-- ChartJS -->
    <script src="{{ asset('admin/assets/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('admin/assets/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('admin/assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('admin/assets/plugins/select2/js/select2.full.min.js') }}"></script>
    {{-- Date rangepeacker  --}}
    <script src="{{ asset('admin/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- bootstrap color picker -->
    <script src="{{ asset('admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    {{-- jquery knob --}}
    <script src="{{ asset('admin/assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- BS-Stepper -->
    <script src="{{ asset('admin/assets/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>

    <script src="{{ asset('admin/assets/plugins/moment/moment.min.js') }}"></script>

    <!-- dropzonejs -->
    <script src="{{ asset('admin/assets/plugins/dropzone/min/dropzone.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <!-- Summernote -->
    <script src="{{ asset('admin/assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    {{-- Bootstrap sccripts link  --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>


    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

        })

        // $('#demo').daterangepicker(
        //     //     {

        //     //     "startDate": new Date() ,
        //     //     "endDate": new Date()
        //     // },
        //     function(start, end,label) {
        //         // console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format(
        //         //     'YYYY-MM-DD') + ' (predefined range: ' + label + ')');
        //     });

        $(function() {

            $('#demo').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                }
            });

            $('#demo').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format(
                    'MM/DD/YYYY'));
            });

            $('#demo').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });

        });
    </script>


    @yield('scripts')


</body>

</html>
