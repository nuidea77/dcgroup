<header class="">
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent header-dark border-bottom border-color-white-transparent fixed-top header-always-fixed-scroll">
        <div class="container-lg nav-header-container">
            <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('images/logo-white.png')}}"  class="default-logo" alt="">
                    <img src="{{asset('images/logo-white.png')}}"  class="alt-logo" alt="">
                    <img src="{{asset('images/logo-black.png')}}"  class="mobile-logo" alt="">
                </a>
            </div>
            <div class="col-auto menu-order px-lg-0">
                <button class="navbar-toggler float-end collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation" aria-expanded="false">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav alt-font">
                        <li class="nav-item dropdown megamenu">
                            <a href="/" class="nav-link">Нүүр</a>
                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="/about" class="nav-link">Бидний тухай</a>

                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="/business" class="nav-link">Бизнесийн чиглэл</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>

                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="/clinic" class="nav-link">Клиник</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>

                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="/contact" class="nav-link">Холбоо барих</a>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-auto text-end pe-0 font-size-0">

                <div class="header-language header-social-icon dropdown d-lg-inline-block">
                    <a href="javascript:void(0);"><i class="feather icon-feather-globe"></i></a>
                    <ul class="dropdown-menu text-white alt-font">
                        <li><a href="" title="English"><span class="icon-country"><img src="{{asset('images/country-flag-16X16/usa.png')}}" alt=""></span>English</a></li>
                        <li><a href="" title="Mongolia"><span class="icon-country"><img src="{{asset('images/country-flag-16X16/mongolia.png')}}" alt=""></span>Mongolia</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
