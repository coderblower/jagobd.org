@extends('layouts.app')
@section('title','SignUp')
@section('content')
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <h1 class="ml-2">404 Page Not Found</h1>
            {{-- <div class="card-header text-center">
                <a href="{{ route('frontend.index') }}" class="navbar-brand">
                    <img
                      src="{{asset('frontend/img/BNMLogo.png')}}"
                      class="img-fluid"
                      alt="First slide"
                      style="height: auto; width: 73px"
                    /> <span class="fw-bold">BN<span class="text-primary">M</span> </span>
                  </a>
            </div> --}}
            {{-- <div class="card-body">
                <p class="login-box-msg">SignUp</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('name_en') is-invalid @enderror" name="name_en"
                               value="{{ old('name_en') }}" required autocomplete="name_en" autofocus placeholder="Name English">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('name_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('name_bn') is-invalid @enderror" name="name_bn"
                               value="{{ old('name_bn') }}" required autocomplete="name_en" autofocus placeholder="Name Bangla">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('name_bn')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone"
                               value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Phone Number">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                               value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                               name="password" id="password" required autocomplete="current-password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="toggle-password fa fa-fw fa-eye-slash" data-toggle="#password"></span>
                            </div>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                               name="password_confirmation" required autocomplete="new-password" id="confirm_password" placeholder="Confirm Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="toggle-password fa fa-fw fa-eye-slash" data-toggle="#confirm_password"></span>
                            </div>
                        </div>
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mb-0">
                    I am already registered  <a href="{{ route('login') }}">Login</a>
                </p>
            </div> --}}
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

@endsection

@section('js')
 <script>
        $(document).ready(function() {
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).data("toggle"));
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    });
    </script>
@endsection
