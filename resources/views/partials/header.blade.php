<header class="main-header d-flex align-items-center">
    <div class="container">
        <div class="row d-flex">
            <div class="col-2">
                <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="Logo">
            </div>

            <div class="col-10 d-flex">
                <ul class="d-flex align-items-center m-0 w-100">
                    <li><a href="{{ route('home')}}">HOME</a></li>
                    <li><a href="{{ route('comics')}}">COMICS</a></li>
                    <li>MOVIES</li>
                    <li>TV</li>
                    <li>GAMES</li>
                    <li>VIDEOS</li>
                    <li>FANS</li>
                    <li>NEWS</li>
                    <li>SHOP</li>
                </ul>
            </div>
        </div>
    </div>
</header>