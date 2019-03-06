<div id="app">
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">machkhana</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                    <a href="{{route('home')}}"><li>მთავარი</li></a>
                    <a href="{{route('product')}}"><li>პროდუქცია</li></a>
                    <a href="{{route('about')}}"><li>ჩვენ შესახებ</li></a>
                    <a href="{{route('contact')}}"><li>კონტაქტი</li></a>
            </ul>
        </div>
    </div>
</nav>