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
                        <h1>Our Services</h1>
                    </div>

                    <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                        <h2>We have different kinds of services for our multiple types of customers. Here are some of our services to provide our customers for best services. </h2>
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
                        <h1>International Courier Service</h1>

                        <div class="sevicetextcontentist">
                            <ul>
                                <li><i class="fa fa-chevron-right"></i>Pick-up & Delivery for Door to Door service</li>
                                <li><i class="fa fa-chevron-right"></i>Use faster route/service of renowned networks</li>
                                <li><i class="fa fa-chevron-right"></i>Customs clearance service</li>
                                <li><i class="fa fa-chevron-right"></i>Parcel packaging and warehousing</li>
                                <li><i class="fa fa-chevron-right"></i>Most competitive pricing</li>
                                <li><i class="fa fa-chevron-right"></i>Global coverage and networks</li>
                                <li><i class="fa fa-chevron-right"></i>Flexible pickup times</li>
                                <li><i class="fa fa-chevron-right"></i>Critical shipment handling</li>
                                <li><i class="fa fa-chevron-right"></i>365 days customer service</li>
                                <li><i class="fa fa-chevron-right"></i>Web base Tracking & POD</li>
                            </ul>
                        </div>

                        <h1>Logistic Solutions for e-Commerce</h1>

                        <div class="sevicetextcontentist">
                            <ul>
                                <li><i class="fa fa-chevron-right"></i>First Mile Pick up</li>
                                <li><i class="fa fa-chevron-right"></i> Last Mile Delivery</a></li>
                                <li><i class="fa fa-chevron-right"></i>Fulfillment Services</a></li>
                                <li><i class="fa fa-chevron-right"></i>Pan Bangladesh Network</a></li>
                                <li><i class="fa fa-chevron-right"></i>Cross Border Air/Sea/Road</a></li>
                                <li><i class="fa fa-chevron-right"></i> International Trading (IOR/EOR) </a></li>
                            </ul>
                        </div>

                    </div>
            </div>

            <div class="col-sm-4">

                <div class="sevicetextcontent">


                        <h1>Onboard Cuorier (OBC) Service</h1>

                        <div class="sevicetextcontentist">
                            <ul>
                                <li><i class="fa fa-chevron-right"></i>Pioneer in OBC service (BD-IN) since 1988</li>
                                <li><i class="fa fa-chevron-right"></i>Every alternative day Hand Carry by Air</li>
                                <li><i class="fa fa-chevron-right"></i>Additional/Special/Urgent flight on demand</li>
                                <li><i class="fa fa-chevron-right"></i>Next day delivery to major cities</li>
                                <li><i class="fa fa-chevron-right"></i>Inbound Customs clearance support</li>
                                <li><i class="fa fa-chevron-right"></i>Door to Door service, no hidden charges</li>
                                <li><i class="fa fa-chevron-right"></i>Special Service for medical doc or sample</li>
                                <li><i class="fa fa-chevron-right"></i>Travel Doc (Passport/Visa) with proper permission</li>
                                <li><i class="fa fa-chevron-right"></i>Messenger service</li>
                                <li><i class="fa fa-chevron-right"></i>Web base tracking & hard copy POD</li>
                            </ul>
                        </div>

                        <h1>Value Added Services</h1>

                        <div class="sevicetextcontentist">
                            <ul>
                                <li><i class="fa fa-chevron-right"></i>Specialized support for critical shipments </a></li>
                                <li><i class="fa fa-chevron-right"></i>NOC, Export Permit, Import Permit, CO etc</a></li>
                                <li><i class="fa fa-chevron-right"></i>Customs support service </a></li>
                                <li><i class="fa fa-chevron-right"></i>Holiday Delivery on demand</a></li>
                                <li><i class="fa fa-chevron-right"></i> Export against import </a></li>
                                <li><i class="fa fa-chevron-right"></i>Tailor-made transport and logistics solution </a></li>
                            </ul>
                        </div>

                    </div>
            </div>

            <div class="col-sm-3">

                <div class="servicepicright">
                    <img src="{{ asset('landing/root/img/servicepicright.png')}}">
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
                <div class="carousel slide media-carousel" data-ride="carousel" id="servicemedia" data-interval="5000">

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

                    <a data-slide="prev" href="#servicemedia" class="left carousel-control"><i class="fa fa-angle-left"></i></a>
                    <a data-slide="next" href="#servicemedia" class="right carousel-control"><i class="fa fa-angle-right"></i></a>

                </div>

            </div><!-- /.col-xs-12 -->
        </div>
    </div><!-- /.container -->
</section>
<!-- groupbody Section end -->
@endsection
