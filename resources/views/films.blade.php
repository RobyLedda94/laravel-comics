@extends('layouts.app')


@section('content')
    <div class="jumbotron">
    </div>
    <div class="bg-films py-4">
        <div class="container">
            <div class="row">
                @foreach($movies as $movie)
                    <div class="col-12 col-md-4 col-lg-2">
                        <div class="carta mt-3">
                            <img class="img-fluid" src="{{$movie['thumb']}}" alt="">
                            <div class="corpo">
                                <div class="titolo">
                                    <p class="testo">
                                        {{$movie['series']}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection