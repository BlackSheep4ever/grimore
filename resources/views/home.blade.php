<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Grimore</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

</head>

<body class="antialiased">
    <div>
        <div class="home-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="home-content">
                            <img class="main-logo" src="{{ env('LOGO') }}" />
                            <h2 class="title">GRIMORE</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat suscipit praesentium quaerat sint aspernatur corporis repellendus id. Repellat labore, doloribus exercitationem aspernatur eius nihil obcaecati sint voluptas distinctio reiciendis repellendus..</p>

                            <div>
                                @if (Route::has('login'))
                                <div>
                                    @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                    @else
                                    <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                    @endauth
                                </div>
                                @endif
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<link rel="stylesheet" href="/css/main.css">

<style>
    .home-content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    p {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    }
</style>