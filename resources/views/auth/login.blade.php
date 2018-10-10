@extends('layouts.FrontLayout.master')
@section('content')
  <!-- breadcrumbs start -->
    <div class="breadcrumbs-area breadcrumb-bg ptb-100">
        <div class="container">
            <div class="breadcrumbs text-center">
                <h2 class="breadcrumb-title">login page</h2>
                <ul>
                    <li>
                        <a class="active" href="index.html">Home</a>
                    </li>
                    <li>login</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- login area end -->
    <div class="login-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="login-content">
                        <div class="login-title">
                            <h4>login</h4>
                            <p>Please login using account detail bellow.</p>
                        </div>
                        <div class="login-form">
                            <form  method="POST" class="main-form full" action="{{ route('login') }}">
                                                      @csrf

                                <input id="login-email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" Placeholder="Email" required autofocus>
                                 @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
<<<<<<< HEAD
                                <input id="login-pass" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" Placeholder="Password" name="password" required>
                                
=======
                      <!-- <input id="login-email" type="email" required="" placeholder="Email Address"> -->
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-box">

                      <label for="login-pass">كلمة السر</label>
                        <input id="login-pass" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

>>>>>>> 2e09f68030745fe15265ec8f2ecf6d093f3d7973
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
<<<<<<< HEAD
                                <div class="button-remember">
                                    <div class="checkbox-remember">
                                       <input id="checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                                        <label>Remember me</label>
                                    </div>
                                    <button class="login-btn" type="submit">Login</button>
                                </div>
                                <div class="new-account">
                                    <p>new here ? <a class="link" href="{{route('register')}}">Create an new account .</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->
    <!-- subscribe area start -->
    <div class="subscribe-area gray-bg">
        <div class="container">
            <div class="subscribe-bg ptb-80">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 ">
                        <div class="subscribe-from text-center">
                            <h3>subscribe to our newsletter</h3>
                            <form action="#">
                                <input placeholder="Enter your Email address" type="email">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
=======
                      <!-- <input id="login-pass" type="password" required="" placeholder="Enter your Password"> -->
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="check-box left-side"> 
                      <span>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                        <label for="remember_me">تذكرني</label>
                      </span>
                    </div>
                    <button name="submit" type="submit" class="btn-color right-side">Log In</button>
                  </div>

                  <div class="col-12">  <a title="Forgot Password" class="forgot-password mtb-20" href="{{ route('password.request') }}">
                                    {{ __('نسيت كلمة السر?') }}
                                </a>
                    <hr>
                  </div>
                  <div class="col-12">
                    <div class="new-account align-center mt-20"> <span>جديد في روفانا ?</span> <a class="link" title="Register with Stylexpo" href="{{route('register')}}">تسجيل جديد </a> </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@include('tamplete.partains.footer')
>>>>>>> 2e09f68030745fe15265ec8f2ecf6d093f3d7973
