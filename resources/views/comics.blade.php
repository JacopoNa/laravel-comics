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

    <div class="shop">
        <div class="container">
            <ul>
                <li>
                    <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="dc image">
                    <span>DIGITAL COMICS</span>
                </li>

                 <li>
                    <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="dc image">
                    <span>DC MERCHANDISE</span>
                </li>

                 <li>
                    <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="dc image">
                    <span>SUBSCRIPTION</span>
                </li>

                 <li>
                    <img class="locator" src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="dc image">
                    <span>COMIC SHOP LOCATOR</span>
                </li>

                 <li>
                    <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="dc image">
                    <span>DC POWER VISA</span>
                </li>
            </ul>
        </div>
    </div>
@endsection