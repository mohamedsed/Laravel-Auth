<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('all.min.css')}}">




    <title>@yield('title')</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="home">Laravel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">

                    @guest


            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login">Login</a>
                </li>

                @endguest

                @auth


                <li class="nav-item ">
                    <a class="nav-link active text-white" aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active text-white" aria-current="page" href="#about">About</a>
                  </li>
                  <li class="nav-item ">
                      <a class="nav-link active text-white" aria-current="page" href="#team">Team</a>
                    </li>
                <li class="nav-item ">
                    <a class="nav-link active text-white" aria-current="page" href="#services">Services</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active text-white" aria-current="page" href="#fourm">Contact</a>
                </li>
            </ul>

            <li class="nav-item logout">
                <a class="nav-link active" aria-current="page" href="logout">Logout</a>
            </li>


            @endauth
        </ul>
    </div>
</div>
</nav>

@yield('content')
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
