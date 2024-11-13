<header id="navbar" class="py-5 border-b border-solid border-gray-400">
    <div class="container max-w-screen-xl mx-auto flex justify-between items-center relative px-5 lg:px-0">
        <a href="/">@include('front.partials.svg.logo-svg')</a>
        <nav id="nav-menu" data-menu="closed"
            class="bg-white absolute top-0 min-h-[100vh] w-full px-5 duration-500 ease-out z-20 lg:min-h-fit lg:static lg:bg-transparent lg:w-auto ">
            <div class="cursor-pointer absolute right-5 top-5"><i id="closeicon" class="fa-solid fa-xmark"></i>
            </div>
            <ul class="flex flex-col items-center gap-8 pt-20 lg:pt-0 lg:flex-row">
                <li><a class="nav-link" href="#" title="#">TECNOLOGY</a></li>
                <li><a class="nav-link" href="#" title="#">BUSINESS</a></li>
                <li><a class="nav-link" href="#" title="#">WORLD NEWS</a></li>
                <li><a class="nav-link" href="#" title="#">CULTURE</a></li>
                <li><a class="nav-link" href="#" title="#">HEALTH</a></li>
                <li><a class="nav-link" href="#" title="#">SPORTS</a></li>
            </ul>
        </nav>

        <form action="#" method="#" class="hidden lg:block">
            <input class="border border-solid border-gray-500 px-6 py-2" type="text" placeholder="Search here...">
            <button type="submit" class="px-3 py-2 bg-black text-white">Search</button>
        </form>
        <div class="cursor-pointer lg:hidden"><i id="hamburger" class="fa-solid fa-bars text-2xl"></i></div>

    </div>
</header>
