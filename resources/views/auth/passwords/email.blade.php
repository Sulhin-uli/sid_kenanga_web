{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
 {{-- --------------------------------------------------------------- --}}


 {{-- @extends('layouts.app')

 @section('content') --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login SIDK | Reset Password</title>

    <!-- FavIcon -->
    <link rel="shortcut icon" href="{{asset('profile')}}/assets/img/Indramayu.png">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />

    <link rel="stylesheet" href="{{asset('LoginTailwindCss')}}/static/dist/tailwind.css" />

  </head>
  <body class="bg-yellow-100" >
    <img
      src="{{asset('LoginTailwindCss')}}/Assets/wave.png"
      class="fixed hidden lg:block inset-0 h-full"
      style="z-index: -1;"
    />
    <div
      class="w-screen h-screen flex flex-col justify-center items-center lg:grid lg:grid-cols-2"
    >
      <img
        src="{{asset('LoginTailwindCss')}}/Assets/Indramayu.png"
        class="hidden lg:block w-1/2 hover:scale-150 transition-all duration-500 transform mx-auto"
      />
      <div class="flex flex-col justify-center items-center w-1/2">
        <img src="{{asset('LoginTailwindCss')}}/Assets/avatar.svg" class="w-32" />
        <h5
          class="my-8 font-display font-bold text-3xl text-gray-700 text-center"
        >
          Reset Password
        </h5>
        <div class="card">
            <div class="card-header">{{ __('') }}</div>
            <br>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="px-6 py-1 relative">
                        <label for="your_name"><i class="fa fa-user pl-2 pt-1 absolute text-primarycolor text-xl"></i></label>
                        <input
                          type="text"
                          name="email"
                          id="email"
                          placeholder="Email"
                          class="pl-12 px-16 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-md"
                          style="text-transform: lowercase;"
                          />
                      </div>
                      
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <p style="color:#ff0202;"> {{ $message }}</p>
                      </span>
                      @enderror

                    <div class="form-group row mb-0">
                    <br>
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="py-3 px-20 bg-yellow-600 lg:mx-0 hover:none-underline bg-white text-white font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            {{ __('Kirim Link Reset Password') }}
                        </button>
                    </div>
                    <a href="/home"><p class="py-3 text-center">Kembali</p></a>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>


<script src="{{asset('template-login')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('template-login')}}/js/main.js"></script>

{{-- @endsection --}}

