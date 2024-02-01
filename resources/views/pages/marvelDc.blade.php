@extends('layout.app')

@section('main-content')
    <section class="marvel">
        <div class="container">
            <div class="row">
                <div class="row row-cols-4 row-cols-sm-4 row-cols-md-4 row-cols-x1-4 g-3">
                    @foreach ($comic as $serie )
                        <div class="col">
                            <div class="card">
                                <img src="{{ $serie['thumb'] }} " alt="">
                                <div class="card-body">
                                    <p>
                                        {{ $serie['series'] }}
                                    </p>

                                </div>

                            </div>

                        </div>
                        
                    @endforeach

                </div>

            </div>

        </div>

    </section>
    <section class="rettangolo-blu ">
        <div class="container">
            <ul class="d-flex justify-content-evenly">
                <li class="d-flex">
                    <img class="icon" src=" {{ Vite::asset('resources/img/buy-comics-digital-comics.png') }} " alt="icona dc">
                    <p class="text-uppercase">
                        digital comics
                    </p>
                </li>
                <li class="d-flex">
                    <img class="icon" src=" {{ Vite::asset('resources/img/buy-comics-digital-comics.png') }} " alt="icona dc">
                    <p class="text-uppercase">
                        digital comics
                    </p>
                </li>
                <li class="d-flex">
                    <img class="icon" src=" {{ Vite::asset('resources/img/buy-comics-digital-comics.png') }} " alt="icona dc">
                    <p class="text-uppercase">
                        digital comics
                    </p>
                </li>
                <li class="d-flex">
                    <img class="icon" src=" {{ Vite::asset('resources/img/buy-comics-digital-comics.png') }} " alt="icona dc">
                    <p class="text-uppercase">
                        digital comics
                    </p>
                </li>
            </ul>
        </div>
       
    </section>
@endsection