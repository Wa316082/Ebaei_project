<!-- header Section Start -->
<nav class="navbar navbar-default sticker" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand logo" href="#"><img src="{{ asset('landing/root/img/baemainlogo.png') }}" alt=""></a>
        <a class="navbar-brand logonext" href="#"><img src="{{ asset('landing/root/img/2ndlogo.png') }}" alt=""></a>
      </div>

      <div class="headertop clearfix">
          <div class="card">
              <div class="box">
                  <span>
                  <h1><i class="fa fa-phone-square"></i><strong>Helpline +880 2 55041850</strong></h1>
                  <h1><i class="fa fa-envelope-square"></i><strong style="color: #2c2c2c !important;">customercare@baeiexpress.com</strong></h1>
                  <a class="cd-main-nav__list  cd-main-nav__item cd-main-nav__item--signin" href="{{ url('login') }}" data-signin="login"><i class="fa fa-regular fa-user"></i>Login</a>

                  {{-- <a class="cd-main-nav__list js-signin-modal-trigger cd-main-nav__item cd-main-nav__item--signin" href="" data-signin="login"><i class="fa fa-regular fa-user"></i>Login</a> --}}
                  </span>
              </div>
          </div>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse headermenu" id="bs-megadropdown-tabs">
          <ul class="nav navbar-nav">

              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('about') }}">About</a></li>
              <li><a href="{{ url('services') }}">Services</a></li>
              <li><a href="{{ url('archive') }}">Group Archive</a></li>
              <li><a href="{{ url('experience') }}">Experience</a></li>
              <!--<li><a href="#/tracking">Price</a></li>-->
              <li><a href="{{ url('contact') }}">Contact</a></li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registration<span class="fa fa-angle-down" style="padding-left: 4px;"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a class="cd-main-nav__list  cd-main-nav__item cd-main-nav__item--signin" href="{{ url('login') }}" data-signin="login"><i class="fa fa-chevron-right" style="margin-right: 4px"></i>Login</a></li>
                  <li><a class="cd-main-nav__list  cd-main-nav__item cd-main-nav__item--signin" href="#" data-signin="signup"><i class="fa fa-chevron-right" style="margin-right: 4px"></i>Registration</a></li>
                </ul>
              </li>

          </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- header Section end -->
