@extends('layouts.app')

@section('content')
<div class="cover_img">
    <!-- Jumbotron -->
       <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
       <div class="down_jumbo">
            <div class="container d-flex justify-content-center">
                <div class="col-10">
                    <div class="img_single">
                        <img src="{{$comic['thumb']}}">
                    </div> 
                </div>      
            </div>
       </div>
</div>

<div class="container d-flex justify-content-center py-3">
    <div class="col-12 col-md-10">
        <div class="row">
            {{-- Iizio parte iniziale con titolo del fumetto --}}
            <div class="col-12 col-lg-8 pt-5">
                <h4 class="text-uppercase color_show">
                    {{$comic['title']}}
                </h4>
                <div class="col-12 d-flex bg_price  fw-semibold text-white">
                    <div class="col-3 p-2">
                        {{-- Prezzo del fumetto --}}
                       <span class="text_avaible"> U.S. PRICE :</span> {{$comic['price']}}
                    </div>
                    <div class="d-flex justify-content-end align-items-center col-9 ">
                        {{-- Disponibilita --}}
                        <div class="text_avaible p-2 border-black border-end">
                            AVAIBLE
                        </div>
                        <div>
                            <a class="dropdown-toggle text-decoration-none text-white px-3" href="#" role="button" data-bs-toggle="dropdown" >
                               Check Aviaibility
                            </a>
                        </div>
                    </div>
                </div>
                <p class="pt-3">{{$comic['description']}}</p>
            </div>
            <div class="col-12 col-lg-4 p-4">
                {{-- Publicita --}}
                <div class="text-end fw-semibold">
                    ADVERTISMENT
                </div>
                <img class="w_100" src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
            </div> 
        </div>
    </div>
</div>
<div class="container_down">
    <div class="container d-flex justify-content-center">
        <div class="col-12 col-md-10">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h5 class="pb-3 fw-semibold color_show">TALENT</h5>
            <hr>      
                    {{-- Talent con dentro gli artisti e scrittori --}}
                    <div class="row justify-content-between">
                        <div class="col-4 fw-semibold color_show">Art by : </div>
                        <div class="col-8">
                            @foreach($comic['artists'] as $artist)
                           <a class="text-decoration-none" href="#">{{$artist}}</a> ,
                            @endforeach
                        </div>
                    </div>
            <hr>
                    <div class="row justify-content-between">
                        <div class="col-4 fw-semibold color_show">Writen by : </div>
                        <div class="col-8">
                            @foreach($comic['writers'] as $writer)
                            <a class="text-decoration-none" href="#"> {{$writer}}</a> ,
                            @endforeach
                        </div>
                    </div>
            <hr>
                </div>

                <div class="col-12 col-lg-6">

                    <h5 class="pb-3 fw-semibold color_show">Specs</h5>
                    <hr>      
                            {{-- Specs con nome della serie prezzo e data --}}
                            <div class="row justify-content-between">
                                <div class="col-4 fw-semibold color_show">Series : </div>
                                <div class="col-8">
                                   <a class="text-decoration-none" href="#">{{$comic['series']}}</a> 
                                </div>
                            </div>
                    <hr>
                            <div class="row justify-content-between">
                                <div class="col-4 fw-semibold color_show">U.S. Price : </div>
                                <div class="col-8">
                                    {{$comic['price']}} 
                                </div>
                            </div>
                    <hr>
                            <div class="row justify-content-between">
                                <div class="col-4 fw-semibold color_show">On Sale Date : </div>
                                <div class="col-8">
                                    {{date("M d Y", strtotime($comic['sale_date']))}}
                                </div>
                            </div>
                    <hr>
                        
                </div>
            </div>
        </div>
    </div>


</div>
<div class="container_marketing">
    <div class="container d-flex justify-content-center">
        <div class="col-12 col-md-10">
            {{-- Inizio parte commerciale  --}}
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-between  p-3 border_r_l">
                    <div class="col-6 font_size fw-bolder text-secondary">DIGITAL COMICS</div>
                    <div class="col-2"><img class="img-fluid" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt=""></div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-between  p-3">
                    <div class="col-6 font_size fw-bolder text-secondary">SHOP DC</div>
                    <div class="col-2"><img class="img-fluid" src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt=""></div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-between p-3 border_r_l">
                    <div class="col-6 font_size fw-bolder text-secondary">COMIC SHOP LOCATOR</div>
                    <div class="col-2"><img class="img-fluid" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt=""></div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-between   p-3 border_r">
                    <div class="col-6 font_size fw-bolder text-secondary">SUBSCRIBTION</div>
                    <div class="col-2"><img class="img-fluid" src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection