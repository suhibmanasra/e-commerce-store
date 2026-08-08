@extends('layout.app')   
@section('content')
 <div  style="margin-top:54px">
      <div style="padding:16px 32px">
        <div class="w3-padding-32">
          <div class="w3-auto" style="width:380px">
            <div class="w3-white w3-round w3-margin-bottom w3-border" style="">
              <div class="w3-padding-large">
                <div class="w3-center w3-padding-16">
                  <img src="{{ asset('assets/admin-logo.png') }}" alt="w3mix" class="w3-image">
                  <p>SIGN IN</p>
                </div>
                <form action="{{ route('login') }}" method="POST">
                  @csrf
                <div class="w3-margin-bottom">
                  <input type="email" name="email" class="w3-input w3-round w3-border" placeholder="Enter Email">
                </div>
                <div class="w3-margin-bottom">
                  <input type="password" name="password" class="w3-input w3-round w3-border" placeholder="Enter Password">
                </div>
                <div class="w3-margin-bottom">
                  <div class="icheck-material-white">
                    <input id="user-checkbox" class="w3-check" type="checkbox" checked="">
                    <label for="user-checkbox">I AGREE WITH TERMS & CONDITIONS</label>
                  </div>
                </div>
                <button type="submit" class="w3-button w3-round w3-margin-bottom w3-primary w3-block">Sign In</button>
                <div class="w3-center w3-margin-bottom w3-opacity">Sign In With</div>
                <div class="w3-row-padding w3-stretch">
                  <div class="w3-col m6">
                    <button type="button" class="w3-button w3-round w3-margin-bottom bg-facebook w3-text-white w3-block"><i class="fa fa-facebook-square"></i> Facebook</button>
                  </div>
                  <div class="w3-col m6 text-right">
                    <button type="button" class="w3-button w3-round w3-margin-bottom bg-twitter w3-text-white w3-block"><i class="fa fa-twitter-square"></i> Twitter</button>
                  </div>
                </div>
                </form>
              </div>
              <div class="w3-center w3-border-top">
                <p class="w3-margin"><span class="w3-text-warning">Do not have an account?</span> <a href="register.html"> Sign Up here</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
@endsection