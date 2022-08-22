<!--
=========================================================
* Material Kit 2 - v3.0.2
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
  <title>
    We Like Work
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('css/nucleo-icons.css" rel="stylesheet') }}" />
  <link href="{{ asset('css/nucleo-svg.css" rel="stylesheet') }}" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('css/material-dashboard.css?v=3.0.4') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/card-pricing.css') }}">
  <style>
    html {
      scroll-behavior: smooth;
    }</style>
</head>

<body class="about-us bg-gray-200">
  <!-- Navbar Transparent -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container">
      <a class="navbar-brand  text-white " href="https://demos.creative-tim.com/material-kit/presentation" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
        We Like Work
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
        <ul class="navbar-nav navbar-nav-hover ms-auto">
          {{-- <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages8" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
              Pages
              <img src="{{ asset('img/down-arrow-white.svg') }}" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
              <img src="{{ asset('img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
            </a>
            <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages8">
              <div class="d-none d-lg-block">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                  Landing Pages
                </h6>
                <a href="../pages/about-us.html" class="dropdown-item border-radius-md">
                  <span>About Us</span>
                </a>
                <a href="../pages/contact-us.html" class="dropdown-item border-radius-md">
                  <span>Contact Us</span>
                </a>
                <a href="../pages/author.html" class="dropdown-item border-radius-md">
                  <span>Author</span>
                </a>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                  Account
                </h6>
                <a href="../pages/sign-in.html" class="dropdown-item border-radius-md">
                  <span>Sign In</span>
                </a>
              </div>
              <div class="d-lg-none">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                  Landing Pages
                </h6>
                <a href="../pages/about-us.html" class="dropdown-item border-radius-md">
                  <span>About Us</span>
                </a>
                <a href="../pages/contact-us.html" class="dropdown-item border-radius-md">
                  <span>Contact Us</span>
                </a>
                <a href="../pages/author.html" class="dropdown-item border-radius-md">
                  <span>Author</span>
                </a>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                  Account
                </h6>
                <a href="../pages/sign-in.html" class="dropdown-item border-radius-md">
                  <span>Sign In</span>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">view_day</i>
              Sections
              <img src="{{ asset('img/down-arrow-white.svg') }}" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
              <img src="{{ asset('img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
            </a>
            <ul class="dropdown-menu dropdown-menu-animation dropdown-menu-end dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
              <div class="d-none d-lg-block">
                <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="../presentation.html">
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
                        <span class="text-sm">See all sections</span>
                      </div>
                      <img src="{{ asset('img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                    </div>
                  </a>
                  <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/page-sections/hero-sections.html">
                      Page Headers
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/page-sections/features.html">
                      Features
                    </a>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="../presentation.html">
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Navigation</h6>
                        <span class="text-sm">See all navigations</span>
                      </div>
                      <img src="{{ asset('img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                    </div>
                  </a>
                  <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/navigation/navbars.html">
                      Navbars
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/navigation/nav-tabs.html">
                      Nav Tabs
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/navigation/pagination.html">
                      Pagination
                    </a>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="../presentation.html">
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Input Areas</h6>
                        <span class="text-sm">See all input areas</span>
                      </div>
                      <img src="{{ asset('img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                    </div>
                  </a>
                  <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/input-areas/inputs.html">
                      Inputs
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/input-areas/forms.html">
                      Forms
                    </a>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="../presentation.html">
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Attention Catchers</h6>
                        <span class="text-sm">See all examples</span>
                      </div>
                      <img src="{{ asset('img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                    </div>
                  </a>
                  <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/attention-catchers/alerts.html">
                      Alerts
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/attention-catchers/modals.html">
                      Modals
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/attention-catchers/tooltips-popovers.html">
                      Tooltips & Popovers
                    </a>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="../presentation.html">
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Elements</h6>
                        <span class="text-sm">See all elements</span>
                      </div>
                      <img src="{{ asset('img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                    </div>
                  </a>
                  <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/avatars.html">
                      Avatars
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/badges.html">
                      Badges
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/breadcrumbs.html">
                      Breadcrumbs
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/buttons.html">
                      Buttons
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/dropdowns.html">
                      Dropdowns
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/progress-bars.html">
                      Progress Bars
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/toggles.html">
                      Toggles
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/typography.html">
                      Typography
                    </a>
                  </div>
                </li>
              </div>
              <div class="row d-lg-none">
                <div class="col-md-12">
                  <div class="d-flex mb-2">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                    </div>
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
                      </div>
                    </div>
                  </div>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/page-sections/hero-sections.html">
                    Page Headers
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/page-sections/features.html">
                    Features
                  </a>
                  <div class="d-flex mb-2 mt-3">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-laptop text-gradient text-primary"></i>
                    </div>
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Navigation</h6>
                      </div>
                    </div>
                  </div>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/navigation/navbars.html">
                    Navbars
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/navigation/nav-tabs.html">
                    Nav Tabs
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/navigation/pagination.html">
                    Pagination
                  </a>
                  <div class="d-flex mb-2 mt-3">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-badge text-gradient text-primary"></i>
                    </div>
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Input Areas</h6>
                      </div>
                    </div>
                  </div>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/input-areas/inputs.html">
                    Inputs
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/input-areas/forms.html">
                    Forms
                  </a>
                  <div class="d-flex mb-2 mt-3">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-notification-70 text-gradient text-primary"></i>
                    </div>
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Attention Catchers</h6>
                      </div>
                    </div>
                  </div>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/attention-catchers/alerts.html">
                    Alerts
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/attention-catchers/modals.html">
                    Modals
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/attention-catchers/tooltips-popovers.html">
                    Tooltips & Popovers
                  </a>
                  <div class="d-flex mb-2 mt-3">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-app text-gradient text-primary"></i>
                    </div>
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Elements</h6>
                      </div>
                    </div>
                  </div>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/avatars.html">
                    Avatars
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/badges.html">
                    Badges
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/breadcrumbs.html">
                    Breadcrumbs
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/buttons.html">
                    Buttons
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/dropdowns.html">
                    Dropdowns
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/progress-bars.html">
                    Progress Bars
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/toggles.html">
                    Toggles
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/typography.html">
                    Typography
                  </a>
                </div>
              </div>
            </ul>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">article</i>
              Docs
              <img src="{{ asset('img/down-arrow-white.svg') }}" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
              <img src="{{ asset('img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
            </a>
            <ul class="dropdown-menu dropdown-menu-animation dropdown-menu-end dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
              <div class="d-none d-lg-block">
                <ul class="list-group">
                  <li class="nav-item list-group-item border-0 p-0">
                    <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit ">
                      <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
                      <span class="text-sm">All about overview, quick start, license and contents</span>
                    </a>
                  </li>
                  <li class="nav-item list-group-item border-0 p-0">
                    <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/colors/material-kit ">
                      <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
                      <span class="text-sm">See our colors, icons and typography</span>
                    </a>
                  </li>
                  <li class="nav-item list-group-item border-0 p-0">
                    <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/alerts/material-kit ">
                      <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
                      <span class="text-sm">Explore our collection of fully designed components</span>
                    </a>
                  </li>
                  <li class="nav-item list-group-item border-0 p-0">
                    <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit ">
                      <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
                      <span class="text-sm">Check how you can integrate our plugins</span>
                    </a>
                  </li>
                  <li class="nav-item list-group-item border-0 p-0">
                    <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit ">
                      <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
                      <span class="text-sm">For those who want flexibility, use our utility classes</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="row d-lg-none">
                <div class="col-md-12 g-0">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="../pages/about-us.html">
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
                    <span class="text-sm">All about overview, quick start, license and contents</span>
                  </a>
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="../pages/about-us.html">
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
                    <span class="text-sm">See our colors, icons and typography</span>
                  </a>
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="../pages/about-us.html">
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
                    <span class="text-sm">Explore our collection of fully designed components</span>
                  </a>
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="../pages/about-us.html">
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
                    <span class="text-sm">Check how you can integrate our plugins</span>
                  </a>
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="../pages/about-us.html">
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
                    <span class="text-sm">For those who want flexibility, use our utility classes</span>
                  </a>
                </div>
              </div>
            </ul>
          </li> --}}
          {{-- <li class="nav-item ms-lg-auto">
            <a class="nav-link nav-link-icon me-2" href="https://github.com/creativetimofficial/soft-ui-design-system" target="_blank">
            </a>
          </li> --}}
          <li class="nav-item my-auto ms-3 ms-lg-0">
            <a href="/register" class="btn btn-sm mb-0 me-1 mt-2 mt-md-0">
              <p class="d-inline text-sm z-index-1 font-weight-bold">Register</p>
            </a>
            /
            <a href="/login" class="btn btn-sm mb-0 me-1 mt-2 mt-md-0">
              <p class="d-inline text-sm z-index-1 font-weight-bold">Login</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- -------- START HEADER 7 w/ text and video ------- -->
  <header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('{{ asset('img/bg3.jpg') }}');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="text-white">WeLikeWork.ca</h1>
            {{-- <p class="lead mb-4 text-white opacity-8">Getting work done in Cumberland County</p> --}}
            <p class="lead mb-4 text-white opacity-8">Property management & odd job service provider servicing Amherst, Nova Scotia and Cumberland County.</p>
            <a href="#register">
              <button type="submit" class="btn btn-lg bg-gradient-success text-light font-weight-bold" id="shrinkBtn">Get Work ?</button>
            </a>
            <h6 class="text-white mb-2 mt-5">Find us on</h6>
            <div class="d-flex justify-content-center">
              <a href="javascript:;"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-twitter text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-google-plus text-lg text-white"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- -------- END HEADER 7 w/ text and video ------- -->
  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <!-- Section with four info areas left & one card right with image and waves -->
    <section class="py-7">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="row justify-content-start">
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-success mb-3">public</i>
                  <h5>Professional</h5>
                  <p>We get insulted by others, lose trust for those We get back freezes</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-success mb-3">3p</i>
                  <h5>Trusted</h5>
                  <p>We get insulted by others, lose trust for those We get back freezes</p>
                </div>
              </div>
            </div>
            <div class="row justify-content-start mt-4">
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-success mb-3">payment</i>
                  <h5>Affordable Fee</h5>
                  <p>We get insulted by others, lose trust for those We get back freezes</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-success mb-3">apps</i>
                  <h5>Various Odd Jobs</h5>
                  <p>We get insulted by others, lose trust for those We get back freezes</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
            <div class="card">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center">
                <h5 class="font-weight-normal">
                  <a href="javascript:;">Get Your Work Done</a>
                </h5>
                <p class="mb-0">
                  Make a request, let us take care your odd job.
                </p>
                <a href="#register">
                  <button type="button" class="btn bg-gradient-success btn-sm mb-0 mt-3">Get Work</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Section with four info areas left & one card right with image and waves -->
    <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
    <section class="pb-5 position-relative bg-gradient-dark mx-n3">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-start mb-5 mt-5">
            <h3 class="text-white z-index-1 position-relative">Price List</h3>
            <p class="text-white opacity-8 mb-0">Get the estimate by this table.</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-3">
            <div class="card mb-5" data-animation="true" style="height: 450px">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="{{ asset('img/products/product-1-min.jpg') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body">
                <h5 class="font-weight-normal mt-3 text-center">
                  <a href="javascript:;">Lawn Care</a>
                </h5>
                <p class="mb-0">
                    1) Small Lawn $0 <br>
                    2) Medium Lawn +$20 <br>
                    3) Large Lawn +$35 <br>
                    4) Extra Large Lawn +$60 <br>
                </p>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer text-center">
                <p class="font-weight-normal my-auto">Starting at $40</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card mb-5" data-animation="true" style="height: 550px">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="{{ asset('img/products/product-7-min.jpg') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body">
                <h5 class="font-weight-normal mt-3 text-center">
                  <a href="javascript:;">Junk Removal</a>
                </h5>
                <p class="mb-0">
                  1) Construction & Demolition ($98 per pound) <br>
                  2) Cardboard ($88 per pound) <br>
                  3) Recyclables ($88 per pound) <br>
                  4) Wood ($79 per pound) <br>
                  5) Shingles ($35 per pound) <br>
                  6) Organics ($35 per pound) <br>
                </p>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer text-center">
                <p class="font-weight-normal my-auto">Starting at $75</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card mb-5" data-animation="true" style="height: 450px">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="{{ asset('img/products/product-4-min.jpg') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body">
                <h5 class="font-weight-normal mt-3 text-center">
                  <a href="javascript:;">Item Transport</a>
                </h5>
                <p class="mb-0">
                    Base Fee + $0.54/Km
                </p>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer text-center">
                <p class="font-weight-normal my-auto">Starting at $75</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-3">
            <div class="card mb-5" data-animation="true" style="height: 450px">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="{{ asset('img/products/product-5-min.jpg') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body">
                <h5 class="font-weight-normal mt-3 text-center">
                  <a href="javascript:;">Odd Jobs</a>
                </h5>
                <p class="mb-0">
                  1) Post hole digging +$25 per hole <br>
                  2) Trench digging +$25 per square foot <br>
                  3) Pressure Washing +$1 per square foot <br>
                </p>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer text-center">
                <p class="font-weight-normal my-auto">Starting at $75</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card mb-5" data-animation="true" style="height: 450px">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="{{ asset('img/products/product-3-min.jpg') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body">
                <h5 class="font-weight-normal mt-3 text-center">
                  <a href="javascript:;">Small Projects</a>
                </h5>
                <p class="mb-0">
                  Carpentry, electrical, plumbing and more coming soon, contact for more info
                </p>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer text-center">
                <p class="font-weight-normal my-auto">Starting at $150</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
    <section class="mt-8 pt-4 pb-6" id="count-stats">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-3">
            <h1 class="text-gradient text-info" id="state1" countTo="5234">0</h1>
            <h5>Work</h5>
            <p>Completed works</p>
          </div>
          <div class="col-md-3">
            <h1 class="text-gradient text-info"><span id="state2" countTo="3400">0</span>+</h1>
            <h5>Hours</h5>
            <p>Our working hours</p>
          </div>
          <div class="col-md-3">
            <h1 class="text-gradient text-info"><span id="state3" countTo="24">0</span>/7</h1>
            <h5>People</h5>
            <p>Friends that trust us to work</p>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    <section class="my-5 pt-5" id="register">
      <div class="container">
        <div class="row">
          <div class="col-md-6 m-auto">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="font-weight-bolder">Sign Up</h4>
                <p class="mb-0">Enter your email and password to register</p>
              </div>
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control">
                      </div>
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-check form-check-info text-start ps-0">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                    <label class="form-check-label" for="flexCheckDefault">
                      I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                    </label>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-lg bg-gradient-success btn-lg w-100 mt-4 mb-0">Sign Up</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-2 text-sm mx-auto">
                  Already have an account?
                  <a href="/login" class="text-success text-gradient font-weight-bold">Sign in</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-5 ms-auto">
            <div class="position-relative">
              <img class="max-width-50 w-100 position-relative z-index-2" src="{{ asset ('img/illustrations/illustration-lock.jpg') }}" alt="image">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
  </div>
  <footer class="footer pt-5 mt-5">
    <div class="container">
      {{-- <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <a href="https://www.creative-tim.com/product/material-kit">
              <img src="{{ asset('img/logo-ct-dark.png') }}" class="mb-3 footer-logo" alt="main_logo">
            </a>
            <h6 class="font-weight-bolder mb-4">Material Kit 2</h6>
          </div>
          <div>
            <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                  <i class="fab fa-facebook text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                  <i class="fab fa-twitter text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                  <i class="fab fa-dribbble text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                  <i class="fab fa-github text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                  <i class="fab fa-youtube text-lg opacity-8"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Company</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
                  About Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
                  Freebies
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
                  Premium Tools
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                  Blog
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Resources</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://iradesign.io/" target="_blank">
                  Illustrations
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                  Bits & Snippets
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">
                  Affiliate Program
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Help & Support</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                  Contact Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
                  Knowledge Center
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer" target="_blank">
                  Custom Development
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
                  Sponsorships
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
          <div>
            <h6 class="text-sm">Legal</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/terms-of-service" target="_blank">
                  Terms & Conditions
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/privacy-policy" target="_blank">
                  Privacy Policy
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                  Licenses (EULA)
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              All rights reserved. Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Material Kit by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
            </p>
          </div>
        </div>
      </div> --}}
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="{{ asset('js/core/popper.min.js" type="text/javascript') }}"></script>
  <script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="{{ asset('js/plugins/countup.min.js') }}"></script>
  <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('js/material-dashboard.min.js?v=3.0.4') }}"></script>
  <script>
    // get the element to animate
    var element = document.getElementById('count-stats');
    var elementHeight = element.clientHeight;

    // listen for scroll event and call animate function

    document.addEventListener('scroll', animate);

    // check if element is in view
    function inView() {
      // get window height
      var windowHeight = window.innerHeight;
      // get number of pixels that the document is scrolled
      var scrollY = window.scrollY || window.pageYOffset;
      // get current scroll position (distance from the top of the page to the bottom of the current viewport)
      var scrollPosition = scrollY + windowHeight;
      // get element position (distance from the top of the page to the bottom of the element)
      var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

      // is scroll position greater than element position? (is element in view?)
      if (scrollPosition > elementPosition) {
        return true;
      }

      return false;
    }

    var animateComplete = true;
    // animate element when it is in view
    function animate() {

      // is element in view?
      if (inView()) {
        if (animateComplete) {
          if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
              countUp.start();
            } else {
              console.error(countUp.error);
            }
          }
          if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
              countUp1.start();
            } else {
              console.error(countUp1.error);
            }
          }
          if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
              countUp2.start();
            } else {
              console.error(countUp2.error);
            };
          }
          animateComplete = false;
        }
      }
    }

    if (document.getElementById('typed')) {
      var typed = new Typed("#typed", {
        stringsElement: '#typed-strings',
        typeSpeed: 90,
        backSpeed: 90,
        backDelay: 200,
        startDelay: 500,
        loop: true
      });
    }
  </script>
  <script>
    if (document.getElementsByClassName('page-header')) {
      window.onscroll = debounce(function() {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var oVal = (window.scrollY / 3);
        bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
      }, 6);
    }
  </script>
</body>

</html>