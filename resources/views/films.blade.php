@extends('layouts.app')


@section('content')
    <div class="jumbotron">
    </div>
    <div class="bg-films">
        <div class="container">
            <div class="row">
                @foreach($movies as $movie)
                    {{var_dump($movie)}}
                @endforeach
            </div>
        </div>
    </div>
@endsection