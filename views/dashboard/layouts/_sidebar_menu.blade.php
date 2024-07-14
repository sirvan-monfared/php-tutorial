<div class="dashboard-left-sidebar">
    <div class="close-button d-flex d-lg-none">
        <button class="close-sidebar">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <div class="profile-box">
        <div class="cover-image">
            <img src="{{ asset('front/images/inner-page/cover-img.jpg') }}" class="img-fluid blur-up lazyload"
                 alt="">
        </div>

        <div class="profile-contain">
            <div class="profile-image">
                <div class="position-relative">
                    <img src="{{ asset('front/images/inner-page/user/1.jpg') }}"
                         class="blur-up lazyload update_img" alt="">
                    <div class="cover-icon">
                        <i class="fa-solid fa-pen">
                            <input type="file" onchange="readURL(this,0)">
                        </i>
                    </div>
                </div>
            </div>

            <div class="profile-name">
                <h3>{{ auth()->user()->fullName() }} </h3>
                <h6 class="text-content">{{ auth()->user()->phone }}</h6>
            </div>
        </div>
    </div>

    <ul class="nav nav-pills user-nav-pills" id="pills-tab" role="tablist">

        <li class="nav-item" role="presentation">
            <a href="{{ route('dashboard.order.index') }}"  class="nav-link {{ routeIs('dashboard.order.index') ? 'active' : false }}" id="pills-order-tab">
                <i data-feather="shopping-bag"></i>سفارشات
            </a>
        </li>

        <li class="nav-item" role="presentation">
            <a href="{{ route('dashboard.profile.edit') }}"  class="nav-link {{ routeIs('dashboard.profile.edit') ? 'active' : false }}" id="pills-order-tab">
                <i data-feather="user"></i>
                پروفایل
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{ route('dashboard.password.edit') }}" class="nav-link {{ routeIs('dashboard.password.edit') ? 'active' : false }}" id="pills-security-tab">
                <i data-feather="shield"></i>
                تغییر رمزعبور
            </a>
        </li>
    </ul>
</div>