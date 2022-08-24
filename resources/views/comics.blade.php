@extends('layouts.app')

@section('main_content')
    <div class="content">
        <div class="jumbo">
            <div class="box-text">CURRENT SERIES</div>
        </div>

        <div class="container">
            <div class="comic-list">
                @foreach ($comics_array as $comic)
                    <div class="single-card">
                        <div class="image-card">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                
                        <h5>{{ $comic['title'] }}</h5>
                    </div>
                @endforeach
            </div>

            <a href="#" class="load"><span>LOAD MORE</span></a>
        </div>
    </div>
@endsection