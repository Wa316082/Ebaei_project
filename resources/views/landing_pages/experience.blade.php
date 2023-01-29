@extends('landing_pages.common.landing_header')
@section('content')

        <!-- baeslider Section Start -->
        <section class="baeslider">
            <img src="{{ asset('landing/root/img/bae.jpg')}}">
         </section>
        <!-- baeslider Section end -->

        <!-- Tracking Section start -->
        <section class="abouttracking clearfix">
            <div class="container">
                <div class="row">

                    <div class="aboutsliderbottomcontent clearfix">

                        <div class="col-md-4 col-sm-4 col-xs-3">
                            <div class="aboutsliderbottompic">
                                <img src="{{ asset('landing/root/img/car.png')}}">
                            </div>
                        </div>


                        <div class="col-md-8 col-sm-8 col-xs-9">
                            <div class="aboutsliderleftcontent">
                                <h1>Track your Shipment(s)</h1>
                                <p>Track upto 20 numbers (for best results) at a time separate by comma (,) or return (enter).</p>
                                <form method="post" action="{{ url('multiple/tracking') }}" class="form-horizontal">
                                    @csrf
                                    <div class="aboutsliderbottombox">
                                    <div class="aboutsliderbottomfiled">
                                        <textarea class="form-control" rows="1" id="#" placeholder="Enter your tracking number(s)" name="waybill_number"></textarea>
                                    </div>
                                    <div class="aboutsliderbottomfiled">
                                        <button type="submit" class="btn btn-outline-primary"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tracking Section End -->

        <!-- worktext Section Start -->
        <section class="worktext">
            <div class="container clearfix">
                <div class="row">

                    <div class="text-center">

                        <div class="worktextcontent">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h1>Group Products & Services Experience</h1>
                            </div>

                            <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                                <h2>We are a highly experienced group of companies on courier and logistics service provider business specially on courier, express, logistics, cargo and freight forwarding area.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- worktext Section end -->

        <!-- sevice Section Start -->
        <section class="sevice">
            <div class="container clearfix">
                <div class="row">

                	<div class="col-sm-5">

                	        <div class="sevicetextcontent">
	                            <h1>As International Freight Forwarder</h1>

	                            <div class="sevicetextcontentist">
	                                <h6>Air Freight</h6>
                                    <ul class="experiencelist">
                                        <li><i class="fa fa-chevron-right"></i>Consolidation</li>
                                        <li><i class="fa fa-chevron-right"></i>IATA direct loading</li>
                                        <li><i class="fa fa-chevron-right"></i>Full and partial charters</li>
                                        <li><i class="fa fa-chevron-right"></i>Short-term warehousing </li>
                                        <li><i class="fa fa-chevron-right"></i>Palletization</li>
                                    </ul>

                                    <h6>Sea Freight</h6>
                                    <ul class="experiencelist">
                                        <li><i class="fa fa-chevron-right"></i>Full project co-ordination</li>
                                        <li><i class="fa fa-chevron-right"></i>Door-to-door service for LCL and FCL</li>
                                        <li><i class="fa fa-chevron-right"></i>Buyer’s consolidation</li>
                                        <li><i class="fa fa-chevron-right"></i>Warehousing and storage</li>
                                        <li><i class="fa fa-chevron-right"></i>Export packaging</li>
                                        <li><i class="fa fa-chevron-right"></i>Documentation services</li>
                                    </ul>

                                    <h6>Sea - Air Freight</h6>
                                    <ul class="experiencelist">
                                        <li><i class="fa fa-chevron-right"></i>Intermodal transport system </li>
                                        <li><i class="fa fa-chevron-right"></i>Offer the best routes to meet deadlines</li>
                                        <li><i class="fa fa-chevron-right"></i>Use selected and most reliable carriers</li>
                                        <li><i class="fa fa-chevron-right"></i> Customised sea-air solution</li>
                                    </ul>

                                    <h6>Warehouse Operation</h6>
                                    <ul class="experiencelist">
                                        <li><i class="fa fa-chevron-right"></i>Storage operation</li>
                                        <li><i class="fa fa-chevron-right"></i>Quality Controls Services </li>
                                        <li><i class="fa fa-chevron-right"></i>Sample picking for QC operation</li>
                                        <li><i class="fa fa-chevron-right"></i>Truck coordination</li>
                                        <li><i class="fa fa-chevron-right"></i>In/Out Truck loading & unloading</li>
                                    </ul>
                                </div>
                            </div>
	                </div>

	                <div class="col-sm-4">

                	    <div class="sevicetextcontent">


								<h1>As Outsourced Service Provider</h1>

	                            <div class="sevicetextcontentist">
                                    <h6>Airport Handling Operation</h6>
                                    <ul class="experiencelist">
                                        <li><i class="fa fa-chevron-right"></i>ULD Buildup </li>
                                        <li><i class="fa fa-chevron-right"></i>Garments on Hanger (GOH)</li>
                                        <li><i class="fa fa-chevron-right"></i> Over-Sized cargo</li>
                                        <li><i class="fa fa-chevron-right"></i>Palletization</li>
                                        <li><i class="fa fa-chevron-right"></i>Special packaging</li>
                                    </ul>

                                    <h6>Customs Brokerage</h6>
                                    <ul class="experiencelist">
                                        <li><i class="fa fa-chevron-right"></i>Total Customs support service</li>
                                        <li><i class="fa fa-chevron-right"></i>Faster clearance and delivery</li>
                                        <li><i class="fa fa-chevron-right"></i>Handle diplomatic bags </li>
                                        <li><i class="fa fa-chevron-right"></i>Documentation compliance for project cargo</li>
                                        <li><i class="fa fa-chevron-right"></i>Hassel free</li>
                                        <li><i class="fa fa-chevron-right"></i>Web base tracking</li>
                                    </ul>

                                    <h6>CFS Operation</h6>
                                    <ul class="experiencelist">
                                        <li><i class="fa fa-chevron-right"></i>Dry & Reefer container stuffing</li>
                                        <li><i class="fa fa-chevron-right"></i>Garments on Hanger (GOH)</li>
                                        <li><i class="fa fa-chevron-right"></i>Over-Sized cargo handling</li>
                                        <li><i class="fa fa-chevron-right"></i>Palletization</li>
                                        <li><i class="fa fa-chevron-right"></i>Special packaging</li>
                                    </ul>

                                    <h6>Facility & Equipment Leasing</h6>
                                    <ul class="experiencelist">
                                        <li><i class="fa fa-chevron-right"></i>Office space, furniture & equipment facilitation</li>
                                        <li><i class="fa fa-chevron-right"></i>Inspection facility</li>
                                        <li><i class="fa fa-chevron-right"></i>Warehouse rental service </li>
                                        <li><i class="fa fa-chevron-right"></i>Car & Truck rental service</li>
                                        <li><i class="fa fa-chevron-right"></i>Heavy equipment service</li>
                                    </ul>

                                </div>
	                        </div>
	                </div>

	                <div class="col-sm-3">

                	    <div class="servicepicright">
                	        <img src="{{ asset('landing/root/img/sisters.png')}}">
                	    </div>

	                </div>
                </div>
            </div>
        </section>
        <!-- sevice Section end -->

        <!-- clienttext Section Start -->
        <section class="clienttext">
            <div class="container clearfix">
                <div class="row">

                    <div class="text-center">

                        <div class="clienttextcontent">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h1>Satisfied Clients</h1>

                                <h2>We always try to serve our best for our clients. Here are some of our satisfied clients.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- clienttext Section end -->

        <!-- groupbody Section Start -->
        <section class="clientbody">
            <div class="container">
                <div class='row'>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="carousel slide media-carousel" data-ride="carousel" id="media" data-interval="5000">

                            <div class="carousel-inner">

                              <div class="item  active">
                                <div class="row">

                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#"><img alt="" src="{{ asset('landing/root/img/c1.jpg')}}"></a>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#"><img alt="" src="{{ asset('landing/root/img/c2.jpg')}}"></a>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#"><img alt="" src="{{ asset('landing/root/img/c3.jpg')}}"></a>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#"><img alt="" src="{{ asset('landing/root/img/c4.jpg')}}"></a>
                                    </div>

                                </div>
                              </div>

                              <div class="item ">
                                <div class="row">

                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#"><img alt="" src="{{ asset('landing/root/img/c5.jpg')}}"></a>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#"><img alt="" src="{{ asset('landing/root/img/c6.jpg')}}"></a>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#"><img alt="" src="{{ asset('landing/root/img/c7.jpg')}}"></a>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#"><img alt="" src="{{ asset('landing/root/img/c8.jpg')}}"></a>
                                    </div>

                                </div>
                              </div>

                            </div>

                            <a data-slide="prev" href="#media" class="left carousel-control"><i class="fa fa-angle-left"></i></a>
                            <a data-slide="next" href="#media" class="right carousel-control"><i class="fa fa-angle-right"></i></a>

                        </div>

                    </div><!-- /.col-xs-12 -->
                </div>
            </div><!-- /.container -->
        </section>
        <!-- groupbody Section end -->

@endsection
