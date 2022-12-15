@extends('layouts.app')

@section('content')
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
@endsection
