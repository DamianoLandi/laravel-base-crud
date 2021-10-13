<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="{{ asset('img/dc-logo.png') }}" alt="LOGO">
        <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('characters') }}">Characters</a></li>
            <li><a href="{{ route('comics.index') }}">Comics</a></li>
            <li><a href="{{ route('comics.create') }}">Aggiungi Comics</a></li>
            <li><a href="{{ route('movies') }}">Movies</a></li>
            <li><a href="{{ route('collectibles') }}">Collectibles</a></li>
        </ul>
    </header>
    @yield("jumbo-content")
    <div id="jumbo">
    </div>

    <main>
        @yield('content')
    </main>

    <div id="info">
        <div class="row">
            <div class="col">
                <h3>DC Comics</h3>
                <ul>
                    <li><a href="#">Characters</a></li>
                    <li><a href="#">Comics</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Tv</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">News</a></li>
                </ul>
                <h3>Shop</h3>
                <ul>
                    <li><a href="#">Shop DC</a></li>
                    <li><a href="#">Shop DC Collectibles</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>DC</h3>
                <ul>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy (New)</a></li>
                    <li><a href="#">Ad Choices</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Subscriptions</a></li>
                    <li><a href="#">Talent Workshop</a></li>
                    <li><a href="#">CPSC Certificates</a></li>
                    <li><a href="#">Ratings</a></li>
                    <li><a href="#">Shop Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Sites</h3>
                <ul>
                    <li><a href="#">DC</a></li>
                    <li><a href="#">MAD Magazine</a></li>
                    <li><a href="#">DC Kids</a></li>
                    <li><a href="#">DC Universe</a></li>
                    <li><a href="#">DC Power Visa</a></li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('img/dc-logo-bg.png') }}" alt="Logo">
    </div>

    <footer>
        <button>Sign-up Now!</button>
        <div class="social-media">
            <span>Follow Us</span>
            <a href="#"><img src="{{ asset('img/footer-facebook.png') }}" alt="Facebook"></a>
            <a href="#"><img src="{{ asset('img/footer-twitter.png') }}" alt="Twitter"></a>
            <a href="#"><img src="{{ asset('img/footer-youtube.png') }}" alt="YouTube"></a>
            <a href="#"><img src="{{ asset('img/footer-pinterest.png') }}" alt="Pinterest"></a>
            <a href="#"><img src="{{ asset('img/footer-periscope.png') }}" alt="Periscope"></a>
        </div>
    </footer>
</body>
</html>