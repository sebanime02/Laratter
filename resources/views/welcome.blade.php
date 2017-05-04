@extends('layouts.app')
@section('content')

    <div class="title m-b-md">
        Laratter <a href="https://www.laravel.com">By Sebas</a>
    </div>
                @if(isset($teacher))
                <p>Profesor : {{$teacher}}</p>
                @else 
                <p>Profesor a Definir</p>
                @endif

    <div class="links">
        @foreach($links as $link => $text)
        <a href="{{$link}}">{{$text}}</a>
        @endforeach 
    </div>
@endsection
            
