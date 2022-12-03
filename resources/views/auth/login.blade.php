@extends('layouts.app')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                    <div class="shadow-sm">
                        <form action="{{ route('login') }}" method="POST" class="signin-form d-md-flex">
                            @csrf
                            <div class="half p-4">
                                <div class="w-100 text-center">
                                    <img src="{{ asset('admin/images/1-baeilogo2.png') }}" class="mb-3 " alt="Ebaei">
                                </div>
                                <div class="form-group mt-3 username">

                                    <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group d-flex mt-3 password">

                                    <input id="password-field" type="password" class=" @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password "></span>
                                </div>

                                <div class="form-group mt-5">
                                    <button type="submit" class=" px-4  py-2 rounded-pill btn-shadow submit ">Log
                                        In</button>
                                </div>

                                <div class="form-group  d-md-flex mt-5">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50  text-md-right">
                                        <a href="#" class=" " style="text-decoration: none">Forgot Password</a>
                                    </div>
                                </div>
                            </div>

                            <div class="half  bg-img">
                                <div class="h-100 w-100  opacity">
                                    <div class="text-center pt-5 px-4 w-100 ">
                                        <img src="{{ asset('admin/images/1-2ndlogo (1).png') }}" class="m-auto" alt="Ebaei">
                                    </div>
                                    <div class="mt-3  text-center">
                                        <h2 class="text fs-2 fw-bolder">BAEI Express Limited</h2>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <h2 class="text2 fs-2 fw-bolder">Login Panel</h2>
                                    </div>


                                    <div class=" text fw-regular text-center  px-5 pt-5 mt-5">
                                        <p>Manage BAEI Express Limited website using this panel.</p>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- <div class="w-100 h-100 bg-primary">
    <div class="m-auto">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="col-md-6">

                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>

    </div>

</div> --}}
@endsection
