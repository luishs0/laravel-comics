<header>
    {{-- HEADER TOP --}}

    <div class="header-top d-flex justify-content-end">
        <div class="container header-top-container text-end">
            <span class="me-4">DC POWER VISA</span>
            <span>ADITIONAL DC SITES</span>
        </div>
    </div>

    {{-- /HEADER TOP --}}



    {{-- NAVBAR --}}
    <div class="container-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <div class="logo-dc">
                        <img class="logo-dc" src="https://upload.wikimedia.org/wikipedia/commons/3/3d/DC_Comics_logo.svg"
                            alt="">
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">CHARACTERS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">COMICS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">MOVIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">TV</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">GAMES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">COLLECTIBLES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">VIDEOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">NEWS</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    SHOP
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex navbar-form" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    {{-- /NAVBAR --}}


    {{-- HEADER BOTTOM --}}

    <div class="jumbo">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </div>

    {{-- /HEADER BOTTOM --}}
</header>
