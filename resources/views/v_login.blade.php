{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login SIDK | Admin</title>
    
    <!-- FavIcon -->
    <link rel="shortcut icon" href="{{asset('profile')}}/assets/img/Indramayu.png">
    
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('template-login')}}/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('template-login')}}/css/style.css">

    <style>
    .text-input{
        color:black;
        text:no-underline;
    }
    </style>
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('template-login')}}/images/signin-image.jpg" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <a class="text-input" href="/beranda">Sistem Informasi Desa Kenanga</a>
                        <h2 class="form-title">LOGIN</h2>
                        
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="E-mail" value="{{old('email')}}"/>
                            </div>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                               <p style="color:#ff0202;"> {{ $message }}</p>
                            </span>
                            @enderror
                            <br>
                            
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" value="{{old('password')}}"/>
                            </div>

                            
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                               <p style="color:#ff0202;"> {{ $message }}</p>
                            </span>
                            @enderror

                            @if (session('pesan'))
                            <span class="invalid-feedback" role="alert">
                                <p style="color:#ff0202;"> 
                                    {{session('pesan')}}</p>
                             </span>
                            @endif

                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{asset('template-login')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('template-login')}}/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html> --}}
 

        <!-- Sign up form -->
        {{-- <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('template-login')}}/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- Remember Me --}}
        {{-- <div class="form-group">
            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
        </div> --}}

        {{-- Or login with --}}
        {{-- <div class="social-login">
            <span class="social-label">Or login with</span>
            <ul class="socials">
                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
            </ul>
        </div> --}}


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login SIDK | Login</title>

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
        <h2
          class="my-8 font-display font-bold text-3xl text-gray-700 text-center"
        >
          Sistem Informasi Desa Kenanga
        </h2>
        
        <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="py-1 relative">
          <label for="your_name"><i class="fa fa-user absolute text-primarycolor text-xl"></i></label>
          <input
            type="text"
            name="email"
            id="email"
            placeholder="Email"
            class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-md"
            style="text-transform: lowercase;"
            />
        </div>
        
        @error('email')
        <span class="invalid-feedback" role="alert">
            <p style="color:#ff0202;"> {{ $message }}</p>
        </span>
        @enderror

        <div class="py-1 relative mt-3">
          <label for="your_pass"><i class="fa fa-lock absolute text-primarycolor text-xl"></i></label>
          <input
            type="password"
            name="password"
            id="password" 
            placeholder="password"
            class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-md"
            style="text-transform: lowercase;"
            />
        </div>

        @error('password')
        <span class="invalid-feedback" role="alert">
            <p style="color:#ff0202;"> {{ $message }}</p>
        </span>
        @enderror

        @if (session('pesan'))
        <span class="invalid-feedback" role="alert">
            <p style="color:#ff0202;"> 
                {{session('pesan')}}</p>
         </span>
        @endif
        
        <div class="py-5">
            <button
                name="signin" 
                id="signin"
                class="py-3 px-20 bg-yellow-600 lg:mx-0 hover:underline bg-white text-white font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
            >
                Login
            </button>
            {{-- @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif  --}}
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('ingat saya') }}
                    </label>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Reset password?') }}
                    </a>
                @endif
            </div>
        </div>

        </form>
      </div>
    </div>
  </body>
</html>


<script src="{{asset('template-login')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('template-login')}}/js/main.js"></script>