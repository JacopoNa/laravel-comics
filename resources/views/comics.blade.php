@extends('layouts.app')

@section('classes')
    back-color
@endsection

@section('main_content')
    <div class="content">
        <div class="jumbo">
            <div class="box-text">CURRENT SERIES</div>
        </div>

        <div class="container">
            <div class="comic-list">
                @foreach ($comics_array as $comic)
                    <div class="single-card">
                        <a href="{{ route('description', ['id' => $comic['id']]) }}">
                            <div class="image-card">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                    
                            <h5>{{ $comic['title'] }}</h5>
                        </a>
                    </div>
                @endforeach
            </div>

            <a href="#" class="load"><span>LOAD MORE</span></a>
        </div>
    </div>

    @include('components.shop')

@endsection