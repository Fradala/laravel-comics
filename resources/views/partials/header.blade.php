<header>
    <div class="rettangolo container-fluid">
        <div class="container d-flex justify-content-end">
            <p class="me-2">
                text
            </p>
            <p>
                text
            </p>
        </div>
       
    </div>
    
    <nav class="navbar">
        <div class="container d-flex justify-content-evenly">
            <img class="logo" src=" {{ Vite::asset('resources/img/dc-logo.png') }} " alt="logo dc">
            <ul class="text-uppercase d-flex">
                        <li>
                            <a href="#">character</a>
                        </li>
                        <li>
                            <a href="#">comics</a>
                        </li>
                        <li>
                            <a href="#">movies</a>
                        </li>
                        <li>
                            <a href="#">tv</a>
                        </li> 
                        <li>
                            <a href="#">games</a>
                        </li>
                        <li>
                            <a href="#">collectible</a>
                        </li>
                        <li>
                            <a href="#">videos</a>
                        </li>
                        <li>
                            <a href="#">fans</a>
                        </li>
                        <li>
                            <a href="#">news</a>
                        </li> 
                        <li>
                            <a href="#">shop</a>
                    </li>
                </ul>
            <form class="d-flex ricerca" role="search">
                <input class="form-control me-2" type="search"          placeholder="Search" aria-label="Search">
                
            </form>
        </div>
    </nav>
    <section class="container-fluid">
        <img class="jumbotron" src=" {{ Vite::asset('resources/img/jumbotron.jpg') }} " alt="jumbo">

    </section>
    
</header>