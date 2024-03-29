@extends('landing_pages.common.landing_header')
@section('content')
    <style type="text/css">
        div,

        h1,
        .clearfix {
            color: #555 !important;
        }

        .cd-signin-modal__block.js-signin-modal-block.cd-signin-modal__block--is-selected {
            padding: 2rem;
        }
    </style>
    <!-- baeslider Section Start -->
    <section class="baeslider">

        <img src="{{ asset('landing/root/img/bae.jpg') }}">
    </section>



    <!-- Tracking Section start -->
    <section class="tracking clearfix">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center ">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="trackingbody clearfix">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="trackingtop clearfix">
                                <h1>Track your Shipment</h1>
                                <!--<p>Fill out our online freight quote form so we can respond with our shipping options and rates.</p>-->
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 text-end">

                            <div class="trackingsliderleftcontent">
                                <h1>Track your SHIPMENT(S)</h1>
                                <p>Track upto 20 numbers (for best results) at a time separate by comma (,) or return
                                    (enter).</p>
                                <form method="post" action="#" accept-charset="UTF-8" role="form"
                                    class="form-horizontal">
                                    <div class="trackingsliderbottombox">
                                        <input name="_token" type="hidden"
                                            value="rVtTrSkCV3qSOFRsbmOhXNve8ylGhvQm1tXW3cc2">
                                        <div class="trackingsliderbottomfiled">
                                            <textarea name="hawbno" class="form-control" rows="" placeholder="Enter your tracking number(s)"></textarea>
                                        </div>
                                        <div class="trackingsliderbottomfiled">
                                            <button type="submit" class="btn btn-outline-primary"><i
                                                    class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                            </div>

                        </div>

                        @foreach ($collections as $collection  )

                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 60px;">



                            <div class="trackingmiddle clearfix">
                                @if($collection->lastStatus != null)
                                    <h1>Tracking ID: {{ $collection->lastStatus->order_waybill }}</h1>
                                @else
                                <h1>Tracking ID: {{ $collection->order->waybill_number }}</h1>

                                @endif
                            </div>

                            <div class="trackingmiddle1 clearfix">

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="trackingmiddle1left clearfix" style="margin-top:-30px;">
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
                                            <p>{{ Carbon\Carbon::parse($collection->delivered->status->posted_on)->format('D  d-m-Y') }} At
                                                {{ Carbon\Carbon::parse($collection->delivered->status->posted_on)->format('h:i -a') }}</p>
                                        @elseif($collection->lastStatus !=null)
                                            {{ $collection->lastStatus->status->name }}
                                            <p>
                                            {{ Carbon\Carbon::parse($collection->lastStatus->posted_on)->format('D  d-m-Y') }} At
                                            {{ Carbon\Carbon::parse($collection->lastStatus->posted_on)->format('h:i -a') }}
                                            </p>

                                        @else
                                         No Status yet

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
                                                                        <div class="trackinborder clearfix">
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
                        @endforeach
                    </div>

                </div>
            </div>
    </section>
@endsection
