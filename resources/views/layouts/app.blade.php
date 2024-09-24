<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content d-flex align-items-center justify-content-around  my-3">
                        <img src="/img/dc-logo.png" alt="DC Comics">
                        <ul class="list-unstyled d-flex ">
                            <li class="px-3"><a class="nav-link fw-bold" href="{{route('homepage')}}">CHARACTERS</a></li>
                            <li class="px-3"><a class="nav-link fw-bold {{Route::currentRouteName() === 'homepage' ? 'active' : ''}}" href="">COMICS</a></li>
                            <li class="px-3"><a class="nav-link fw-bold" href="">MOVIES</a></li>
                            <li class="px-3"><a class="nav-link fw-bold" href="">TV</a></li>
                            <li class="px-3"><a class="nav-link fw-bold" href="">GAMES</a></li>
                            <li class="px-3"><a class="nav-link fw-bold" href="">COLLECTIBLES</a></li>
                            <li class="px-3"><a class="nav-link fw-bold" href="">VIDEOS</a></li>
                            <li class="px-3"><a class="nav-link fw-bold" href="">FANS</a></li>
                            <li class="px-3"><a class="nav-link fw-bold" href="">NEWS</a></li>
                            <li class="px-3"><a class="nav-link fw-bold" href="">SHOP</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>