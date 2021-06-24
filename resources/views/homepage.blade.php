@extends('layouts.default')

@section('titolo', 'homepage')

@section('content')
<main>

<main class="mainBG">
    <div class="BlueBtn BlueWhite">CURRENT SERIES</div>
    <div class="container">
        <div class="wrapper">
            <div class="DivComics">
            @foreach($comicsList as $key => $singleComic)
                <div class="DivComicsSingle">
                    <a href="{{ route('comics', ['index' => $key]) }}"><img src="{{ $singleComic['thumb'] }}" class="ComicsCover" alt="cover"></a>
                    <h5><a href="{{ route('comics', ['index' => $key]) }}" class="none">{{ $singleComic['series'] }}</a></h5>
                </div> 
            @endforeach
            </div>
            <div class="BlueBtnMini BlueWhite">LOAD MORE</div>
        </div>
    </div>

    <div class="blueNav BlueWhite">

        <div class="container bluenav2">
            <a><img src="{{ asset('images/buy-comics-digital-comics.png') }}"><span>DIGITAL COMICS</span></a>

            <a><img src="{{ asset('images/buy-comics-merchandise.png') }}"><span>DC MERCHANDISE</span></a>

            <a><img src="{{ asset('images/buy-comics-subscriptions.png') }}"><span>SUBSCRIPTION</span></a>
            
            <a><img src="{{ asset('images/buy-comics-shop-locator.png') }}"><span>COMIC SHOP LOCATOR</span></a>

            <a><img src="{{ asset('images/buy-dc-power-visa.svg') }}"><span>DC POWER VISA</span></a>
        </div>

    </div>


</main>
@endsection
