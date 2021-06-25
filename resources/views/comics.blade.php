@extends('layouts.default')

@section('titolo', 'comics')

@section('content')
@php 
$saleDate = $singleComic['sale_date'];
$date = date_create($saleDate);
$formatDate = date_format($date, "M d Y");
@endphp

<main>
    <div class="blueDiv"></div>
    <div class="containerComics">

        <img src="{{$singleComic['thumb']}}" class="sposta">

        <div class="contentBox">
            <div class="flex padpad">
                <div class="lxSide">
                    <h2>{{$singleComic['title']}}</h2>
                    <div class="greenBar white">
                        <div class="price">
                            <span>U.S. Price: <strong>{{$singleComic['price']}}</strong></span>
                            <span class="avail">AVAILABLE</span>
                        </div>
                        <div class="greenBtn white">
                            <a>Check Availability</a>
                        </div>
                    </div>
                    <p>
                        {{$singleComic['description']}}
                    </p>
                </div>
                <div class="column">
                    <span class="advert">ADVERTISEMENT</span>
                    <img src="{{ asset('images/provaadv.png') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="lightgrayCont">
        <div class="containerComics">
            <div class="flex">

                <div class="divdue">
                    <h3 class="padpad">Talent</h3>
                    <div class="graybot flex">
                        <div class="">
                            <span>Art by:</span>
                        </div>
                        <div class="">
                            <span>
                            @foreach($singleComic['artists'] as $artist)
                                <a href="#">{{$artist}}</a>
                            @endforeach
                            </span>
                        </div>
                    </div>
                    <div class="graybot flex">
                        <div class="">
                            <span>Written by:</span>
                        </div>
                        <div class="">
                            <span>
                            @foreach($singleComic['writers'] as $writer)
                                <a href="#">{{$writer}}</a>
                            @endforeach
                            </span>
                        </div>
                    </div>
                </div>

                <div class="divdue">
                    <h3 class="padpad">Specs</h3> 
                    <div class="graybot flex">
                        <div>
                            <span>Series:</span>
                        </div>
                        <div>
                            <a href="#"><span>{{$singleComic['series']}}</span></a>
                        </div>
                    </div>
                    <div class="graybot flex">
                        <div>
                            <span>U.S. Price:</span>
                        </div>
                        <div>
                            <span>{{$singleComic['price']}}</span>
                        </div>
                    </div>
                    <div class="graybot flex">
                        <div>
                            <span>On Sale Date:</span>
                        </div>
                        <div>
                            <span>{{ $formatDate }}</span>
                        </div>
                    </div>
                    
                </div>                        
            </div>

        </div>
        
        <div class="containerComics">
            <div class="flex test222">
                <a href="#">
                    <div class="bottomDiv">
                        <span class="fontgray">DIGITAL COMICS</span>
                        <div class="imgWindow"></div>
                    </div>
                </a>
                <a href="#">
                    <div class="bottomDiv">
                        <span class="fontgray">SHOP DC</span>
                        <div class="imgWindow"></div> 
                    </div>
                </a>
                <a href="#">
                    <div class="bottomDiv">
                        <span class="fontgray">COMIC SHOP LOCATOR</span>
                        <div class="imgWindow"></div>
                    </div>
                </a>
                <a href="#">
                    <div class="bottomDiv">
                        <span class="fontgray">SUBSCRIPTIONS</span>
                        <div class="imgWindow"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</main>
@endsection
