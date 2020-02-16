

@extends('layouts.layout-header-tool', ['title'=>'Login'])
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          
          <div class="col-lg-2 d-flex flex-row" style="background:#111;">
            
          </div>

          <div class="col-lg-8 d-flex align-items-center justify-content-center" style="background:#111;">
            <div class="auth-form-transparent text-left p-3 bg-white rounded">
              <div class="brand-logo text-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/12/Logo_BMKG_%282010%29.png" alt="logo">
              </div>
              {{-- <h4>BMKG</h4> --}}
              <h6 class="font-weight-light text-center upper">Badan Meteorologi, Klimatologi, dan Geofisika</h6>

              @if(session('error'))
                <div class="col p-0">
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                </div>
              @endif
              @if(session('success'))
                <div class="col p-0">
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                </div>
              @endif
              <form class="pt-3" action="{{ route('login') }}" method="POST"> @csrf
                <div class="form-group">
                  <label for="exampleInputEmail">Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-info"></i>
                      </span>
                    </div>
                    <input type="email" name="email" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-info"></i>
                      </span>
                    </div>
                    <input type="password" name="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">                        
                  </div>
                </div>
                <div class="my-3">
                  <button type="submit" class="btn btn-block btn-dark btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  {{-- @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif --}}
                <p class="text-dark font-weight-medium text-center flex-grow align-self-end">Don't have any account?   <a class="text-info bold" href="{{ route('register') }}">Register!</a></p>
                <p class="text-dark font-weight-medium text-center flex-grow align-self-end">Powered by : <a class="text-info underline bold" href="https://instagram.com/kindlead_">Kindlead</a></p>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-2" style="background:#111;">
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
