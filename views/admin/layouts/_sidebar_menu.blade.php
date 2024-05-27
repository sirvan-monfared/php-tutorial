<nav class="sidebar-main">
    <div class="left-arrow" id="left-arrow">
        <i data-feather="arrow-left"></i>
    </div>

    <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn"></li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="index.html">
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
                        <a href="products.html">محصولات</a>
                    </li>

                    <li>
                        <a href="add-new-product.html">افزودن محصول جدید</a>
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
                    <i class="ri-list-settings-line"></i>
                    <span>ویژگی ها</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="attributes.html">ویژگی ها</a>
                    </li>

                    <li>
                        <a href="add-new-attributes.html">افزودن جدید</a>
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
                        <a href="all-users.html">نمایش کاربران</a>
                    </li>
                    <li>
                        <a href="add-new-user.html">افزودن کاربر جدید</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                    <i class="ri-user-3-line"></i>
                    <span>نقش ها</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="role.html">تمام نقش ها</a>
                    </li>
                    <li>
                        <a href="create-role.html">افزودن نقش جدید</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="media.html">
                    <i class="ri-price-tag-3-line"></i>
                    <span>رسانه</span>
                </a>
            </li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                    <i class="ri-archive-line"></i>
                    <span>سفارشات</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="order-list.html">لیست سفارشات</a>
                    </li>
                    <li>
                        <a href="order-detail.html">جزئیات سفارش</a>
                    </li>
                    <li>
                        <a href="order-tracking.html">رهگیری سفارش</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-list">
                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                    <i class="ri-focus-3-line"></i>
                    <span>قطب نما</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="translation.html">ترجمه</a>
                    </li>

                    <li>
                        <a href="currency-rates.html">نرخ ارز</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-list">
                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                    <i class="ri-price-tag-3-line"></i>
                    <span>کد تخفیف</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="coupon-list.html">لیست تخفیف ها</a>
                    </li>

                    <li>
                        <a href="create-coupon.html">افزودن</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="taxes.html">
                    <i class="ri-price-tag-3-line"></i>
                    <span>مالیات</span>
                </a>
            </li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="product-review.html">
                    <i class="ri-star-line"></i>
                    <span>بررسی محصول</span>
                </a>
            </li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="support-ticket.html">
                    <i class="ri-phone-line"></i>
                    <span>تیکت ها</span>
                </a>
            </li>

            <li class="sidebar-list">
                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                    <i class="ri-settings-line"></i>
                    <span>تنظیمات</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="profile-setting.html">تنظیمات حساب</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="reports.html">
                    <i class="ri-file-chart-line"></i>
                    <span>گزارشات</span>
                </a>
            </li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="list-page.html">
                    <i class="ri-list-check"></i>
                    <span>لیست برگه ها</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="right-arrow" id="right-arrow">
        <i data-feather="arrow-right"></i>
    </div>
</nav>