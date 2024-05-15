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
        @vite(['resources/scss/main.scss', 'resources/scss/tab.scss',  'resources/scss/modal.scss'])
          <!-- scripts  -->
          @vite(['resources/js/modal.js', 'resources/js/tab.js',])

    </head>
    <body>
        
        <header> 
            <nav>
                <ul>
                    <li><a href="">Over ons</a></li>
                    <li><a href="">Reserveren</a></li>
                    <li id="windkrachtlogo">
                        <a href="">Powered by 
                            <img src="{{ asset('img/MBO-Logo 1.png') }}" alt="MBO Logo">
                        </a>
                    </li>
                    <li><a href="">Contact</a></li>
                    <li>
                        @if (Route::has('login'))
                            <div>
                            @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <!-- Trigger/Open The Modal -->
                                <a href="#" id="myBtn">Login</a>

                                <div class="content">
                                     <!-- The Modal -->
                                    <div id="myModal" class="modal" style="display:none">
                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <span class="close">&times;</span>
                                            
                                            <div class="mainTab">
                                                <div class="tab">
                                                  <button class="tablinks" onclick="tab(event, 'login')" id="defaultOpen">Login</button>
                                                  <button class="tablinks" onclick="tab(event, 'signup')">Registreer</button>
                                                </div>
                                    
                                                <div id="login" class="tabcontent">
                                                  @include('auth.login')
                                                </div>
                                    
                                                <div id="signup" class="tabcontent">
                                                  @include('auth.invite')
                                                </div>
                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endauth
                            </div>
                        @endif
                    </li>
                </ul>
            </nav>
            <div>
            <img class="gif" src="{{ asset('img/summer walking GIF - Find & Share on GIPHY.gif') }}" alt="Gif">
            <img class="Wave" src="{{ asset('designs/Vector.svg') }}" alt="Wave">
            </div>
        </header>
        <section>
            <div class="vector">
                <img id="block1" src="{{ asset('designs/VectorDown.svg') }}" alt="vectorDown">
                <img id="block2" src="{{ asset('designs/VectorDown.svg') }}" alt="vectorDown">
                <img id="block3" src="{{ asset('designs/VectorDown.svg') }}" alt="vectorDown">
            </div>
            <div class="cards">

                <div class="card">
                    <h2>Pakket 1</h2>
                    <h3>Prive Les </h3>
                    <p>- € 175,- inclusief alle materialen
                    - Eén persoon per les
                    - 1 dagdeel	
                    </p>
                </div>
                
                <div class="card">
                    <h2>Pakket 2</h2>
                    <h3>Losse duo kiteles</h3>
                    <p>- € 135,- per persoon inclusief alle materialen
                    - Maximaal 2 personen per les
                    - 1 dagdeel
                    </p>
                </div>

                <div class="card">
                <h2>Pakket 3</h2>
                <h3>kitesurf duo </h3>
                    <p>- € 375,- per persoon inclusief materialen
                    - Maximaal 2 personen per les
                    - 3 dagdelen 	
                    </p>
                </div>
            </div>
            <div class="buttoncontainer">
                <a href="/reservation/create"><button>|  Wil je reserveren? meld je aan! |</button></a>
            </div>
            <div class="container">
                <div class="textcontainer"><h2>Mooie Titel</h2><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, an</p></div>
                <img src="{{ asset('img/kitesurf-girl.png') }}" alt="">
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
                                <img src="{{ asset('img/MBO-Logo 1.png') }}" alt="MBO Logo"></li>
                    </ul>
                    <div class="bottomcontainer">
                        <ul>
                            <li><img src="{{ asset('img/windkracht-black&white.png') }}" alt=""></li>
                            <li>Terug naar boven ^</li>
                        </ul>
                    </div>
                </div>
            </footer>
        </section>
    </body>
</html>