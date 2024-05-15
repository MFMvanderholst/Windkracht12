<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Windkracht12</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/Windkracht-logo.png') }}" type="image/x-icon">

    <!-- Styles -->
    @vite(['resources/scss/main.scss', 'resources/scss/tab.scss', 'resources/scss/modal.scss', 'resources/scss/form.scss', 'resources/css/app.css'])


</head>

<body>
    <header>
        <div>
            <a href="/"><button class="home"><- Ga terug</button></a>
            <img class="gif" src="{{ asset('img/summer walking GIF - Find & Share on GIPHY.gif') }}" alt="Gif">
            <img class="Wave" src="{{ asset('designs/Vector.svg') }}" alt="Wave">
        </div>

        <!-- registration form -->
        <div class="container form mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
            <div class="form-content w-full mt-6 px-6 py-4 bg-white overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

        <div class="bannercontainer">
            <img src="{{ asset('img/kitesurf-banner.png') }}" alt="">
        </div>
        <footer>
            <div class="footer">
                <ul>
                    <li>Neem contact op voor vragen! windkracht12.info@gmail.com +31 6 123422032</li>
                    <li>Follow us on <img src="{{ asset('img/socialmedia.png') }}" alt=""></li>
                    <li>Powered by
                        <img src="{{ asset('img/MBO-Logo 1.png') }}" alt="MBO Logo">
                    </li>
                </ul>
                <div class="bottomcontainer">
                    <ul>
                        <li><img src="{{ asset('img/windkracht-black&white.png') }}" alt=""></li>
                        <li>Terug naar boven ^</li>
                    </ul>
                </div>
            </div>
        </footer>
    </header>
</body>

</html>