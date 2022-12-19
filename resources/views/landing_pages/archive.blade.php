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
                                <form method="post" action="#" accept-charset="UTF-8" role="form" class="form-horizontal">
                                <input name="_token" type="hidden" value="rbK4xMS2PMU7bQJfx36rr8dkBLiEsG02oREjPv7m">
                                <div class="aboutsliderbottombox">
                                    <div class="aboutsliderbottomfiled">
                                        <textarea class="form-control" rows="1" id="#" placeholder="Enter your tracking number(s)" name="hawbno"></textarea>
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
                                <h1>Group Archive</h1>
                            </div>

                            <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                                <h2>We are a well-known group of companies in Bangladesh. Specially we are highly experience in logistics, courier and cargo sectors. Its really challenging and mysterious journey from 1986, around 33 years of successful operation is not a joke.</h2>
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

                	<div class="col-sm-9">

                	    <div class="grouppicmain">
                	        <img src="{{ asset('landing/root/img/groupmain.jpg')}}">
                	    </div>

	                    <div class="text-left">

	                        <div class="sevicetextcontent sevicetextcontent_group">
	                            <h1>1986-1987</h1>

	                            <h2>BAEI became exclusive agent for Air Express International Inc. of USA in Bangladesh which was the start of the International Freight Forwarding and Logistic business<br/>Subsequent transformation to Private Limited Company</h2>

								<h1>1988-1991</h1>

	                            <h2>On Board Courier Service (OBC) between India and Bangladesh in co-operation with Blue Dart Express Ltd. In 1988 OBC division was registered as an independent company by the name of BAEI Express Ltd.</h2>

								<h1>1991-2017</h1>

	                            <h2>BAEI's former subsidiary, Bangladesh Express Co. Ltd, came in to franchisee agreement in 1991 with FedEx Express and severed the exclusive partner for FedEx IP (IP, IPF, IPD, IES ) product service provider in Bangladesh until July 2017.</h2>

								<h1>2000-2006</h1>

	                            <h2>BAEI starts its exclusive co-operation with Hellmann Worldwide Logistics Ltd, the worlds largest privately owned international freight forwarding and logistics service provider, from Germany <br/>BAEI started its own warehouse and quality inspection center for Garments at Gazipur, approx 22 km from Dhaka airport.</h2>

                                <h1>2008-2010</h1>

	                            <h2>Formation of Express Group of Companies<br/>Additional inspection facility custom built for Ken2 Logistics Bangladesh Ltd.</h2>

                                <h1>2013</h1>

	                            <h2>BAEI become free from obligation with Hellmann to start as an independent Freight Forwarding operation, after 3 years cooling period</h2>

	                            <h1>2018</h1>

	                            <h2>Dedicated 60,000sft CFS in Chittagong</h2>


	                        </div>
	                    </div>

                	</div>

                	<div class="col-sm-3">

                	    <div class="servicepicright">
                	        <img src="{{ asset('landing/root/img/groupright.png')}}">
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
                                <h1>Setisfied Clients</h1>

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
