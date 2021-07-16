@extends('layouts.guest')


@section('header')
  
    <h2 class="text-center">Reset Your Password</h2>
    <p class="text-center">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, quas sit eius laborum voluptatum exercitationem.
    </p>

@endsection

@section('content')

    <form action="{{ route('password.update') }}" method="POST" style="padding: 0 15px;">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul style="padding:0 0 0 10px; margin:0;">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                </ul>
            </div>
        @endif

        <div class="row email mb-4">
            <div class="col-12">
                @csrf
                <input type="hidden" name="token" value="{{ $request->token }}">
                <input class="form-control form-control-lg" type="text" name="email" placeholder="E-mail Address" value="{{ old('email') }}">
               
            </div>
        </div>
        <div class="row email mb-4">
            <div class="col-12">
                   @csrf
                <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter a new password" value="{{ old('email') }}">
               
            </div>
        </div>
        <div class="row email mb-4">
            <div class="col-12">
                   @csrf
                <input class="form-control form-control-lg" type="password" name="password_confirmation" placeholder="Confirm the password" value="{{ old('email') }}">
               
            </div>
        </div>

        <div class="row reset mb-4">
            <div class="col-12">
                <button class="btn btn-block btn-lg btn-success" type="submit">
                    <span>Reset</span>
                </button>
            </div>
        </div>
  </form>
    
@endsection