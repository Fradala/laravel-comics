@extends('layout.app')

@section('main-content')
    <section class="marvel">
        <div class="container">
            <div class="row">
                <div class="row-cols-md-4 row-cols-xl-4 g-4">
                    @foreach ($comics as $comic)
                        <div class="col">
                            <div class="card">
                                <img src="" alt="">
                                <div class="card-body">
                                    <p>
                                        {{ $comic['series']}}
                                    </p>

                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </section>
@endsection