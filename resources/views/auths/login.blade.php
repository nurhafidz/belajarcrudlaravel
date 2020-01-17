@extends('layout/main2')

@section('title','LogIn')

@section('content')
    <div class="container-login100" style="background-image: url({{url('img/bg1.png')}});">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" method="POST" action="/postlogin">
                @csrf
                <span class="login100-form-title p-b-37">
                    Sign In
                </span>

                <div class="wrap-input100  m-b-20" data-validate="email">
                    <input class="input100" type="text" name="email" placeholder="email">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 m-b-25" data-validate = "Enter password">
                    <input class="input100" type="password" name="password" placeholder="password">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Sign In
                    </button>
                </div>

                <div class="text-center">
                    <a href="{{url('/register')}}" class="txt2 hov1">
                        Sign Up
                    </a>
                </div>
            </form>

            
        </div>
    </div>
@endsection