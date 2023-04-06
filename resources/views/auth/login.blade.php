@extends('layouts.app')

@section('content')


                
       

<div class="auth">
     <div class="container">
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                    
                    
                                                                    <div class="bg-white shadow card login-page roundedd border-1 ">
                        <div class="card-body">

                            <div class="text-left">

                                <div class="text-center">
                                <a href="index.html"><span
                                        style="padding: none; max-width: 2px; color: rgb(11, 18, 16); font-size: 30px; "></span></a>
                            </div>
                            <h4 class="text-center card-title">User Login</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your {{ __('Email Address') }}<span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                            <div class="position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input id="email" type="email" class="pl-5 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>{{ __('Password') }} <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                <input id="password" type="password" class="pl-5 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>

                         <div class="col-lg-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                     <input class="custom-control-input" type="checkbox" name="remember" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="custom-control-label" for="customCheck1">{{ __('Remb. Me') }}</label>
                                                       
                                    
                                                </div>
                                            </div>
                                            <div>
                                            <label class="mb-0 forgot-pass">
                                                    
                                                 @if (Route::has('password.request'))

                                                 <span style="font-language-override: unset">
                                    <a class="text-dark font-weight-bold" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                                 </span>
                                @endif
                                            </label>  </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                        
                            <div class="mb-0 col-lg-12">
                                <button type="submit" class="btn btn-success btn-block pad">
                                    {{ __('Login') }}
                                </button>

    
                            </div>

                            
                                    <div class="text-center col-12">
                                        <p class="mt-3 mb-0"><small class="mr-2 text-dark">Don't have an account
                                                ?</small> <a href=" {{ route('register') }}"
                                                class="text-dark font-weight-bold"> Sign Up</a></p>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="text-center col-12">
                                        <p class="mt-4 mb-0"><small class="mr-2 text-dark">&copy; Copyright  2023 &nbsp; Securedgainers &nbsp; All Rights Reserved.</small>
                                        </p>
                                    </div>
                                </div>
                                <!--end row-->
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
     </div>
</div>

 

                
          
@endsection
