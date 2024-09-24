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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <img src="{{ assets('resources/img/dc-logo.png')}}" alt="DC Comics">
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>