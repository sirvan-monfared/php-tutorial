<nav class="sidebar-main">
    <div class="left-arrow" id="left-arrow">
        <i data-feather="arrow-left"></i>
    </div>

    <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn"></li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.home') }}">
                    <i class="ri-home-line"></i>
                    <span>پیشخوان</span>
                </a>
            </li>

            <li class="sidebar-list">
                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                    <i class="ri-store-3-line"></i>
                    <span>محصولات</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.product.index') }}">محصولات</a>
                    </li>

                    <li>
                        <a href="{{ route('admin.product.create') }}">افزودن محصول جدید</a>
                    </li>

                    <li>
                        <a href="{{ route('admin.comment.index') }}">دیدگاه ها</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-list">
                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                    <i class="ri-list-check-2"></i>
                    <span>دسته بندی</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.category.index') }}">لیست دسته ها</a>
                    </li>

                    <li>
                        <a href="{{ route('admin.category.create') }}">افزودن دسته جدید</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-list">
                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                    <i class="ri-archive-line"></i>
                    <span>سفارش ها</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.order.index') }}">لیست سفارش ها</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                    <i class="ri-user-3-line"></i>
                    <span>کاربران</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.user.index') }}">لیست کاربران</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.user.create') }}">افزودن کاربر جدید</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="{{ route('home') }}">
                    <i class="ri-list-check"></i>
                    <span>مشاهده سایت</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="right-arrow" id="right-arrow">
        <i data-feather="arrow-right"></i>
    </div>
</nav>