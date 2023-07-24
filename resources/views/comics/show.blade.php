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
            <div class="col-12 col-lg-8 pt-5">
                <h5 class="text-uppercase">
                    {{$comic['title']}}
                </h5>
                <div class="col-12 d-flex bg_price  fw-semibold text-white">
                    <div class="col-3 p-2">
                       <span class="text_avaible"> U.S. PRICE :</span> {{$comic['price']}}
                    </div>
                    <div class="d-flex justify-content-end align-items-center col-9 ">
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
                <div class="text-end fw-semibold">
                    ADVERTISMENT
                </div>
                <img class="w_100" src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
            </div>
    
        </div>
    </div>
</div>

{{$comic['series']}}
@endsection