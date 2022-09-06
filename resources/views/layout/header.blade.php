<header class="">
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent header-light fixed-top header-reverse-scroll mobile-top-space">
        <div class="container-lg nav-header-container">
            <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('images/logo-white.png')}}"  class="default-logo" alt="">
                    <img src="{{asset('images/logo-black.png')}}"  class="alt-logo" alt="">
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
                            <a href="/" class="nav-link">@lang("texts.home")</a>
                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="/about" class="nav-link">@lang("texts.about-us")</a>

                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="javascript:void(0);" class="nav-link">@lang("texts.business-direction")</a><i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown">
                                    <a data-bs-toggle="dropdown" href="javascript:void(0);">@lang('texts.clinic')<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/company/1">DR.CHINGUN'S AESTHETIC & SURGERY CLINIC</a></li>
                                        <li><a href="/company/3">DR.CHINGUN'S HAIR & VITAMIN CLINIC</a></li>
                                        <li><a href="/company/2">DR.CHINGUN'S BEAUTY MED CLINIC</a></li>
                                        <li><a href="/company/4">ULAANBAATAR MEDICA</a></li>
                                    </ul>
                                <li class="dropdown">
                                    <a data-bs-toggle="dropdown" href="javascript:void(0);">@lang('texts.other')<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/company/5">ZUNA</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="/blog" class="nav-link">@lang("texts.news")</a>

                        </li>

                        <li class="nav-item dropdown simple-dropdown">
                            <a href="/contact" class="nav-link">@lang("texts.contact-us")</a>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-auto text-end pe-0 font-size-0">

                <div class="header-language header-social-icon dropdown d-lg-inline-block">
                    <a href="javascript:void(0);"><i class="feather icon-feather-globe"></i></a>
                    <ul class="dropdown-menu text-white alt-font">
                        <li><a href="/setlocale/en" title="EN"><span class="icon-country"><img src="{{asset('images/country-flag-16X16/usa.png')}}" alt=""></span>EN</a></li>
                        <li><a href="/setlocale/mn" title="MN"><span class="icon-country"><img src="{{asset('images/country-flag-16X16/mongolia.png')}}" alt=""></span>MN</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
