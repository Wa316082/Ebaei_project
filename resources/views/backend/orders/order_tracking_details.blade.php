@extends('layouts.auth_layout')
@section('title', 'Details')
@section('admin_content')

<section class="tracking clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="trackingbody clearfix">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="trackingtop clearfix">
                            <h1>Track your Shipment</h1>
                            <!--<p>Fill out our online freight quote form so we can respond with our shipping options and rates.</p>-->
                        </div>
                    </div>



                    <div class="col-md-9 col-sm-12 col-xs-12" style="margin-bottom: 50px;">



                        <div class="trackingmiddle clearfix">
                            <h1>Tracking ID: {{ $collection->order->waybill_number }}</h1>
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

@endsection
