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

</main>
@endsection
