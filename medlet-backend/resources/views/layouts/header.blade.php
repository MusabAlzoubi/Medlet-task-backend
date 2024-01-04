<!DOCTYPE html>



<!-- =========================================================
* Frest - Bootstrap Admin Template | v1.0.0
==============================================================

* Product Page: https://1.envato.market/frest_admin
* Created by: PIXINVENT
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright PIXINVENT (https://pixinvent.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="rtl" data-theme="theme-semi-dark" data-assets-path="assets/" data-template="vertical-menu-template-semi-dark">


<!-- Mirrored from pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-semi-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 10:05:20 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Frest - Bootstrap Admin Template</title>

    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 admin, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/frest_admin">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/flag-icons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/theme-semi-dark.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<!-- Row Group CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css')}}">
<!-- Form Validation -->
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
    <!-- Helpers -->
    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js')}}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">







            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


                <div class="app-brand demo ">
                    <a href="{{ route('home') }}" class="app-brand-link">
                        <span class="app-brand-logo demo">
<svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <title>icon</title>
  <defs>
    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
      <stop stop-color="#5A8DEE" offset="0%"></stop>
      <stop stop-color="#699AF9" offset="100%"></stop>
    </linearGradient>
    <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
      <stop stop-color="#FDAC41" offset="0%"></stop>
      <stop stop-color="#E38100" offset="100%"></stop>
    </linearGradient>
  </defs>
  <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
      <g id="Login" transform="translate(519.000000, 244.000000)">
        <g id="Logo" transform="translate(148.000000, 42.000000)">
          <g id="icon" transform="translate(0.000000, 4.000000)">
            <path d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z" id="Combined-Shape" fill="#4880EA"></path>
            <path d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z" id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
            <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
          </g>
        </g>
      </g>
    </g>
  </g>
</svg>

</span>
                        <span class="app-brand-text demo menu-text fw-bold ms-2">Frest</span>
                    </a>

                    <a href="{{ route('home') }}" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
                        <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
                    </a>
                </div>


                <div class="menu-divider mt-0  ">
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li>
                        <a href="{{ route('home') }}" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-grid-alt"></i> 
                            <div>Home</div>
                        </a>
                    </li>
                </ul>
                
                
                @php
                    $userRole = Auth::user()->role->id ?? null;
                @endphp
                
                @if ($userRole == 1)                
                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item active open">
                        <a  class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user"></i> <!-- Replace bx-home-circle with bx-user -->
                            <div >Users</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item active">
                                <a href="{{route('adminusers.index')}}" class="menu-link">
                                    <div>Show</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('adminusers.create')}}" class="menu-link">
                                    <div >Create</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                
                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item active open">
                        <a class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-book-open"></i> <!-- Replace bx-home-circle with bx-book-open -->
                            <div >Course</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item active">
                                <a href="{{route('courses.index')}}" class="menu-link">
                                    <div >Show</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('courses.create')}}" class="menu-link">
                                    <div >Create</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                
                @elseif($userRole == 2)
                
                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item active open">
                        <a  class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-book-open"></i> <!-- Replace bx-home-circle with bx-book-open -->
                            <div >Course</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item active">
                                <a href="{{route('courses.index')}}" class="menu-link">
                                    <div >Show</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('courses.create')}}" class="menu-link">
                                    <div >Create</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                @endif
                
               



            </aside>
            <!-- / Menu -->



            <!-- Layout container -->
            <div class="layout-page">





                <!-- Navbar -->








                <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="container-fluid">








                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>


                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


                            <!-- Search -->
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item navbar-search-wrapper mb-0">
                                    <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                                        <i class="bx bx-search-alt bx-sm"></i>
                                        <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                                    </a>
                                </div>
                            </div>
                            <!-- /Search -->


                            <ul class="navbar-nav flex-row align-items-center ms-auto">

                         



                                @guest

                                <!-- Quick links  -->
                                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <i class='bx bx-grid-alt bx-sm'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end py-0">
                                        <div class="dropdown-menu-header border-bottom">
                                            <div class="dropdown-header d-flex align-items-center py-3">
                                                <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                                                <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="bx bx-sm bx-plus-circle"></i></a>
                                            </div>
                                        </div>
                                        <div class="dropdown-shortcuts-list scrollable-container">
                                            
                                        
                                           
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="fas fa-question-circle fs-4"></i>
                                                    </span>
                                                    <a href="{{route('login')}}" class="stretched-link">Log in</a>
                                                    <small class="text-muted mb-0">if you have an account</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="fas fa-user-plus fs-4"></i>
                                                    </span>
                                                    <a href="{{route('register')}}" class="stretched-link">Register</a>
                                                    <small class="text-muted mb-0">if you are a new user</small>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>
                                <!-- Quick links -->

                        

                                <!-- User -->

                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="assets/img/avatars/1.png" alt class="rounded-circle">
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                            
                                        <li>
                                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img src="{{asset('assets/img/avatars/1.png')}}" alt class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="fw-semibold d-block lh-1">guest
                                                            
                                                        </span>
                                                        <small>guest</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        @endguest

                                        @if(Auth::check())
                                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <div class="avatar avatar-online">
                                                    @if(Auth::user()->image)
                                                    <img src="  {{ asset('images/user/' . Auth::user()->image) }}
                                                    " alt class="rounded-circle">
                                                @else
                                                <img src="{{asset('assets/img/avatars/1.png')}}" alt class="rounded-circle">

                                                @endif
                                                </div>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                    
                                                <li>
                                                    <a class="dropdown-item" href="pages-account-settings-account.html">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar avatar-online">
                                                                    <img src="                                                    {{ asset('images/user/' . Auth::user()->image) }}
                                                                    " alt class="rounded-circle">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <span class="fw-semibold d-block lh-1">{{Auth::user()->name}}
                                                                    
                                                                </span>
                                                                <small>{{Auth::user()->role->name}}</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="dropdown-divider"></div>
                                                </li>
                                        <li>
                                            <a class="dropdown-item" href="{{route('user.profile')}}">
                                                <i class="bx bx-user me-2"></i>
                                                <span class="align-middle">My Profile</span>
                                            </a>
                                        </li>
                                      
                                        
                                        
                          
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                                <form method="post" action="{{ route('logout') }}" class="d-inline">
                                                    @csrf
                                                    <button  type="submit" class="dropdown-item"><i class="bx bx-power-off me-2"></i>
                                                        <span class="align-middle">Log Out</span></button>
                                                </form>


                                                
                                            </a>
                                        </li>
                                        @endif

                                    </ul>
                                </li>
                                <!--/ User -->


                            </ul>
                        </div>


                        <!-- Search Small Screens -->
                        <div class="navbar-search-wrapper search-input-wrapper  d-none">
                            <input type="text" class="form-control search-input container-fluid border-0" placeholder="Search..." aria-label="Search...">
                            <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                        </div>


                    </div>
                </nav>



                <!-- / Navbar -->
