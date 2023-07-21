<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
        <main>
       
        <div class="cover_img">
             <!-- Jumbotron -->
                <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
        </div>
        <div class="bg_comics">
            <div class="container position-relative ">
                    <div class="curent_series">CURENT SERIES</div>
                    <div class="row py-5">
                        <!-- Card fumetti -->
                        @foreach($fumetti as $fumetto)
                            <div class="card_fumetto col-12 col-md-6 col-lg-2 text-white">
                                <img src="{{ $fumetto['thumb']}}" alt="">
                                <div class="title_card mb-1">
                                {{$fumetto['series']}}
                                </div>
                            </div>
                        @endforeach   
                    </div> 
            </div>
            <div class="button_main_first text-center">
                        <button>LOAD MORE</button>
            </div> 
        </div>
        <div class="main_second py-5">
            <!-- Main secondo tutti shop -->
            <div class=" container ">
                <div class="row justify-content-center">
                    <div class= "col-12 col-md-6 col-lg-2 d-flex align-items-center p-3"> 
                        <div class="col-3">
                            <img class="img-fluid" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                        </div>   
                        <div class="col-9 text-white mx-2">
                            DIGITAL COMICS
                        </div>
                    </div>
                    <div class= "col-12 col-md-6 col-lg-2 d-flex align-items-center p-3"> 
                        <div class="col-3">
                            <img class="img-fluid" src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                        </div>   
                        <div class="col-9 text-white mx-2">
                            DC MERCHANDISE
                        </div>
                    </div>
                    <div class= "col-12 col-md-6 col-lg-2 d-flex align-items-center p-3"> 
                        <div class="col-3">
                            <img class="img-fluid" src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                        </div>   
                        <div class="col-9 text-white mx-2">
                            SUBSCRIBTION
                        </div>
                    </div>
                    <div class= "col-12 col-md-6 col-lg-2 d-flex align-items-center p-3"> 
                        <div class="col-3">
                            <img class="img-fluid" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                        </div>   
                        <div class="col-9 text-white mx-2">
                            COMIC SHOP LOCADOR
                        </div>
                    </div>
                    <div class= "col-12 col-md-6 col-lg-2 d-flex align-items-center p-3"> 
                        <div class="col-3">
                            <img class="img-fluid" src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                        </div>   
                        <div class="col-9 text-white mx-2">
                            DC POWER VISA
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main>

</body>

</html>