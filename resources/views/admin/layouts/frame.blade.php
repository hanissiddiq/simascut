<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ "Page ".$page }}</title>
  <link rel="icon" type="image/png" href="{{asset('wowdash/assets/images/favicon.png')}}" sizes="16x16">
  <!-- remix icon font css  -->
  <link rel="stylesheet" href="{{asset('wowdash/assets/css/remixicon.css')}}">
  <!-- BootStrap css -->
  <link rel="stylesheet" href="{{asset('wowdash/assets/css/lib/bootstrap.min.css')}}">
  <!-- Apex Chart css -->
  <link rel="stylesheet" href="{{asset('wowdash/assets/css/lib/apexcharts.css')}}">
  <!-- Data Table css -->
  <link rel="stylesheet" href="{{asset('wowdash/assets/css/lib/dataTables.min.css')}}">
  <!-- Text Editor css -->
  <link rel="stylesheet" href="{{asset('wowdash/assets/css/lib/editor-katex.min.css')}}">
  <link rel="stylesheet" href="{{asset('wowdash/assets/css/lib/editor.atom-one-dark.min.css')}}">
  <link rel="stylesheet" href="{{asset('wowdash/assets/css/lib/editor.quill.snow.css')}}">
  <!-- Date picker css -->
  <link rel="stylesheet" href="{{asset('wowdash/assets/css/lib/flatpickr.min.css')}}">
  <!-- Calendar css -->
  <link rel="stylesheet" href="{{asset('wowdash/assets/css/lib/full-calendar.css')}}">
  <!-- Vector Map css -->
  <link rel="stylesheet" href="{{asset('wowdash/assets/css/lib/jquery-jvectormap-2.0.5.css')}}">
  <!-- Popup css -->
  <link rel="stylesheet" href="{{asset('wowdash/assets/css/lib/magnific-popup.css')}}">
  <!-- Slick Slider css -->
  <link rel="stylesheet" href="{{asset('wowdash/assets/css/lib/slick.css')}}">
  <!-- prism css -->
  <link rel="stylesheet" href="{{asset('wowdash/assets/css/lib/prism.css')}}">
  <!-- file upload css -->
  <link rel="stylesheet" href="{{asset('wowdash/assets/css/lib/file-upload.css')}}">

  <link rel="stylesheet" href="{{asset('wowdash/assets/css/lib/audioplayer.css')}}">
  <!-- main css -->
  <link rel="stylesheet" href="{{asset('wowdash/assets/css/style.css')}}">
</head>

<body>

  <!-- Theme Customization Structure Start -->
<!-- <div class="theme-customization"> -->
<div class="body-overlay"></div>

<button type="button"
    class="theme-customization__button w-48-px h-48-px bg-primary-600 text-white rounded-circle d-flex justify-content-center align-items-center position-fixed end-0 bottom-0 mb-40 me-40 text-2xxl bg-hover-primary-700">
    <i class="ri-settings-3-line animate-spin"></i>
</button>
<!-- </div> -->
<div class="theme-customization-sidebar w-100 bg-base h-100vh overflow-y-auto position-fixed end-0 top-0 shadow-lg">
    <div class="d-flex align-items-center gap-3 py-16 px-24 justify-content-between border-bottom">
        <div>
            <h6 class="text-sm dark:text-white">Theme Settings</h6>
            <p class="text-xs mb-0 text-neutral-500 dark:text-neutral-200">Customize and preview instantly</p>
        </div>
        <button data-slot="button"
            class="theme-customization-sidebar__close text-neutral-900 bg-transparent text-hover-primary-600 d-flex text-xl">
            <i class="ri-close-fill"></i>
        </button>
    </div>

    <div class="d-flex flex-column gap-48 p-24 overflow-y-auto flex-grow-1">

        <div class="theme-setting-item">
            <h6 class="fw-medium text-primary-light text-md mb-3">Theme Mode</h6>
            <div class="d-grid grid-cols-3 gap-3 dark-light-mode">
                <button type="button"
                    class="theme-btn theme-setting-item__btn d-flex align-items-center justify-content-center h-64-px rounded-3 text-xl active"
                    data-theme="light">
                    <i class="ri-sun-line"></i>
                </button>
                <button type="button"
                    class="theme-btn theme-setting-item__btn d-flex align-items-center justify-content-center h-64-px rounded-3 text-xl"
                    data-theme="dark">
                    <i class="ri-moon-line"></i>
                </button>
                <button type="button"
                    class="theme-btn theme-setting-item__btn d-flex align-items-center justify-content-center h-64-px rounded-3 text-xl"
                    data-theme="system">
                    <i class="ri-computer-line"></i>
                </button>
            </div>
        </div>

        <div class="theme-setting-item">
            <h6 class="fw-medium text-primary-light text-md mb-3">Page Direction</h6>
            <div class="d-grid grid-cols-2 gap-3">
                <button type="button"
                    class="theme-setting-item__btn ltr-mode-btn d-flex align-items-center justify-content-center gap-2 h-56-px rounded-3 text-xl">
                    <div><i class="ri-align-item-left-line"></i></div>
                    <h6 class="text-sm font-medium mb-0">LTR</h6>
                </button>

                <button type="button"
                    class="theme-setting-item__btn rtl-mode-btn d-flex align-items-center justify-content-center gap-2 h-56-px rounded-3 text-xl">
                    <h6 class="text-sm font-medium mb-0">RTL</h6>
                    <div><i class="ri-align-item-right-line"></i></div>
                </button>
            </div>
        </div>

        <div class="theme-setting-item">
            <h6 class="fw-medium text-primary-light text-md mb-3">Color Schema</h6>
            <div class="d-grid grid-cols-3 gap-3">
                <button type="button"
                    class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                    data-color="blue">
                    <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                        style="background-color: #2563eb;"></span>
                    <span class="fw-medium mt-1" style="color: #2563eb;">Blue</span>
                </button>
                <button type="button"
                    class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                    data-color="red">
                    <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                        style="background-color: #dc2626;"></span>
                    <span class="fw-medium mt-1" style="color: #dc2626;">Red</span>
                </button>
                <button type="button"
                    class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                    data-color="green">
                    <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                        style="background-color: #16a34a;"></span>
                    <span class="fw-medium mt-1" style="color: #16a34a;">Green</span>
                </button>
                <button type="button"
                    class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                    data-color="yellow">
                    <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                        style="background-color: #ff9f29;"></span>
                    <span class="fw-medium mt-1" style="color: #ff9f29;">Yellow</span>
                </button>
                <button type="button"
                    class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                    data-color="cyan">
                    <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                        style="background-color: #00b8f2;"></span>
                    <span class="fw-medium mt-1" style="color: #00b8f2;">Cyan</span>
                </button>
                <button type="button"
                    class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                    data-color="violet">
                    <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                        style="background-color: #7c3aed;"></span>
                    <span class="fw-medium mt-1" style="color: #7c3aed;">Violet</span>
                </button>
            </div>
        </div>

    </div>
</div>

<!-- Theme Customization Structure End -->
{{-- =================== Start Navigation ================ --}}





<aside class="sidebar">
  <button type="button" class="sidebar-close-btn">
    <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
  </button>
  <div>
    <a href="{{ route('dashboard') }}" class="sidebar-logo">
      <img src="{{asset('wowdash/assets/images/logo.png')}}" alt="site logo" class="light-logo">
      <img src="{{asset('wowdash/assets/images/logo-light.png')}}" alt="site logo" class="dark-logo">
      <img src="{{asset('wowdash/assets/images/logo-icon.png')}}" alt="site logo" class="logo-icon">
    </a>
  </div>
  <div class="sidebar-menu-area">
    <ul class="sidebar-menu" id="sidebar-menu">
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
          <span>Dashboard</span>
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="index.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> AI</a>
          </li>
          <li>
            <a href="index-2.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> CRM</a>
          </li>
          <li>
            <a href="index-3.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> eCommerce</a>
          </li>
          <li>
            <a href="index-4.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Cryptocurrency</a>
          </li>
          <li>
            <a href="index-5.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Investment</a>
          </li>
          <li>
            <a href="index-6.html"><i class="ri-circle-fill circle-icon text-purple w-auto"></i> LMS</a>
          </li>
          <li>
            <a href="index-7.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> NFT & Gaming</a>
          </li>
          <li>
            <a href="index-8.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Medical</a>
          </li>
          <li>
            <a href="index-9.html"><i class="ri-circle-fill circle-icon text-purple w-auto"></i> Analytics</a>
          </li>
          <li>
            <a href="index-10.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> POS & Inventory
            </a>
          </li>
          <li>
            <a href="index-11.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Finance &
              Banking </a>
          </li>
          <li>
            <a href="index-12.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Booking
              System</a>
          </li>
          <li>
            <a href="index-13.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Help Desk</a>
          </li>
          <li>
            <a href="index-14.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Podcast </a>
          </li>
          <li>
            <a href="index-15.html"><i class="ri-circle-fill circle-icon text-purple w-auto"></i> Project Management
            </a>
          </li>
          <li>
            <a href="index-16.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Call Center</a>
          </li>
          <li>
            <a href="index-17.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Sass</a>
          </li>
        </ul>
      </li>
      <li class="sidebar-menu-group-title">Data Master</li>
      <li>
        <a href="{{ route('cuti.index') }}">
          <iconify-icon icon="material-symbols:assignment-rounded" class="menu-icon"></iconify-icon>
          <span>Tipe Cuti</span>
        </a>
      </li>
      <li>
        <a href="{{ route('seksi.index') }}">
          <iconify-icon icon="lucide:building" class="menu-icon"></iconify-icon>
          <span>Seksi</span>
        </a>
      </li>
      <li>
        <a href="{{ route('jabatan.index') }}">
          <iconify-icon icon="lucide:armchair" class="menu-icon"></iconify-icon>
          <span>Jabatan</span>
        </a>
      </li>
      <li class="sidebar-menu-group-title">Data Transaksi</li>
      <li>
        <a href="{{ route('request_cuti.index') }}">
          <iconify-icon icon="material-symbols:app-registration-outline-sharp" class="menu-icon"></iconify-icon>
          <span>Request Cuti</span>
        </a>
      </li>
      <li>
        <a href="chat-message.html">
          <iconify-icon icon="material-symbols:add-notes-rounded" class="menu-icon"></iconify-icon>
          <span>Kuota Cuti</span>
        </a>
      </li>
      <li class="sidebar-menu-group-title">Data Laporan</li>
      <li>
        <a href="chat-message.html">
          <iconify-icon icon="ri:book-3-line" class="menu-icon"></iconify-icon>
          <span>Cuti Bulanan</span>
        </a>
      </li>
      <li>
        <a href="chat-message.html">
          <iconify-icon icon="ri:book-3-line" class="menu-icon"></iconify-icon>
          <span>Cuti Tahunan</span>
        </a>
      </li>

      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
          <span>Settings</span>
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="company.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Company</a>
          </li>
          <li>
            <a href="notification.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
              Notification</a>
          </li>
          <li>
            <a href="notification-alert.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
              Notification Alert</a>
          </li>
          <li>
            <a href="theme.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Theme</a>
          </li>
          <li>
            <a href="currencies.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Currencies</a>
          </li>
          <li>
            <a href="language.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Languages</a>
          </li>
          <li>
            <a href="payment-gateway.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Payment
              Gateway</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</aside>

{{-- =================== End Navigation ================ --}}
{{-- =================== Start Header ================ --}}
<main class="dashboard-main">
  <div class="navbar-header">
  <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <div class="d-flex flex-wrap align-items-center gap-4">
        <button type="button" class="sidebar-toggle">
          <iconify-icon icon="heroicons:bars-3-solid" class="icon text-2xl non-active"></iconify-icon>
          <iconify-icon icon="iconoir:arrow-right" class="icon text-2xl active"></iconify-icon>
        </button>
        <button type="button" class="sidebar-mobile-toggle">
          <iconify-icon icon="heroicons:bars-3-solid" class="icon"></iconify-icon>
        </button>
        <form class="navbar-search">
          <input type="text" name="search" placeholder="Search">
          <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
        </form>
      </div>
    </div>
    <div class="col-auto">
      <div class="d-flex flex-wrap align-items-center gap-3">
        <button type="button" data-theme-toggle
          class="w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"></button>
        <div class="dropdown d-none d-sm-inline-block">
          <button
            class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"
            type="button" data-bs-toggle="dropdown">
            <img src="{{asset('wowdash/assets/images/lang-flag.png')}}" alt="image" class="w-24 h-24 object-fit-cover rounded-circle">
          </button>
          <div class="dropdown-menu to-top dropdown-menu-sm">
            <div
              class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-0">Choose Your Language</h6>
              </div>
            </div>

            <div class="max-h-400-px overflow-y-auto scroll-sm pe-8">
              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="english">
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                    <img src="{{asset('wowdash/assets/images/flags/flag1.png')}}" alt=""
                      class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">English</span>
                  </span>
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="english">
              </div>

              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="japan">
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                    <img src="{{asset('wowdash/assets/images/flags/flag2.png')}}" alt=""
                      class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">Japan</span>
                  </span>
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="japan">
              </div>

              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="france">
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                    <img src="{{asset('wowdash/assets/images/flags/flag3.png')}}" alt=""
                      class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">France</span>
                  </span>
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="france">
              </div>

              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="germany">
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                    <img src="{{asset('wowdash/assets/images/flags/flag4.png')}}" alt=""
                      class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">Germany</span>
                  </span>
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="germany">
              </div>

              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="korea">
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                    <img src="{{asset('wowdash/assets/images/flags/flag5.png')}}" alt=""
                      class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">South Korea</span>
                  </span>
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="korea">
              </div>

              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="bangladesh">
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                    <img src="{{asset('wowdash/assets/images/flags/flag6.png')}}" alt=""
                      class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">Bangladesh</span>
                  </span>
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="bangladesh">
              </div>

              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="india">
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                    <img src="{{asset('wowdash/assets/images/flags/flag7.png')}}" alt=""
                      class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">India</span>
                  </span>
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="india">
              </div>
              <div class="form-check style-check d-flex align-items-center justify-content-between">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="canada">
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                    <img src="{{asset('wowdash/assets/images/flags/flag8.png')}}" alt=""
                      class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">Canada</span>
                  </span>
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="canada">
              </div>
            </div>
          </div>
        </div><!-- Language dropdown end -->

        <div class="dropdown">
          <button
            class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"
            type="button" data-bs-toggle="dropdown">
            <iconify-icon icon="mage:email" class="text-primary-light text-xl"></iconify-icon>
          </button>
          <div class="dropdown-menu to-top dropdown-menu-lg p-0">
            <div
              class="m-16 py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-0">Message</h6>
              </div>
              <span
                class="text-primary-600 fw-semibold text-lg w-40-px h-40-px rounded-circle bg-base d-flex justify-content-center align-items-center">05</span>
            </div>

            <div class="max-h-400-px overflow-y-auto scroll-sm pe-4">

              <a href="javascript:void(0)"
                class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                  <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                    <img src="{{asset('wowdash/assets/images/notification/profile-3.png')}}" alt="">
                    <span class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                  </span>
                  <div>
                    <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                    <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                  </div>
                </div>
                <div class="d-flex flex-column align-items-end">
                  <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                  <span
                    class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">8</span>
                </div>
              </a>



            </div>
            <div class="text-center py-12 px-16">
              <a href="javascript:void(0)" class="text-primary-600 fw-semibold text-md">See All Message</a>
            </div>
          </div>
        </div><!-- Message dropdown end -->

        <div class="dropdown">
          <button
            class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"
            type="button" data-bs-toggle="dropdown">
            <iconify-icon icon="iconoir:bell" class="text-primary-light text-xl"></iconify-icon>
          </button>
          <div class="dropdown-menu to-top dropdown-menu-lg p-0">
            <div
              class="m-16 py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-0">Notifications</h6>
              </div>
              <span
                class="text-primary-600 fw-semibold text-lg w-40-px h-40-px rounded-circle bg-base d-flex justify-content-center align-items-center">05</span>
            </div>

            <div class="max-h-400-px overflow-y-auto scroll-sm pe-4">
              <a href="javascript:void(0)"
                class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                  <span
                    class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                    <iconify-icon icon="bitcoin-icons:verify-outline" class="icon text-xxl"></iconify-icon>
                  </span>
                  <div>
                    <h6 class="text-md fw-semibold mb-4">Congratulations</h6>
                    <p class="mb-0 text-sm text-secondary-light text-w-200-px">Your profile has been Verified. Your
                      profile has been Verified</p>
                  </div>
                </div>
                <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
              </a>

              <a href="javascript:void(0)"
                class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
                <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                  <span
                    class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                    <img src="{{asset('wowdash/assets/images/notification/profile-1.png')}}" alt="">
                  </span>
                  <div>
                    <h6 class="text-md fw-semibold mb-4">Ronald Richards</h6>
                    <p class="mb-0 text-sm text-secondary-light text-w-200-px">You can stitch between artboards</p>
                  </div>
                </div>
                <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
              </a>

              <a href="javascript:void(0)"
                class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                  <span
                    class="w-44-px h-44-px bg-info-subtle text-info-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                    AM
                  </span>
                  <div>
                    <h6 class="text-md fw-semibold mb-4">Arlene McCoy</h6>
                    <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you to prototyping</p>
                  </div>
                </div>
                <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
              </a>

              <a href="javascript:void(0)"
                class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
                <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                  <span
                    class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                    <img src="{{asset('wowdash/assets/images/notification/profile-2.png')}}" alt="">
                  </span>
                  <div>
                    <h6 class="text-md fw-semibold mb-4">Robiul Hasan</h6>
                    <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you to prototyping</p>
                  </div>
                </div>
                <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
              </a>

              <a href="javascript:void(0)"
                class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                  <span
                    class="w-44-px h-44-px bg-info-subtle text-info-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                    DR
                  </span>
                  <div>
                    <h6 class="text-md fw-semibold mb-4">Darlene Robertson</h6>
                    <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you to prototyping</p>
                  </div>
                </div>
                <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
              </a>
            </div>

            <div class="text-center py-12 px-16">
              <a href="javascript:void(0)" class="text-primary-600 fw-semibold text-md">See All Notification</a>
            </div>

          </div>
        </div><!-- Notification dropdown end -->

        <div class="dropdown">
          <button class="d-flex justify-content-center align-items-center rounded-circle" type="button"
            data-bs-toggle="dropdown">
            <img src="{{asset('wowdash/assets/images/user.png')}}" alt="image" class="w-40-px h-40-px object-fit-cover rounded-circle">
          </button>
          <div class="dropdown-menu to-top dropdown-menu-sm">
            <div
              class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-2">Robiul Hasan</h6>
                <span class="text-secondary-light fw-medium text-sm">Admin</span>
              </div>
              <button type="button" class="hover-text-danger">
                <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon>
              </button>
            </div>
            <ul class="to-top-list">
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                  href="view-profile.html">
                  <iconify-icon icon="solar:user-linear" class="icon text-xl"></iconify-icon> My Profile</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                  href="email.html">
                  <iconify-icon icon="tabler:message-check" class="icon text-xl"></iconify-icon> Inbox</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                  href="company.html">
                  <iconify-icon icon="icon-park-outline:setting-two" class="icon text-xl"></iconify-icon> Setting</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3"
                  href="javascript:void(0)">
                  <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon> Log Out</a>
              </li>
            </ul>
          </div>
        </div><!-- Profile dropdown end -->
      </div>
    </div>
  </div>
</div>
{{-- =================== End Header ================ --}}
<div class="dashboard-main-body">

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
  <h6 class="fw-semibold mb-0">Data</h6>
  <ul class="d-flex align-items-center gap-2">
    <li class="fw-medium">
      <a href="{{ route('dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
        {{-- Dashboard --}}
        {{ $page }}
      </a>
    </li>
    <li>-</li>
    {{-- <li class="fw-medium">Basic Table</li> --}}
    <li class="fw-medium">{{ $judul_page }}</li>
  </ul>
</div>
{{-- =================== Start Content ================ --}}
@yield('content')
{{-- =================== End Content ================ --}}

 </div>

  <footer class="d-footer">
  <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <p class="mb-0">© 2024 WowDash. All Rights Reserved.</p>
    </div>
    <div class="col-auto">
      <p class="mb-0">Made by <span class="text-primary-600">wowtheme7</span></p>
    </div>
  </div>
</footer>
</main>

  <!-- jQuery library js -->
  <script src="{{asset('wowdash/assets/js/lib/jquery-3.7.1.min.js')}}"></script>
  <!-- Bootstrap js -->
  <script src="{{asset('wowdash/assets/js/lib/bootstrap.bundle.min.js')}}"></script>
  <!-- Apex Chart js -->
  <script src="{{asset('wowdash/assets/js/lib/apexcharts.min.js')}}"></script>
  <!-- Data Table js -->
  <script src="{{asset('wowdash/assets/js/lib/dataTables.min.js')}}"></script>
  <!-- Iconify Font js -->
  <script src="{{asset('wowdash/assets/js/lib/iconify-icon.min.js')}}"></script>
  <!-- jQuery UI js -->
  <script src="{{asset('wowdash/assets/js/lib/jquery-ui.min.js')}}"></script>
  <!-- Vector Map js -->
  <script src="{{asset('wowdash/assets/js/lib/jquery-jvectormap-2.0.5.min.js')}}"></script>
  <script src="{{asset('wowdash/assets/js/lib/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- Popup js -->
  <script src="{{asset('wowdash/assets/js/lib/magnifc-popup.min.js')}}"></script>
  <!-- Slick Slider js -->
  <script src="{{asset('wowdash/assets/js/lib/slick.min.js')}}"></script>
  <!-- prism js -->
  <script src="{{asset('wowdash/assets/js/lib/prism.js')}}"></script>
  <!-- file upload js -->
  <script src="{{asset('wowdash/assets/js/lib/file-upload.js')}}"></script>
  <!-- audioplayer -->
  <script src="{{asset('wowdash/assets/js/lib/audioplayer.js')}}"></script>

  <!-- main js -->
  <script src="{{asset('wowdash/assets/js/app.js')}}"></script>
<script>
  let table = new DataTable('#dataTable');
</script>
</body>
</html>




