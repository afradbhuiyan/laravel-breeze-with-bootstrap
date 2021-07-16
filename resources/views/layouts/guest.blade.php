<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body style="width: 100%; min-height:100vh; display:flex; flex-direction:column;">
    
    <main class="my-auto">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 mx-auto">
                        
                        <header>
                            @yield('header')
                        </header>

                        <div class="content">

                            @yield('content')
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>




</body>
</html>
