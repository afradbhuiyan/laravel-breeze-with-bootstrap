@extends('layouts.guest')


@section('header')
  
    <h2 class="text-center">Forgot Your Password</h2>
    <p class="text-center">
        Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
    </p>

@endsection

@section('content')

    <form action="{{ route('password.email') }}" method="POST" style="padding: 0 15px;">
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

        <div class="row password_confirm mb-4">
            <div class="col-12">
                <button class="btn btn-block btn-lg btn-success" type="submit">
                    <span>Send the Link to Login</span>
                </button>

                <a href="{{ route('login') }}" class="btn btn-block btn-lg btn-outline-dark" type="submit">
                    <span>Back to the Login Page</span>
                </a>
            </div>
        </div>
  </form>
    
@endsection