
<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>Naioth of Ramah</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{route('home')}}" class='{{($route=='home')?'active':' '}}'>Home</a></li>
                <li><a href="{{route('about')}}" class='{{($route=='about')?'active':' '}}'>About</a></li>
                <li><a href="{{route('gallery')}}" class='{{($route=='gallery')?'active':' '}}'>Gallery</a></li>
                <li><a href="{{route('worships')}}" class='{{($route=='worships')?'active':' '}}'>Worships-Songs</a></li>
                <li class="dropdown"><a href="#"><span>Resources</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Prayers</a></li>
                        <li class="dropdown"><a href="#"><span>Teachings</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Sunday Sermons</a></li>
                                <li><a href="#">Short Messages</a></li>
                                <li><a href="#">Series</a></li>
                                <li><a href="#">Articles</a></li>
                                <li><a href="#">Other Collections</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Worships-Songs</a></li>
                        <li><a href="#">Testimonies</a></li>
                        <li><a href="#">Events</a></li>
                    </ul>
                </li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li><a class="get-a-quote" href="get-a-quote.html">አማርኛ/English</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<!-- End Header -->
