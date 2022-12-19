@extends('landing_pages.common.landing_header')
@section('content')

<!-- baeslider Section Start -->
<section class="baeslider">
    <img src="{{ asset('landing/root/img/bae.jpg') }}">
 </section>
<!-- baeslider Section end -->

<!-- Tracking Section start -->
<section class="abouttracking clearfix">
    <div class="container">
        <div class="row">

            <div class="aboutsliderbottomcontent clearfix">

                <div class="col-md-4 col-sm-4 col-xs-3">
                    <div class="aboutsliderbottompic">
                        <img src="{{ asset('landing/root/img/car.png') }}">
                    </div>
                </div>


                <div class="col-md-8 col-sm-8 col-xs-9">
                    <div class="aboutsliderleftcontent">
                        <h1>Track your Shipment(s)</h1>
                        <p>Track upto 20 numbers (for best results) at a time separate by comma (,) or return (enter).</p>
                        <form method="post" action="https://baeiexpress.com/tracking" accept-charset="UTF-8" role="form" class="form-horizontal">
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
                        <h1>Contact Us</h1>
                    </div>

                    <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                        <h2>Contact our office addresses for any types of queries.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- worktext Section end -->

<!-- contact us Section start -->
<section class="contactbutoom clearfix">
      <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-6 col-sm-12 col-xs-12">

                    <div class="contactleft clearfix">

                    <div class="contactfrom">
                        <h2>Contact Us</h2>
                        <h1>* Required should fill.</h1>
                    </div>

                    <form>
                        <div class="col-md-12">
                            <div class="contactfiled">
                                <input type="text" class="form-control" placeholder="Name*">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="contactfiled">
                                  <input name="email" type="email" class="form-control" placeholder="Email*">
                              </div>
                        </div>

                        <div class="col-md-12">
                            <div class="contactfiled">
                                  <input name="phone" type="text" class="form-control" placeholder="Phone*">
                              </div>
                        </div>

                        <div class="col-md-12">
                            <div class="contactfiled">
                                  <input type="text" class="form-control" placeholder="Subject*">
                              </div>
                        </div>

                        <div class="col-md-12">
                            <div class="contactfiled">
                                  <textarea id="#" name="message"class="form-control"  placeholder="Message" rows="4"></textarea>
                              </div>
                        </div>

                        <div class="col-md-12">
                             <div class="contactbutoon">
                                  <button type="button" class="btn btn-outline-primary">Submit</button>
                              </div>
                        </div>

                    </form>
                    </div>
                  </div>

                <div class="col-md-4 col-sm-12 col-xs-12">

                    <div class="address1">

                        <h1>Corporate Office</h1>
                        <h2>14 Gausul Azam Avenue,<br>
                            Sector-13 Uttara Model Town<br>
                            Dhaka-1230</h2>
                    </div>

                    <div class="address1">

                         <h1>City Office / Hub</h1>
                        <h2>House-16, Road-10/A,<br>
                            Block-H, Banani, <br>
                            Dhaka-1213</h2>
                    </div>

                    <div class="address1">

                        <h1>Registered Office</h1>
                        <h2>95 Motijheel Commercial Area<br>
                            Dhaka-1000</h2>
                    </div>
                </div>
            </div>
        </div>
      </div>
</section>
<!-- contact Section End -->
@endsection
