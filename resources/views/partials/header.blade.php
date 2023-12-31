
<header>
    <div class="pre_header">
        <div class="container d-flex justify-content-end">
           <div class="mx-5">
                <a class=" text-decoration-none text-white" href="#" >
                        DC POWER&#8480 VISA&reg
                </a>
           </div>
           <div>
                <a class="dropdown-toggle text-decoration-none text-white" href="#" role="button" data-bs-toggle="dropdown" >
                    ADDITIONAL DC SITE
                </a>
           </div>
        </div>
    </div>
    <div class="container">
        <!-- Logo -->
        <div class="row justify-content-between  align-items-center">
            <div class="col py-2">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}">
            </div>
            <div class="col d-flex justify-content-end align-items-center">
                <!-- Menu -->
                <ul class="list-unstyled menu_header list-group list-group-horizontal px-2">
                    <li><a href="/">Characters</a></li>
                    <li><a href="{{ route('homepage')}}">Comics</a></li>
                    <li><a href="/">Movies</a></li>
                    <li><a href="/">Tv</a></li>
                    <li><a href="/">Games</a></li>
                    <li><a href="/">Collectibles</a></li>
                    <li><a href="/">Videos</a></li>
                    <li><a href="/">Fans</a></li>
                    <li><a href="/">News</a></li>
                    <li><a href="/">Shop</a></li>
                </ul>
                <!-- Hamburger menu -->
                <div class="btn-group">
                <button type="button" class="btn hamburgher_menu border-0" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-bars"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                <li><a :href="/">Characters</a></li>
                    <li><a :href="{{ route('homepage')}}">Comics</a></li>
                    <li><a :href="/">Movies</a></li>
                    <li><a :href="/">Tv</a></li>
                    <li><a :href="/">Games</a></li>
                    <li><a :href="/">Collectibles</a></li>
                    <li><a :href="/">Videos</a></li>
                    <li><a :href="/">Fans</a></li>
                    <li><a :href="/">News</a></li>
                    <li><a :href="/">Shop</a></li>
                </ul>
                </div>
                <!-- Search -->
                <div class="search_header border-bottom border-3 border border-0 border-primary">
                    <div class="d-flex ">
                        <input type="text"  class="border-0 text-end" placeholder="Search">
                        <i class="fa-solid fa-magnifying-glass mx-1"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>