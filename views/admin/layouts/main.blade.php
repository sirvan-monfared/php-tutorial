<!DOCTYPE html>
<html lang="fa" dir="rtl">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="laraplus admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, laraplus admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>پیشخوان </title>


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
    <link rel="stylesheet" href="<?= asset('admin/css/vendors/slick.css') ?>">

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
                        <img class="img-fluid main-logo" src="assets/images/logo/1.png" alt="logo">
                        <img class="img-fluid white-logo" src="assets/images/logo/1-white.png" alt="logo">
                    </a>
                </div>
                <div class="toggle-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                    <a href="index.html">
                        <img src="assets/images/logo/1.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>

            <form class="form-inline search-full" action="javascript:void(0)" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                   placeholder="جستجو کنید ..." name="q" title="" autofocus>
                            <i class="close-search" data-feather="x"></i>
                            <div class="spinner-border Typeahead-spinner" role="status">
                                <span class="sr-only">لطفا صبر کنید ...</span>
                            </div>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div>
            </form>
            <div class="nav-right col-6 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li>
                            <span class="header-search">
                                <i class="ri-search-line"></i>
                            </span>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="notification-box">
                            <i class="ri-notification-line"></i>
                            <span class="badge rounded-pill badge-theme">4</span>
                        </div>
                        <ul class="notification-dropdown onhover-show-div">
                            <li>
                                <i class="ri-notification-line"></i>
                                <h6 class="f-18 mb-0">پیام ها</h6>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-circle me-2 font-primary"></i>پردازش محصولات<span
                                            class="pull-right">10 دقیقه</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-circle me-2 font-success"></i>تکمیل سفارش<span
                                            class="pull-right">1 ساعت</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-circle me-2 font-info"></i>بلیط های تولید شده<span
                                            class="pull-right">3 ساعت</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-circle me-2 font-danger"></i>تحویل کامل<span
                                            class="pull-right">6 ساعت</span>
                                </p>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="javascript:void(0)">نمایش تمام پیام ها</a>
                            </li>
                        </ul>
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
                                <span>ایلان ماسک</span>
                                <p class="mb-0 font-roboto">مدیر<i class="middle ri-arrow-down-s-line"></i></p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li>
                                <a href="all-users.html">
                                    <i data-feather="users"></i>
                                    <span>کاربران</span>
                                </a>
                            </li>
                            <li>
                                <a href="order-list.html">
                                    <i data-feather="archive"></i>
                                    <span>سفارشات</span>
                                </a>
                            </li>
                            <li>
                                <a href="support-ticket.html">
                                    <i data-feather="phone"></i>
                                    <span>تیکت پشتیبانی</span>
                                </a>
                            </li>
                            <li>
                                <a href="profile-setting.html">
                                    <i data-feather="settings"></i>
                                    <span>تنظیمات</span>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                   href="javascript:void(0)">
                                    <i data-feather="log-out"></i>
                                    <span>خروج</span>
                                </a>
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
                        <img class="img-fluid for-white" src="assets/images/logo/full-white.png" alt="logo">
                    </a>
                    <div class="back-btn">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                    </div>
                </div>
                <div class="logo-icon-wrapper">
                    <a href="index.html">
                        <img class="img-fluid main-logo main-white" src="assets/images/logo/logo.png" alt="logo">
                        <img class="img-fluid main-logo main-dark" src="assets/images/logo/logo-white.png"
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
                            <p class="mb-0">راست چین شده توسط : ایلان ماسک</p>
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