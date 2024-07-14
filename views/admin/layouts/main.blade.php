<!DOCTYPE html>
<html lang="fa" dir="rtl">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="https://laraplus.ir">
    <link rel="icon" href="{{ asset('front/images/logo/2.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('front/images/logo/2.png') }}" type="image/x-icon">
    <title>{{ $page_title ?? 'لاراکامرس - مدیریت' }}</title>


    <!-- Linear Icon css -->
    <link rel="stylesheet" href="<?= asset('admin/css/linearicon.css') ?>">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="<?= asset('admin/css/vendors/font-awesome.css') ?>">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="<?= asset('admin/css/vendors/themify.css') ?>">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="<?= asset('admin/css/ratio.css') ?>">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="<?= asset('admin/css/remixicon.css') ?>">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="<?= asset('admin/css/vendors/feather-icon.css') ?>">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="<?= asset('admin/css/vendors/scrollbar.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset('admin/css/vendors/animate.css') ?>">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?= asset('admin/css/vendors/bootstrap.css') ?>">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="<?= asset('admin/css/vector-map.css') ?>">

    <!-- Slick Slider Css -->


    @yield('css')

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="<?= asset('admin/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset('admin/css/font.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset('admin/css/custom.css') ?>">
</head>

<body>

<!-- tap on top start -->
<div class="tap-top">
    <span class="lnr lnr-chevron-up"></span>
</div>
<!-- tap on tap end -->

<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper m-0">
            <div class="header-logo-wrapper p-0">
                <div class="logo-wrapper">
                    <a href="index.html">
                        <img class="img-fluid main-logo" src="{{ asset('admin/images/logo/1-white.png') }}" alt="logo">
                        <img class="img-fluid white-logo" src="{{ asset('admin/images/logo/1-white.png') }}" alt="logo">
                    </a>
                </div>
                <div class="toggle-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                    <a href="{{ route('admin.home') }}">
                        <img src="{{ asset('admin/images/logo/1-white.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>


            <div class="nav-right col-6 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li>
                            <span class="header-search">
                                <i class="ri-search-line"></i>
                            </span>
                    </li>
                    <li>
                        <div class="mode">
                            <i class="ri-moon-line"></i>
                        </div>
                    </li>
                    <li class="profile-nav onhover-dropdown pe-0 me-0">
                        <div class="media profile-media">
                            <img class="user-profile rounded-circle" src="{{ asset('admin/images/users/4.jpg') }}"
                                 alt="">
                            <div class="user-name-hide media-body">
                                <span>{{ auth()->user()->fullName() }}</span>
                                <p class="mb-0 font-roboto">مدیر<i class="middle ri-arrow-down-s-line"></i></p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li>
                                <a href="{{ route('admin.user.index') }}">
                                    <i data-feather="users"></i>
                                    <span>کاربران</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.order.index') }}">
                                    <i data-feather="archive"></i>
                                    <span>سفارشات</span>
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('auth.logout') }}" class="d-flex align-items-center justify-content-start ">
                                    @include('partials._csrf')
                                    @method('DELETE')
                                    <i data-feather="log-out"></i>
                                    <button type="submit" class="btn btn-default p-0">خروج</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Header Ends-->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div id="sidebarEffect"></div>
            <div>
                <div class="logo-wrapper logo-wrapper-center">
                    <a href="index.html" data-bs-original-title="" title="">
                        <img class="img-fluid for-white" src="{{ asset('admin/images/logo/full-white.png') }}" alt="logo">
                    </a>
                    <div class="back-btn">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    
                </div>
                <div class="logo-icon-wrapper">
                    <a href="index.html">
                        <img class="img-fluid main-logo main-white" src="{{ asset('admin/images/logo/logo.png') }}" alt="logo">
                        <img class="img-fluid main-logo main-dark" src="{{ asset('admin/images/logo/logo-white.png') }}"
                             alt="logo">
                    </a>
                </div>

                @include('admin.layouts._sidebar_menu')
            </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                @yield('content')
            </div>

            <div class="container-fluid">
                <!-- footer start-->
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">تهیه شده در <a href="https://laraplus.ir/course/laraplus-modern-php-from-zero-to-professional" target="_blank">دوره آموزش برنامه نویسی PHP مدرن</a> - لاراپلاس</p>
                        </div>
                    </div>
                </footer>
                <!-- footer end-->
            </div>
        </div>

    </div>
    <!-- Page Body End -->
</div>
<!-- page-wrapper End-->

<!-- Modal Start -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title" id="staticBackdropLabel">خروج</h5>
                <p>آیا برای خارج شدن مطمئن هستید؟</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="button-box">
                    <button type="button" class="btn btn--no" data-bs-dismiss="modal">خیر</button>
                    <button type="button" class="btn  btn--yes btn-primary">بله</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- latest js -->
<script src="<?= asset('admin/js/jquery-3.6.0.min.js') ?>"></script>

<!-- Bootstrap js -->
<script src="<?= asset('admin/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>

<!-- feather icon js -->
<script src="<?= asset('admin/js/icons/feather-icon/feather.min.js') ?>"></script>
<script src="<?= asset('admin/js/icons/feather-icon/feather-icon.js') ?>"></script>

<!-- scrollbar simplebar js -->
<script src="<?= asset('admin/js/scrollbar/simplebar.js') ?>"></script>
<script src="<?= asset('admin/js/scrollbar/custom.js') ?>"></script>

<!-- Sidebar jquery -->
<script src="<?= asset('admin/js/config.js') ?>"></script>

<!-- 1111 tooltip init js -->
<script src="<?= asset('admin/js/tooltip-init.js') ?>"></script>

<!-- Plugins JS -->
<script src="<?= asset('admin/js/sidebar-menu.js') ?>"></script>


<!-- customizer js -->
<script src="<?= asset('admin/js/customizer.js') ?>"></script>

@yield('scripts')

<!-- sidebar effect -->
<script src="<?= asset('admin/js/sidebareffect.js') ?>"></script>

<!-- Theme js -->
<script src="<?= asset('admin/js/script.js') ?>"></script>

@yield('js')

</body>


</html>