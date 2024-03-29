@extends('layouts/blankLayout')

@section('title', 'Login')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{secure_asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{secure_url('/')}}" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <img src="{{secure_asset('assets/img/icons/brands/roboyo_R_12.jpg')}}">
              </span>
              <span class="app-brand-text demo text-body fw-bolder ">Roboyo</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2 text-center">PenTest Reporting Tool</h4>
          <p class="mb-4">Please sign-in to your account.</p>
          <!-- Form -->
          <form id="formAuthentication" class="mb-3" action="/login" method="POST">
            @csrf

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email"
              placeholder="Enter your email" value="{{ old('email')}}">
              @error('email')
                 <p style="color:red">{{ $message }}</p>   {{--feedback ao user sobre erros de input --}}
              @enderror
              @error('failed')
                 <p style="color:red">{{ $message }}</p>   {{--feedback ao user sobre erros de input --}}
              @enderror
            </div>

            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
                <a href="{{route('password.request')}}">
                  <small>Forgot Password?</small>
                </a>
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control"
                name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                 aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
              @error('password')
                <p style="color:red">{{ $message }}</p> {{--feedback ao user sobre erros de input --}}
              @enderror
            </div>
            <div class="mb-4">
              <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /Register -->
  </div>
  @include('layouts/sections/footer/footer')
</div>
</div>
@endsection
