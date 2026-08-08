@extends('layout.app')   
@section('content')
    <div class="w3-main" style="margin-top:54px">
      <div style="padding:16px 32px">
        <div class="w3-padding-32">
          <div class="w3-auto" style="width:380px">
            <div class="w3-white w3-round w3-margin-bottom w3-border" style="">
              <div class="w3-padding-large">
                <div class="w3-center w3-padding-16">
                  <img src="./assets/admin-logo.png" alt="w3mix" class="w3-image">
                  <p>SIGN UP</p>
                </div>
                <form action="{{ route('register') }}" method="POST">
                  @csrf
                <div class="w3-margin-bottom">
                  <input type="text" name="name" required class="w3-input w3-round w3-border" placeholder="Enter Your Username">
                  @error('name')
                    <span class="w3-text-red">{{ $message }}</span>
                  @enderror
                </div>
                <div class="w3-margin-bottom">
                  <input type="email" name="email" required class="w3-input w3-round w3-border" placeholder="Enter Your Email">
                  @error('email')
                    <span class="w3-text-red">{{ $message }}</span>
                  @enderror
                </div>
                <div class="w3-margin-bottom">
                  <input type="password" name="password" required class="w3-input w3-round w3-border" placeholder="Choose Password">
                    @error('password')
                        <span class="w3-text-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w3-row w3-margin-bottom">
                  <div class="w3-col m6">
                    <div class="icheck-material-white">
                      <input id="user-checkbox" class="w3-check" type="checkbox" checked="">
                      <label for="user-checkbox">Remember me</label>
                    </div>
                  </div>
                  <div class="w3-col m6 w3-right-align">
                    <a href="reset-password.html">Reset Password</a>
                  </div>
                </div>
                <button type="submit" class="w3-button w3-round w3-margin-bottom w3-primary w3-block">Sign Up</button>
                <div class="w3-center w3-margin-bottom w3-opacity">Sign In With</div>
                <div class="w3-row-padding w3-stretch">
                  <div class="w3-col m6">
                    <button type="button" class="w3-button w3-round w3-margin-bottom bg-facebook w3-text-white w3-block"><i class="fa fa-facebook-square"></i> Facebook</button>
                  </div>
                  <div class="w3-col m6 text-right">
                    <button type="button" class="w3-button w3-round w3-margin-bottom bg-twitter w3-text-white w3-block"><i class="fa fa-twitter-square"></i> Twitter</button>
                  </div>
                </div>
              </div>
              <div class="w3-center w3-border-top">
                <p class="w3-margin"><span class="w3-text-warning">Do not have an account?</span> <a href="register.html"> Sign Up here</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     @endsection