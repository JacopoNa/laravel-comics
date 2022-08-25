@extends('layouts.app')

@section('main_content')
    <div class="content">
        <div class="jumbo">
            <div class="comic-box">
                <img src="{{$current_comic['thumb']}}" alt="{{$current_comic['title']}}">
                <span>{{$current_comic['type']}}</span>
                <div>VIEW GALLERY</div>
            </div>
        </div>

        <div class="main-top"></div>

        <div class="container">
            <div class="main-content">
                <div class="comic-text">
                    <h2>{{$current_comic['title']}}</h2>
                    <div class="green-bar">
                        <div class="price">
                           <div>U.S. Price: <span>{{$current_comic['price']}}</span></div>
                           <div>AVAILABLE</div>
                        </div>
                        <div class="ava">Check availability</div>
                    </div>
                    <p>{{$current_comic['description']}}</p>
                </div>

                <div class="advertisement">
                    <div>ADVERTISEMENT</div>
                    <img src="{{ asset('img/adv.jpg') }}" alt="adv">
                </div>
            </div>
        </div>

        <div class="main-bottom">
            <div class="container">
                <div class="info">
                    <div class="talent">
                        <h3>Talent</h3>
                        <div class="by">
                            <span>Art by:</span>
                            @foreach ($current_comic['artists'] as $artist)
                                <div>{{$artist}}</div>
                                @if (!$loop->last),@endif
                            @endforeach
                            
                        </div>

                        <div class="by">
                            <span>Written by:</span>
                            @foreach ($current_comic['writers'] as $writer)
                                <div>{{$writer}}</div>
                                @if (!$loop->last),@endif
                            @endforeach
                        </div>
                    </div>
                    <div class="specs">
                        <h3>Specs</h3>
                        <div class="by">
                            <span>Series:</span>
                            <div>{{$current_comic['series']}}</div>
                        </div>
                        <div class="by">
                            <span>U.S. Price:</span>
                            <div>{{$current_comic['price']}}</div>
                        </div>
                        <div class="by">
                            <span>On Sale Date:</span>
                            <div>{{$current_comic['sale_date']}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection