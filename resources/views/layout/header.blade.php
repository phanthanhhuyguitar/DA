<header>
    <!-- Header Start -->
    <div class="header-area">
    <div class="main-header ">
        <div class="header-top black-bg d-none d-sm-block">
            <div class="container">
                <div class="col-xl-12">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="header-info-left">
                            <ul>
                                <li class="title"><span class="flaticon-energy"></span> trending-title</li>
                                <li>Class property employ ancho red multi level mansion</li>
                            </ul>
                        </div>
                        <div class="header-info-right">
                            <ul class="header-date">
                                <li><span class="flaticon-calendar"></span> +880166 253 232</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mid gray-bg">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="header-banner f-right ">
                            <img src="assets/img/gallery/header_card.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                        <!-- sticky -->
                        <div class="sticky-logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-md-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{route('home')}}">Trang chủ</a></li>
                                    <li><a href="">Thể loại</a>


                                        <ul class="submenu">
                                            @foreach($cate as $ct)
                                            <li><a href="the-loai/{{$ct->id}}/{{$ct->TenKhongDau}}}.html">{{$ct->Ten}}</a></li>
                                            @endforeach

                                        </ul>



                                    </li>
                                    <li><a href="">Tin mới</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="{{route('blog')}}">Blog</a></li>
                                            <li><a href="blog_details.html">Blog Details</a></li>
                                            <li><a href="elements.html">Element</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('contact')}}">Liên hệ</a></li>
                                    <li><a href="{{route('about')}}">about</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="header-right f-right d-none d-lg-block">
                            <!-- Heder social -->
                            <ul class="header-social">
                                <li><a href="https://www.fb.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li> <a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                            <!-- Search Nav -->
                            <div class="nav-search search-switch">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-md-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Header End -->
</header>