@extends('layouts.app')


@section('page_title', 'Dashboard')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Welcome {{ Auth::user()->name }}</h1>
                    <p class="text-center">
                        Hello {{ Auth::user()->name }}, Here is the Dashboard where you can manage
                        everything
                    </p>

                    
                    <form class="d-flex" action="{{ route('logout') }}" method="POST">
                        <a class="btn btn-outline-success ml-auto mr-2" href="{{ route('home') }}">Back to the Home</a>
                        @csrf
                        <button class="btn btn-success mr-auto ml-2" type="submit">
                            <span>Logout</span>
                        </button>
                    </form>
                   
                </div>
            </div>
        </div>
    </section>


@endsection
