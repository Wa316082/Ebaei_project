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
                        <h1>About Us</h1>
                    </div>

                    <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                        <h2>To know about our activities, field of expertise, our mission and vision as well as who we are. So stay with the best</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- worktext Section end -->

<!-- Aboutbody Section Start -->
<section id="Aboutbody">
    <div class="container clearfix">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="aboutskilltext clearfix">
                    <img src="{{ asset('landing/root/img/ap.jpg')}}">
                    <h2>Express Group & Associates</h2>
                    <p>The core of Express Group resides in the fact that it has always been and remain to this day a family owned companies. Express Group board consists of highly experienced Management staffs in Express Services, International Freight Forwarding, Warehousing and Logistics services in Bangladesh. Financial strength, credibility, strong relationship with liners, stakeholders and other agencies over the years have made Express Group one of the trusted industry partners.
                        <br/><br/>The express division of the Group has thrived more than 25 years with specialized expertise in managing and building products like (International Priority, IPF, IPD, IES & OBC including last mile delivery and pick-up services) through representing the leading Express brand like FedEx in Bangladesh until July 2017 <br/><br/>

                        The freight division, known as “Bangladesh Air Express International Limited (BAEI Cargo)” has been associated with international giants like Air Express International (AEI), Hellmann Worldwide Logistics for over 35 years collectively. Its highly trained support team in both Air & Sea freight operations has great experience and clear understanding of US and EU, security and safety standards such as CTPAT and European Security Compliances.
                        <br/><br/>55,000 sft of own Warehouse Management and value added services are managed by trained personnel in the related field including certified professionals. The Management understands the need for well-trained, competent and experienced work force and therefore has in place a Business Development team that understands and designs customized solutions for the customers and projects of all capacities.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Aboutbody Section End -->

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
                <div class="carousel slide media-carousel" data-ride="carousel" id="aboutmedia" data-interval="5000">

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

                    <a data-slide="prev" href="#aboutmedia" class="left carousel-control"><i class="fa fa-angle-left"></i></a>
                    <a data-slide="next" href="#aboutmedia" class="right carousel-control"><i class="fa fa-angle-right"></i></a>

                </div>

            </div><!-- /.col-xs-12 -->
        </div>
    </div><!-- /.container -->
</section>
<!-- groupbody Section end -->
@endsection
