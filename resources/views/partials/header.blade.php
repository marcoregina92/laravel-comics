<header class="d-flex container-fluid justify-content-between">
    <img class="mt-4" src="assets/images/dc-logo.png" alt="">
    <nav class="d-flex align-items-center">
        @foreach ($menuLink as $link)
        <a class="linkItem px-3" href="">{{ $link }}</a>
        @endforeach
    </nav>
    <form class="form-inline d-flex align-items-center">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <i class="fa-solid fa-magnifying-glass mx-2"></i>
    </form>
</header>