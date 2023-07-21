
<header>
    <div class="pre_header">
        <div class="container d-flex justify-content-end">
            dede
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-between my-2 align-items-center">
            <div class="col">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}">
            </div>
            <div class="col d-flex justify-content-end align-items-center">
                <ul class=" menu_header list-group list-group-horizontal px-2">
                    <li><a :href="/">Characters</a></li>
                    <li><a :href="/">Comics</a></li>
                    <li><a :href="/">Movies</a></li>
                    <li><a :href="/">Tv</a></li>
                    <li><a :href="/">Games</a></li>
                    <li><a :href="/">Collectibles</a></li>
                    <li><a :href="/">Videos</a></li>
                    <li><a :href="/">Fans</a></li>
                    <li><a :href="/">News</a></li>
                    <li><a :href="/">Shop</a></li>
                </ul>
                <div class="hamburgher_menu px-4">
                    <i class="fa-solid fa-bars"></i>
                </div>

                <div class="search_header border-bottom border border-0 border-primary ">
                    <div class="d-flex ">
                    <input type="text"  class="border-0 text-end" placeholder="Search">
                    <i class="fa-solid fa-magnifying-glass mx-1"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>