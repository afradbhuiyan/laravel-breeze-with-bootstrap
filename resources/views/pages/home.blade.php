<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset("assets/css/app.css") }}">
</head>
<body>
    

    <main>
        <section>
            <div class="container">
                <h1 class="text-center">Home Page</h1>

                <div class="d-flex justify-content-center mt-4">
                    @if (Route::has('login'))

                        @auth
                            <a class="btn btn-success" href="{{ route('dashboard') }}">
                                <span>Dashboard</span>
                            </a>
                        @else
                        
                            <a class="btn  btn-success mr-2" href="{{ route('login') }}">
                                <span>Login</span>
                            </a>

                            @if (Route::has('register'))
                                <a class="btn btn-outline-success ml-2" href="{{ route('register') }}">
                                    <span>Register</span>
                                </a>
                            @endif
                            
                        @endauth

                    @endif
                </div>
              

            </div>
        </section>
    </main>



</body>
</html>