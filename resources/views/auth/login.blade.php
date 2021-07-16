@extends('layouts.guest')


@section('header')
  
    <h2 class="text-center">Login</h2>
    <p class="text-center">
        Don't have an account. Let's <a href="{{ route('register') }}">create</a> one
    </p>

@endsection

@section('content')

    <form action="{{ route('login') }}" method="POST" style="padding: 0 15px;">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul style="padding:0 0 0 10px; margin:0;">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                </ul>
            </div>
        @endif

        @if (Session::has('status'))
            <div class="alert alert-success">
                <span>{{ Session::get('status') }}</span>
            </div>
        @endif
    
        <div class="row email mb-4">
            <div class="col-12">
                   @csrf
                <input class="form-control form-control-lg" type="text" name="email" placeholder="E-mail Address" value="{{ old('email') }}">
               
            </div>
        </div>

        <div class="row password">
            <div class="col-12">
                <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter a password" value="{{ old('password') }}">
            </div>
        </div>

        <div class="row related-links my-3">
            <div class="col-12 d-flex">
                <div>
                    <input type="checkbox" name="">
                    <label for="#">Remember me</label>
                </div>
                <a class="ml-auto" href="{{ route('password.request') }}">Forgot Password</a>
            </div>
        </div>

        <div class="row password_confirm mb-4">
            <div class="col-12">
                <button class="btn btn-block btn-lg btn-success" type="submit">
                    <span>Login</span>
                </button>

                <a href="{{ route('home') }}" class="btn btn-block btn-lg btn-outline-dark" type="submit">
                    <span>Back to the Home</span>
                </a>
            </div>
        </div>
  </form>
    
@endsection