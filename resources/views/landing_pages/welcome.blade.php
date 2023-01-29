@extends('landing_pages.common.landing_header')
@section('content')








        <!-- slider Section Start -->
        <section class="slider">
            <!-- Bootstrap bootstrap-touch-slider Slider Main Style Sheet -->
            <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

                <!-- Indicators -->
                <!-- <ol class="carousel-indicators">
                    <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                    <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
                </ol> -->

                <!-- Wrapper For Slides -->
                <div class="sliderleftcontent">
                    <img src="{{ asset('landing/root/img/car.png') }}">
                    <h1>Track your Shipment(s)</h1>
                    <p>Track upto 20 numbers (for best results) at a time separate by comma (,) or return (enter).</p>
                    <form method="post" action="{{ url('multiple/tracking') }}" class="form-horizontal">
                    @csrf

                    <div class="sliderbottombox">
                        <div class="sliderbottomfiled">
                            <textarea class="form-control" rows="2" id="#" placeholder="Enter your tracking number(s)" name="waybill_number"></textarea>
                        </div>
                        <div class="sliderbottomfiled">
                            <button type="submit" class="btn btn-outline-primary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="carousel-inner" role="listbox">

                    <!-- First Slide -->
                    <div class="item active">

                        <!-- Slide Background -->
                        <img src="{{ asset('landing/root/img/slider.jpg') }}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                        <div class="bs-slider-overlay"></div>

                        <div class="container">
                            <div class="row">
                                <!-- Slide Text Layer -->
                                     <div class="slide-text slide_style_left textleft">
                                        <h1 data-animation="animated fadeInLeft">ECOMMERCE<br> WHOLE LOGISTICS</h1>
                                        <p data-animation="animated fadeInLeft">Local and International</p>
                                            <a href="#"><button id="myBtn" data-animation="animated fadeInLeft" type="button" class="btn btn-default">Get a Quote</button></a>
                                    </div>


                            </div>
                        </div>
                    </div>
                    <!-- End of Slide -->

                    <!-- Second Slide -->
                    <div class="item">

                        <!-- Slide Background -->
                        <img src="{{ asset('landing/root/img/slider1.jpg') }}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                        <div class="bs-slider-overlay"></div>
                        <!-- Slide Text Layer -->
                             <div class="slide-text slide_style_left textleft">
                                <h1 data-animation="animated fadeInLeft">COURIER SERVICE <br> Local and International</h1>
                                <p data-animation="animated fadeInLeft">Your Local and International Courier Service</p>
                                    <a href="#"><button id="myBtn1" data-animation="animated fadeInLeft" type="button" class="btn btn-default">Get a Quote</button></a>
                            </div>
                    </div>
                    <!-- End of Slide -->

                    <!-- Third Slide -->
                    <div class="item">

                        <!-- Slide Background -->
                        <img src="{{ asset('landing/root/img/slider2.jpg') }}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                        <div class="bs-slider-overlay"></div>
                        <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_left textleft">
                                <h1 data-animation="animated fadeInLeft">FREIGHT <br> INTERNATIONAL </h1>
                                <p data-animation="animated fadeInLeft">One stop freight solution</p>
                                    <a href="#"><button id="myBtn2" data-animation="animated fadeInLeft" type="button" class="btn btn-default">Get a Quote</button></a>
                            </div>
                    </div>
                    <!-- End of Slide -->


                </div><!-- End of Wrapper For Slides -->

                <!-- Left Control -->
                <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <!-- Right Control -->
                <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> <!-- End  bootstrap-touch-slider Slider -->
        </section>
        <!-- slider Section end -->

        <!-- Services Section start -->
        <section class="Services">

            <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="servicetop">
                                <h1>Our Services</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="servicecontent">

                            <a href="#"><i class="fa fa-solid fa-globe"></i></a>
                            <h1>COURIER</h1>
                            <h3>WHOLE BANGLADESH</h3>

                            <div class="servicecontentview">
                                <a href="#"><h2>View Details</h2></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="servicecontent">

                            <a href="#"><i class="fa fa-solid fa-store"></i></a>
                            <h1>ECOMMERCE</h1>
                            <h3>WHOLE LOGISTICS</h3>

                            <div class="servicecontentview">
                                <a href="#"><h2>View Details</h2></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="servicecontent">

                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            <h1>FREIGHT</h1>
                            <h3>INTERNATIONAL</h3>

                            <div class="servicecontentview">
                                <a href="#"><h2>View Details</h2></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="servicecontent">

                            <a href="#"><i class="fa fa-solid fa-chart-line"></i></a>
                            <h1>INTERNATIONAL COURIER</h1>
                            <h3>SERVICE</h3>

                            <div class="servicecontentview">
                                <a href="#"><h2>View Details</h2></a>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!-- Services Section end -->

        <!-- middlebody Section Start -->
        <section id="middlebody">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2">

                        <div class="text-left">

                            <div class="skilltext clearfix">
                                <h2>Welcome Baei Express Limited</h2>
                                <p>BAEI Express, a concern of Express Group, now engaged in providing third party Domestic & International Courier & Cargo services and is in development for representing large Worldwide Express Brands. Since the Group has been associated with established Global Network agents offices and has thrived more than 25 years in managing and building products like (International Priority, IPF, IPD, IES & OBC including last mile delivery and pick-up services) through representing the global giant, FedEx Express in Bangladesh, until July 2017. OBC (Hand Carry by Air) service to & from India has been continuing since 1988. The Group entered in the logistics world with Air Express International Inc. in 1986.</p>
                                <div class="sofbtn">
                                    <a href="#"><button type="button" class="btn btn-outline-primary">Read More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- middlebody Section End -->

        <!-- grouptext Section Start -->
        <section class="grouptext">
            <div class="container clearfix">
                <div class="row">

                    <div class="text-center">

                        <div class="grouptextcontent">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h1>Group Archive</h1>

                                <h2>We are a well-known group of companies in Bangladesh. Specially we are highly experience in logistics, courier and cargo sectors. Thechallenging and mysterious journey from 1986, around 33 years of successful operation is not a joke.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- grouptext Section end -->


        <!-- button -->
        <!-- <div class="form-footer">
        <button type="submit" class="btn">Send Message</button></div> -->


        <!-- groupbody Section Start -->
        <section class="groupbody">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="carousel slide groupslide" data-ride="carousel" id="myCarousel" data-interval="7000">
                            <div class="carousel-inner">
                                <div class="item active">
                                        <ul style="margin: 0;">
                                            <li class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="groupbodytext">
                                                    <h1>1986</h1>
                                                    <a href="#"><img src="{{ asset('landing/root/img/g1.jpg') }}" alt=""></a>
                                                </div>
                                            </li>

                                            <li class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="groupbodytext">
                                                    <h1>1987</h1>
                                                    <a href="#"><img src="{{ asset('landing/root/img/g2.jpg') }}" alt=""></a>
                                                </div>
                                            </li>

                                            <li class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="groupbodytext">
                                                    <h1>1988</h1>
                                                    <a href="#"><img src="{{ asset('landing/root/img/g3.jpg') }}" alt=""></a>
                                                </div>
                                            </li>
                                        </ul>
                                </div><!-- /Slide1 -->

                                 <div class="item">
                                        <ul style="margin: 0;">

                                            <li class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="groupbodytext">
                                                    <h1>1991</h1>
                                                    <a href="#"><img src="{{ asset('landing/root/img/g4.jpg') }}" alt=""></a>
                                                </div>
                                            </li>

                                            <li class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="groupbodytext">
                                                    <h1>2000</h1>
                                                    <a href="#"><img src="{{ asset('landing/root/img/g5.jpg') }}" alt=""></a>
                                                </div>
                                            </li>

                                            <li class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="groupbodytext">
                                                    <h1>2006</h1>
                                                    <a href="#"><img src="{{ asset('landing/root/img/g6.jpg') }}" alt=""></a>
                                                </div>
                                            </li>
                                        </ul>
                                </div><!-- /Slide2 -->
                            </div>


                            <nav>
                                <ul class="control-box pager grouppager">
                                    <li><a data-slide="prev" href="#myCarousel" class=""><i class="fa fa-angle-left"></i></a></li>
                                    <li><a data-slide="next" href="#myCarousel" class=""><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </nav>
                           <!-- /.control-box -->
                        </div><!-- /#myCarousel -->
                    </div><!-- /.col-xs-12 -->
                </div>
            </div><!-- /.container -->
        </section>
        <!-- groupbody Section end -->

        <!-- Testimonials Section start -->
        <section class="Testimonials">
            <div class="container">
              <div class="row">
                <div class='col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-md-offset-1 col-md-offset-1 text-left'>
                <h2>Testimonials</h2>
                </div>
              </div>
              <div class='row'>
                <div class='col-md-12 col-sm-12 col-xs-12'>
                  <div class="carousel slide" data-ride="carousel" id="quote-carousel" data-interval="9000">
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                      <li data-target="#quote-carousel" data-slide-to="1"></li>
                      <li data-target="#quote-carousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner">

                      <!-- Quote 1 -->
                      <div class="item active">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <p>BAEI Express is really committed and excellent courier service provider. I am very impressed on them.
                              </p>
                              <h1>Md Moinuddin Ahamed</h1>
                              <h3>COO Websitesbd.com </h3>
                            </div>
                          </div>
                      </div>
                      <!-- Quote 2 -->
                      <div class="item">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <p>Last 10 years, I am with BAEI express. They never miss their commitment. I am hassle free for a long time with them.
                              </p>
                              <h1>Stephen</h1>
                              <h3>CEO. NBY</h3>
                            </div>
                          </div>
                      </div>
                      <!-- Quote 3 -->
                      <div class="item">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <p>Such a great job you have done, I am really impressed, Thanks BAEI team
                              </p>
                              <h1>Anna Lucifer</h1>
                              <h3>CEO. JIM Inc.</h3>
                            </div>
                          </div>
                      </div>

                        <!-- Carousel Buttons Next/Prev -->
                        <!-- <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a> -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <!-- Testimonials Section End -->

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
                                        <a href="#"><img alt="" src="{{ asset('landing/root/img/c1.jpg') }}"></a>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#"><img alt="" src="{{ asset('landing/root/img/c2.jpg') }}"></a>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#"><img alt="" src="{{ asset('landing/root/img/c3.jpg') }}"></a>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#"><img alt="" src="{{ asset('landing/root/img/c4.jpg') }}"></a>
                                    </div>

                                </div>
                              </div>

                              <div class="item ">
                                <div class="row">

                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#"><img alt="" src="{{ asset('landing/root/img/c5.jpg') }}"></a>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#"><img alt="" src="{{ asset('landing/root/img/c6.jpg') }}"></a>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#"><img alt="" src="{{ asset('landing/root/img/c7.jpg') }}"></a>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#"><img alt="" src="{{ asset('landing/root/img/c8.jpg') }}"></a>
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

        <!-- downloadapp Section Start -->
        <section id="downloadapp">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-4 col-sm-offset-3 col-xs-offset-3">

                        <div class="text-center">

                            <div class="downloadcontent">

                                    <h1>Download BAEI App</h1>

                                    <!-- <h2>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e</h2> -->

                                    <div class="downladgopic">
                                        <a href="#" target="_blank"><img src="{{ asset('landing/root/img/playstore.png') }}"></a>
                                        <!--<a href="#" target="_blank"><img src="{{ asset('landing/root/img/appstore.png') }}"></a>-->
                                    </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- downloadapp Section End -->


@endsection

