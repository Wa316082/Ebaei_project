<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>BAEI EXPRESS LIMITED | HOME</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="{{ asset('landing/root/img/favicon.png')}}"/>

        <!-- CDN JS File start -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <!--
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
        <!-- <link  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="all"> -->
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all"> -->
        <!-- CDN JS File end -->

        <!-- login Registration css start -->
        <link rel="stylesheet" href="{{ asset('landing/root/css/reset.css') }}"> <!-- CSS reset -->
        <link rel="stylesheet" href="{{ asset('landing/root/css/loginstyle.css') }}">  <!--Resource style -->
        <link rel="stylesheet" href="{{ asset('landing/root/css/demo.css') }}"> <!-- Demo style -->
        <!-- login Registration css end -->

        <!-- Primary JS File start -->
        <!-- Place favicon.ico in the landing/root directory -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        {{-- <link rel="stylesheet" href="{{ asset('landing/root/css/font-awesome.min.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('landing/root/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('landing/root/css/build.css') }}">
        <link rel="stylesheet" href="{{ asset('landing/root/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('landing/root/css/style.css') }}">
        <link href="{{ asset('landing/root/css/tracking.css') }}" rel="stylesheet" >
        <link href="{{ asset('landing/root/css/bootstrap-touch-slider.css') }}" rel="stylesheet" >
        <!-- Primary JS File end -->
    </head>
    <body>








    <!-- Tracking Section start -->
    <section class="tracking clearfix">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 ">

                    <div class="trackingbody clearfix">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="trackingtop clearfix">
                                <h1>Track your Shipment</h1>
                                <!--<p>Fill out our online freight quote form so we can respond with our shipping options and rates.</p>-->
                            </div>
                        </div>



                        <div class="col-md-12 col-sm-12 col-xs-12" >



                            <div class="trackingmiddle clearfix">
                                <h1>Tracking ID: {{ $collection->order->waybill_number }}</h1>
                            </div>

                            <div class="trackingmiddle1 clearfix">

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="trackingmiddle1left clearfix" style="">
                                        <h1>Origin: <strong>
                                                BNI
                                            </strong></h1>
                                    </div>
                                </div>

                                <!--<div class="col-md-4 col-sm-4 col-xs-12" style="background:#f00;padding:0px !important;margin:0px;"></div>-->

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="trackingmiddle1right clearfix" style="margin-top:-30px;">
                                        <h1>Destination: <strong>
                                                CCU
                                            </strong></h1>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top:15px;">
                                <div class="col-xs-1"></div>
                                <ul class="nav nav-pills nav-wizard col-xs-10">
                                    <li class=" active-div">
                                        <a class="hidden-xs">&nbsp;</a>
                                        <div class="nav-arrow"></div>
                                    </li>

                                    <li
                                        class="@if ($collection->count >= 3) active-div @elseif($collection->delivered != null) active-div @endif">
                                        <div class="nav-wedge"></div>
                                        <a class="hidden-xs">&nbsp;</a>
                                        <div class="nav-arrow"></div>
                                    </li>
                                    <li
                                        class="@if ($collection->count >= 3) active-div @elseif($collection->delivered != null) active-div @endif">
                                        <div class="nav-wedge"></div>
                                        <a class="hidden-xs">&nbsp;</a>
                                        <div class="nav-arrow"></div>
                                    </li>
                                    <li class="@if ($collection->delivered != null) active-div @endif">
                                        <div class="nav-wedge"></div>
                                        <a class="hidden-xs">&nbsp;</a>
                                        <div class="nav-arrow"></div>
                                    </li>
                                    <li class="@if ($collection->delivered != null) active-div @endif">
                                        <div class="nav-wedge"></div>
                                        <a class="hidden-xs">&nbsp;</a>
                                    </li>
                                </ul>
                                <div class="col-xs-1"></div>
                            </div>


                            <div class="text-center">
                                <h1 style="font-size:20px; ">
                                    <label class="@if ($collection->delivered != null) text-danger @endif">
                                        @if ($collection->delivered != null)
                                            {{ $collection->delivered->status->name }}
                                            <p>{{ Carbon\Carbon::parse($collection->delivered->status->posted_on)->format('D  d-m-Y') }}
                                                At
                                                {{ Carbon\Carbon::parse($collection->delivered->status->posted_on)->format('h:i -a') }}
                                            </p>
                                        @elseif($collection->lastStatus != null)
                                            {{ $collection->lastStatus->status->name }}
                                            <p>
                                                {{ Carbon\Carbon::parse($collection->lastStatus->posted_on)->format('D  d-m-Y') }}
                                                At
                                                {{ Carbon\Carbon::parse($collection->lastStatus->posted_on)->format('h:i -a') }}
                                            </p>
                                        @else
                                            No Status yet, It may be manifested currently !
                                        @endif
                                    </label>

                                </h1>
                            </div>


                            <div class="trackingmiddle2 clearfix">
                                <!--
                                                                                                <div class="col-md-3 col-sm-4 col-xs-4">
                                                                                                    <div class="trackingmiddle1left1 clearfix">
                                                                                                        <h2>Delivered :</h2>
                                                                                                        <h1>
                                                                                                                                                                    Signed for by: <strong> seal</strong>
                                                                                                                                                            </h1>
                                                                                                    </div>
                                                                                                </div>
                                                                                                -->
                                <div class="col-sm-6 col-xs-6">
                                    <div class="trackingmiddle1left1 clearfix">
                                        <h2><i class="fa fa-paper-plane" style="color: #78b107;margin-right: 5px;"></i> From
                                        </h2>
                                        <h1>
                                            {{ $collection->order->zone->name }},

                                            {{ $collection->order->country->name }}
                                        </h1>
                                    </div>
                                </div>
                                <!--
                                                                                                <div class="col-sm-6 col-xs-12">
                                                                                                    <div class="trackinbcollection->order clearfix">
                                                                                                    </div>
                                                                                                </div>
                                                                                                -->

                                <div class="col-sm-6 col-xs-6">
                                    <div class="trackingmiddle1left1 clearfix" style="text-align: right;">
                                        <h2><i class="fa fa-map-marker" style="color: #78b107;margin-right: 5px;"></i> To
                                        </h2>
                                        <h1>
                                            {{ $collection->order->reciever_zone->name }},

                                            {{ $collection->order->reciever_country->name }}
                                        </h1>
                                    </div>
                                </div>
                            </div>

                            <div class="shiphis clearfix">


                                <div class="shiphisleftheader clearfix">
                                    <h1><i class="fa fa-file-text" style="color: #78b107;margin-right: 5px;"></i> Shipment
                                        Details</h1>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="shiphisleftcontent clearfix">
                                        <table>
                                            <tr>
                                                <th>Weight:</th>
                                                <td>{{ $collection->order->final_weight }}</td>
                                            </tr>

                                            <tr>
                                                <th>Total Pieces:</th>
                                                <td>{{ $collection->order->pieces }}</td>
                                            </tr>


                                        </table>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="shiphisleftcontent clearfix">
                                        <table>

                                        </table>
                                    </div>
                                </div>

                            </div>


                            <div class="trackingmiddle3 clearfix">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="trackingmiddle1left2 clearfix">
                                        <h1><i class="fa fa-tree" style="color: #78b107"></i> <strong>
                                                Shipment History</strong></h1>
                                    </div>
                                </div>
                            </div>

                            <table class="table">
                                <thead class="" style="background-color: #78b107">
                                    <tr>
                                        <th style="color: white">Dtae and Time:</th>
                                        <th style="color: white">Location</th>
                                        <th style="color: white">Status</th>
                                    </tr>
                                </thead>

                                <tbody class="trackingmiddle4 clearfix ">
                                    @foreach ($collection->histories as $history)
                                        <tr class="">
                                            <td class="trackingmiddle3 clearfix">

                                                {{ Carbon\Carbon::parse($history->posted_on)->format('D-Y-m-d') }} <br> At
                                                {{ Carbon\Carbon::parse($history->posted_on)->format('h:i -a') }}


                                            </td>
                                            <td class="trackingmiddle3 clearfix">

                                                {{ Carbon\Carbon::parse($history->posted_on)->format('D-Y-m-d') }} <br> At
                                                {{ Carbon\Carbon::parse($history->posted_on)->format('h:i -a') }}


                                            </td>
                                            <td class="trackingmiddle3 clearfix">

                                                {{ $history->status->name }}


                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>
            </div>
    </section>

    <script src="{{ asset('landing/root/js/placeholders.min.js') }}"></script> <!-- polyfill for the HTML5 placeholder attribute -->
<script src="{{ asset('landing/root/js/loginmain.js') }}"></script> <!-- Resource JavaScript -->
<!-- login Registration js end -->

<!-- Primary JS File start -->
<script src="{{ asset('landing/root/js/jquery.min.js') }}"></script>
<script src="{{ asset('landing/root/js/bootstrap.min.js') }}"></script>

<!-- Bootstrap bootstrap-touch-slider Slider Main JS File start -->
<script src="{{ asset('landing/root/js/bootstrap-touch-slider.js') }}"></script>

<script type="text/javascript">
    $('#bootstrap-touch-slider').bsTouchSlider();
</script>
<!-- Bootstrap bootstrap-touch-slider Slider Main JS File end-->

<script src="{{ asset('landing/root/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('landing/root/js/scrolltotop.js') }}"></script>
<script src="{{ asset('landing/root/js/getmodel.js') }}"></script>
<script src="{{ asset('landing/root/js/plugins.js') }}"></script>
<script src="{{ asset('landing/root/js/main.js') }}"></script>
<!--Primary JS File end -->
</body>

</html>
