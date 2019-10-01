<!--======================================
           START HEADER AREA
       ======================================-->
<section class="header-menu-area">
    <div class="header-menu-fluid">
        <div class="header-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-widget header-widget1">
                            <ul class="contact-info d-flex align-items-center">
                                <li><a href="#"><span class="la la-envelope-o"></span> cindy.leschaud@gmail.com</a></li>
                            </ul>
                        </div><!-- end header-widget -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="header-widget header-widget2 d-flex align-items-center justify-content-end">
                            <div class="header-right-info"></div>
                            <div class="header-right-info d-flex align-items-center"></div>
                        </div><!-- end header-widget -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end header-top -->
        <div class="header-menu-content">
            <div class="container">
                <div class="row align-items-center main-menu-content">
                    <div class="col-lg-3">
                        <div class="logo-box">
                            <a href="index.html" class="logo" title="Aduca">
                                <h2><i class="fas fa-graduation-cap"></i> &nbsp;{{ config('app.name', 'Edu') }}</h2>
                            </a>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-9">
                        <div class="menu-wrapper">
                            <div class="contact-form-action">
                                <!--Contact Form
                                <form method="post">
                                    <div class="row">
                                        <div class="col-lg-12 form-group">
                                            <input class="form-control" type="text" name="search" placeholder="Search for anything">
                                            <span class="la la-search search-icon"></span>
                                        </div>
                                    </div>
                                </form>-->
                            </div><!-- end contact-form-action -->
                            <nav class="main-menu">
                                <ul>
                                    <li><a href="{{ url('/') }}">Accueil</a></li>
                                    <li><a href="mailto:cindy.leschaud@gmail.com">Contact</a></li>
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                            <div class="logo-right-button">
                                <div class="side-menu-open">
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                </div>
                            </div><!-- end logo-right-button -->
                            <div class="side-nav-container">
                                <div class="humburger-menu">
                                    <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
                                </div><!-- end humburger-menu -->
                                <div class="side-menu-wrap">
                                    <ul class="side-menu-ul">
                                        <li class="sidenav__item"><a href="{{ url('/') }}">Accueil</a></li>
                                        <li class="sidenav__item"><a href="mailto:cindy.leschaud@gmail.com">Contact</a></li>
                                    </ul>
                                </div><!-- end side-menu-wrap -->
                            </div><!-- end side-nav-container -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-9 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end header-menu-content -->
    </div><!-- end header-menu-fluid -->
</section><!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->