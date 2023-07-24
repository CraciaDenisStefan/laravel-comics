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

{{$comic['series']}}
@endsection