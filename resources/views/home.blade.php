@extends('layouts.app')

@section('content')
    {{-- GRID --}}
    <div class="container-grid p-5">
        <div class="container">
            <div class="row">

                @foreach ($comics as $comic)
                    <div class="col-6 col-sm-2 mt-4">
                        <div class="img-grid">
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </div>
                        <div class="text-grid">
                            {{ $comic['title'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- /GRID --}}

    {{-- MAIN-BOTTOM --}}
    <div class="container-main-bottom">
        <div class="container">
            <div class="row row-cols-5 p-5">
                @for ($i = 0; $i < 5; $i++)
                    <div class="col d-flex align-items-center">
                        <div class="img-main-bottom me-2">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                        </div>
                        <div class="text-main-bottom">
                            Digital Comics
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    {{-- /MAIN-BOTTOM --}}
@endsection
