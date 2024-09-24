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
                    <div class="content">
                        <img src="/img/dc-logo.png" alt="DC Comics">
                        <ul>
                            <li><a href=""></a>CHARACTERS</li>
                            <li><a href=""></a>MOVIES</li>
                            <li><a href=""></a>TV</li>
                            <li><a href=""></a>GAMES</li>
                            <li><a href=""></a>COLLECTIBLES</li>
                            <li><a href=""></a>VIDEOS</li>
                            <li><a href=""></a>FANS</li>
                            <li><a href=""></a>NEWS</li>
                            <li><a href=""></a>SHOP</li>
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