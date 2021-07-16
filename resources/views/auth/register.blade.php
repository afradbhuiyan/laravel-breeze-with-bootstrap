@extends('layouts.guest')


@section('header')
  
    <h2 class="text-center">Registration</h2>
    <p class="text-center">
        Already have an account. Let's <a href="{{ route('login') }}">Login</a>
    </p>

@endsection

@section('content')

    <form action="{{ route('register') }}" method="POST" style="padding: 0 15px;">
        <div class="row name mb-4">
            <div class="col-12">
                @csrf
                <input class="form-control form-control-lg" type="text" name="name" placeholder="Your Name" value="{{ old('name') }}">
                @error('name')
                    <div>
                        <span class="text-danger">{{ $message }}</span>
                    </div>
                @enderror
              
            </div>
        </div>

        <div class="row email mb-4">
            <div class="col-12">
                <input class="form-control form-control-lg" type="text" name="email" placeholder="E-mail Address" value="{{ old('email') }}">
                @error('email')
                    <div>
                        <span class="text-danger">{{ $message }}</span>
                    </div>
                @enderror
            </div>
        </div>

        <div class="row password mb-4">
            <div class="col-12">
                <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter a password" value="{{ old('password') }}">
                 @error('password')
                    <div>
                        <span class="text-danger">{{ $message }}</span>
                    </div>
                @enderror
            </div>
        </div>

        <div class="row password_confirm mb-4">
            <div class="col-12">
                <input class="form-control form-control-lg" type="password" name="password_confirmation" placeholder="Confirm the password" value="{{ old('password') }}">
                @error('password')
                    <div>
                        <span class="text-danger">{{ $message }}</span>
                    </div>
                @enderror
            </div>
        </div>

        <div class="row password_confirm mb-4">
            <div class="col-12">
                <button class="btn btn-block btn-lg btn-success" type="submit">
                    <span>Register</span>
                </button>
                <a href="{{ route('home') }}" class="btn btn-block btn-lg btn-outline-dark" type="submit">
                    <span>Back to the home</span>
                </a>
            </div>
        </div>
  </form>
    
@endsection