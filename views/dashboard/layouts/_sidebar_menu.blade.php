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
                <h3>زینب </h3>
                <h6 class="text-content">email@domain.com</h6>
            </div>
        </div>
    </div>

    <ul class="nav nav-pills user-nav-pills" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-dashboard-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-dashboard" type="button"><i data-feather="home"></i>
                داشبورد
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-order-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-order" type="button"><i
                        data-feather="shopping-bag"></i>سفارشات
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-wishlist-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-wishlist" type="button"><i data-feather="heart"></i>
                علاقه‌مندی
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-card-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-card" type="button" role="tab"><i
                        data-feather="credit-card"></i> مالی
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-address-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-address" type="button" role="tab"><i
                        data-feather="map-pin"></i>آدرس
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab"><i data-feather="user"></i>
                پروفایل
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-download-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-download" type="button" role="tab"><i
                        data-feather="download"></i>دانلود
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-security-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-security" type="button" role="tab"><i
                        data-feather="shield"></i>
                حریم خصوصی
            </button>
        </li>
    </ul>
</div>