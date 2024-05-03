<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/images/brand/favicon.ico">

    <!-- TITLE -->
    <title>Todo List By Ahmad </title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('assets') }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <!-- Plugins CSS -->
    <link href="{{ asset('assets') }}/css/plugins.css" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assets') }}/css/icons.css" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('assets') }}/switcher/css/switcher.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/switcher/demo.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


</head>

<body class="app sidebar-mini ltr light-mode">


    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('assets') }}/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            @include('layout.topbar')
            {{-- <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.html">
                            <img src="{{ asset('assets') }}/images/brand/logo-white.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('assets') }}/images/brand/logo-dark.png" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="main-header-center ms-3 d-none d-lg-block">
                            <input type="text" class="form-control" id="typehead" placeholder="Search for results...">
                            <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </div>
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex country">
                                            <a class="nav-link icon text-center" data-bs-target="#country-selector"
                                                data-bs-toggle="modal">
                                                <i class="fe fe-globe"></i><span
                                                    class="fs-16 ms-2 d-none d-xl-block">English</span>
                                            </a>
                                        </div>
                                        <!-- COUNTRY -->
                                        <div class="d-flex">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        <!-- Theme-Layout -->
                                        <div class="dropdown  d-flex shopping-cart">
                                            <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                                                <i class="fe fe-shopping-cart"></i><span class="badge bg-secondary header-badge">4</span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark"> My Shopping Cart</h6>
                                                        <div class="ms-auto">
                                                            <span class="badge bg-danger-transparent header-badge text-danger fs-14">Hurry Up!</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="header-dropdown-list message-menu">
                                                    <div class="dropdown-item d-flex p-4">
                                                        <a href="cart.html" class="open-file"></a>
                                                        <span
                                                            class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('assets') }}/images/products/3.jpg"></span>
                                                        <div class="wd-50p">
                                                            <h5 class="mb-1">Flower Pot for Home Decor</h5>
                                                            <span>Status: <span class="text-success">In Stock</span></span>
                                                            <p class="fs-13 text-muted mb-0">Quantity: 01</p>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex fs-16">
                                                            <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                                $438
                                                            </span>
                                                            <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                                <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex p-4">
                                                        <a href="cart.html" class="open-file"></a>
                                                        <span
                                                            class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('assets') }}/images/products/5.jpg"></span>
                                                        <div class="wd-50p">
                                                            <h5 class="mb-1">Black Digital Camera</h5>
                                                            <span>Status: <span class="text-danger">Out Stock</span></span>
                                                            <p class="fs-13 text-muted mb-0">Quantity: 06</p>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex">
                                                            <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                                $867
                                                            </span>
                                                            <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                                <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex p-4">
                                                        <a href="cart.html" class="open-file"></a>
                                                        <span
                                                            class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('assets') }}/images/products/7.jpg"></span>
                                                        <div class="wd-50p">
                                                            <h5 class="mb-1">Stylish Rockerz 255 Ear Pods</h5>
                                                            <span>Status: <span class="text-success">In Stock</span></span>
                                                            <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex">
                                                            <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                                $323
                                                            </span>
                                                            <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                                <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex p-4">
                                                        <a href="cart.html" class="open-file"></a>
                                                        <span
                                                            class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('assets') }}/images/products/1.jpg"></span>
                                                        <div class="wd-50p">
                                                            <h5 class="mb-1">Women Party Wear Dress</h5>
                                                            <span>Status: <span class="text-success">In Stock</span></span>
                                                            <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex">
                                                            <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                                $867
                                                            </span>
                                                            <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                                <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex p-4">
                                                        <a href="cart.html" class="open-file"></a>
                                                        <span
                                                            class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('assets') }}/images/products/2.jpg"></span>
                                                        <div class="wd-50p">
                                                            <h5 class="mb-1">Running Shoes for men</h5>
                                                            <span>Status: <span class="text-success">In Stock</span></span>
                                                            <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex">
                                                            <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                                $456
                                                            </span>
                                                            <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                                <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <div class="dropdown-footer">
                                                    <a class="btn btn-primary btn-pill w-sm btn-sm py-2" href="checkout.html"><i class="fe fe-check-circle"></i> Checkout</a>
                                                    <span class="float-end p-2 fs-17 fw-semibold">Total: $6789</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- CART -->
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>
                                        <!-- FULL-SCREEN -->
                                        <div class="dropdown  d-flex notifications">
                                            <a class="nav-link icon" data-bs-toggle="dropdown"><i
                                                    class="fe fe-bell"></i><span class=" pulse"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="notifications-menu">
                                                    <a class="dropdown-item d-flex" href="notify-list.html">
                                                        <div class="me-3 notifyimg  bg-primary brround box-shadow-primary">
                                                            <i class="fe fe-mail"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">New Application received
                                                            </h5>
                                                            <span class="notification-subtext">3 days ago</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="notify-list.html">
                                                        <div class="me-3 notifyimg  bg-secondary brround box-shadow-secondary">
                                                            <i class="fe fe-check-circle"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">Project has been
                                                                approved</h5>
                                                            <span class="notification-subtext">2 hours ago</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="notify-list.html">
                                                        <div class="me-3 notifyimg  bg-success brround box-shadow-success">
                                                            <i class="fe fe-shopping-cart"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">Your Product Delivered
                                                            </h5>
                                                            <span class="notification-subtext">30 min ago</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="notify-list.html">
                                                        <div class="me-3 notifyimg bg-pink brround box-shadow-pink">
                                                            <i class="fe fe-user-plus"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">Friend Requests</h5>
                                                            <span class="notification-subtext">1 day ago</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a href="notify-list.html"
                                                    class="dropdown-item text-center p-3 text-muted">View all
                                                    Notification</a>
                                            </div>
                                        </div>
                                        <!-- NOTIFICATIONS -->
                                        <div class="dropdown  d-flex message">
                                            <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                                                <i class="fe fe-message-square"></i><span class="pulse-danger"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">You have 5
                                                            Messages</h6>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0)" class="text-muted p-0 fs-12">make all unread</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="message-menu message-menu-scroll">
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('assets') }}/images/users/1.jpg"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Peter Theil</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    6:45 am
                                                                </small>
                                                            </div>
                                                            <span>Commented on file Guest list....</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('assets') }}/images/users/15.jpg"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Abagael Luth</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    10:35 am
                                                                </small>
                                                            </div>
                                                            <span>New Meetup Started......</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('assets') }}/images/users/12.jpg"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Brizid Dawson</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    2:17 pm
                                                                </small>
                                                            </div>
                                                            <span>Brizid is in the Warehouse...</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('assets') }}/images/users/4.jpg"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Shannon Shaw</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    7:55 pm
                                                                </small>
                                                            </div>
                                                            <span>New Product Realease......</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('assets') }}/images/users/3.jpg"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Cherry Blossom</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    7:55 pm
                                                                </small>
                                                            </div>
                                                            <span>You have appointment on......</span>
                                                        </div>
                                                    </a>

                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a href="javascript:void(0)" class="dropdown-item text-center p-3 text-muted">See all
                                                    Messages</a>
                                            </div>
                                        </div>
                                        <!-- MESSAGE-BOX -->
                                        <div class="dropdown d-flex header-settings">
                                            <a href="javascript:void(0);" class="nav-link icon"
                                                data-bs-toggle="sidebar-right" data-target=".sidebar-right">
                                                <i class="fe fe-align-right"></i>
                                            </a>
                                        </div>
                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="{{ asset('assets') }}/images/users/21.jpg" alt="profile-user"
                                                    class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold">Percy Kewshun</h5>
                                                        <small class="text-muted">Senior Admin</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="profile.html">
                                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                                </a>
                                                <a class="dropdown-item" href="email-inbox.html">
                                                    <i class="dropdown-icon fe fe-mail"></i> Inbox
                                                    <span class="badge bg-danger rounded-pill float-end">5</span>
                                                </a>
                                                <a class="dropdown-item" href="lockscreen.html">
                                                    <i class="dropdown-icon fe fe-lock"></i> Lockscreen
                                                </a>
                                                <a class="dropdown-item" href="login.html">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            @include('layout.sidebar')
            {{-- <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.html">
                            <img src="{{ asset('assets') }}/images/brand/logo-white.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('assets') }}/images/brand/icon-white.png" class="header-brand-img toggle-logo"
                                alt="logo">
                            <img src="{{ asset('assets') }}/images/brand/icon-dark.png" class="header-brand-img light-logo" alt="logo">
                            <img src="{{ asset('assets') }}/images/brand/logo-dark.png" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i
                                        class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>UI Kit</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-slack"></i><span
                                        class="side-menu__label">Apps</span><i
                                        class="angle fe fe-chevron-right"></i>
                                </a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										<div class="tab-menu-heading p-0 pb-2 border-0">
											<div class="tabs-menu ">
												<!-- Tabs -->
												<ul class="nav panel-tabs">
													<li><a href="#side1" class="d-flex active" data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
													<li><a href="#side2" data-bs-toggle="tab" class="d-flex"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
												</ul>
											</div>
										</div>
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active" id="side1">
													<ul class="sidemenu-list">
                                                        <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                                                        <li><a href="cards.html" class="slide-item"> Cards design</a></li>
                                                        <li><a href="calendar.html" class="slide-item"> Default calendar</a></li>
                                                        <li><a href="calendar2.html" class="slide-item"> Full calendar</a></li>
                                                        <li><a href="chat.html" class="slide-item"> Chat</a></li>
                                                        <li><a href="notify.html" class="slide-item"> Notifications</a></li>
                                                        <li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
                                                        <li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
                                                        <li><a href="scroll.html" class="slide-item"> Content Scroll bar</a></li>
                                                        <li><a href="loaders.html" class="slide-item"> Loaders</a></li>
                                                        <li><a href="counters.html" class="slide-item"> Counters</a></li>
                                                        <li><a href="rating.html" class="slide-item"> Rating</a></li>
                                                        <li><a href="timeline.html" class="slide-item"> Timeline</a></li>
                                                        <li><a href="treeview.html" class="slide-item"> Treeview</a></li>
                                                        <li><a href="chart.html" class="slide-item"> Charts</a></li>
                                                        <li><a href="footers.html" class="slide-item"> Footers</a></li>
                                                        <li><a href="users-list.html" class="slide-item"> User List</a></li>
                                                        <li><a href="search.html" class="slide-item">Search</a></li>
                                                        <li><a href="crypto-currencies.html" class="slide-item"> Crypto-currencies</a></li>
                                                        <li><a href="widgets.html" class="slide-item"> Widgets</a></li>
													</ul>
                                                    <div class="menutabs-content mt-5 p-0">
                                                        <div class="Annoucement_card">
                                                            <div class="text-center">
                                                                <div>
                                                                    <h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12"> Go for Premium Account </h5>
                                                                    <div class="bg-layer">
                                                                        <img src="{{ asset('assets') }}/{{ asset('assets') }}/images/media/37.png" alt="img" class="text-center mx-auto">
                                                                    </div>
                                                                    <p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2"> $399.9 /Monthly</p>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-block btn-primary mt-4 fs-14"> Upgrade</button>
                                                        </div>
                                                    </div>
                                                </div>
												<div class="tab-pane" id="side2">
													<h5 class="mt-3 fw-600 mb-4">Recent Chats</h5>
                                                    <div class="main-chat-list tab-pane">
                                                        <div class="media border-0 px-1 new border-top-0">
                                                            <div class="main-img-user online">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/5.jpg">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Raymart Santiago</span> <span>10 min</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/6.jpg"> <span>3</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Ariana Monino</span> <span>30 min</span>
                                                                </div>
                                                                <p>Good Morning</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user online"><img alt="" src="{{ asset('assets') }}/images/users/9.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Reynante Labares</span> <span>9.40 am</span>
                                                                </div>
                                                                <p> Nice to meet you </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-danger-transparent text-danger">J</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Joyce Chua</span> <span>11.20 am</span>
                                                                </div>
                                                                <p> Hi, How are you? </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/4.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Rolando Paloso</span> <span>1.38 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <div class="avatar avatar-md brround bg-primary-transparent text-primary">D</div><span>1</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Dexter dela Cruz</span> <span>4.08 pm</span>
                                                                </div>
                                                                <p>Typing...</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/21.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maricel Villalon</span> <span>8.09 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-success-transparent text-success">M</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maryjane Pechon</span> <span>1 day ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/5.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Lovely Dela Cruz</span> <span>3 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="avatar avatar-md brround bg-secondary-transparent"><i class="fe fe-user text-secondary"></i></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Daniel Padilla</span> <span>5 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/3.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>John Pratts</span> <span>20/06/2021</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/7.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Socrates Itumay</span> <span>18/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new border-bottom-0">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/6.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Samuel Lerin</span> <span>29/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                    </div>
												</div>
											</div>
										</div>
									</li>
								</ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-package"></i><span
                                        class="side-menu__label">Bootstrap</span><i
                                        class="angle fe fe-chevron-right"></i>
                                </a>
								<ul class="slide-menu mega-slide-menu">
                                    <li class="panel sidetab-menu">
                                        <div class="tab-menu-heading p-0 pb-2 border-0">
                                            <div class="tabs-menu ">
                                                <!-- Tabs -->
                                                <ul class="nav panel-tabs">
													<li><a href="#side5" class="d-flex active" data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
													<li><a href="#side6" data-bs-toggle="tab" class="d-flex"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="panel-body tabs-menu-body p-0 border-0">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="side5">
                                                    <ul class="sidemenu-list mega-menu-list">
                                                        <li class="side-menu-label1"><a href="javascript:void(0)">Bootstrap</a></li>
                                                        <li><a href="alerts.html" class="slide-item"> Alerts</a></li>
                                                        <li><a href="buttons.html" class="slide-item"> Buttons</a></li>
                                                        <li><a href="colors.html" class="slide-item"> Colors</a></li>
                                                        <li><a href="avatarsquare.html" class="slide-item"> Avatar Square</a></li>
                                                        <li><a href="avatar-radius.html" class="slide-item"> Avatar Radius</a></li>
                                                        <li><a href="avatar-round.html" class="slide-item"> Avatar Rounded</a></li>
                                                        <li><a href="dropdown.html" class="slide-item"> Dropdowns</a></li>
                                                        <li><a href="listgroup.html" class="slide-item"> List Group</a></li>
                                                        <li><a href="tags.html" class="slide-item"> Tags</a></li>
                                                        <li><a href="pagination.html" class="slide-item"> Pagination</a></li>
                                                        <li><a href="navigation.html" class="slide-item"> Navigation</a></li>
                                                        <li><a href="typography.html" class="slide-item"> Typography</a></li>
                                                        <li><a href="breadcrumbs.html" class="slide-item"> Breadcrumbs</a></li>
                                                        <li><a href="badge.html" class="slide-item"> Badges / Pills</a></li>
                                                        <li><a href="panels.html" class="slide-item"> Panels</a></li>
                                                        <li><a href="thumbnails.html" class="slide-item"> Thumbnails</a></li>
                                                        <li><a href="offcanvas.html" class="slide-item"> Offcanvas</a></li>
                                                        <li><a href="toast.html" class="slide-item"> toast</a></li>
                                                        <li><a href="scrollspy.html" class="slide-item"> Scrollspy</a></li>
                                                        <li><a href="mediaobject.html" class="slide-item"> Media Object</a></li>
                                                        <li><a href="accordion.html" class="slide-item"> Accordions </a></li>
                                                        <li><a href="tabs.html" class="slide-item"> Tabs</a></li>
                                                        <li><a href="modal.html" class="slide-item"> Modal</a></li>
                                                        <li><a href="tooltipandpopover.html" class="slide-item"> Tooltip and popover</a></li>
                                                        <li><a href="progress.html" class="slide-item"> Progress</a></li>
                                                        <li><a href="carousel.html" class="slide-item"> Carousels</a></li>
                                                        <li><a href="ribbons.html" class="slide-item"> Ribbons</a></li>
                                                    </ul>
                                                    <div class="menutabs-content mt-5 p-0">
                                                        <div class="Annoucement_card">
                                                            <div class="text-center">
                                                                <div>
                                                                    <h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12"> Go for Premium Account </h5>
                                                                    <div class="bg-layer">
                                                                        <img src="{{ asset('assets') }}/{{ asset('assets') }}/images/media/37.png" alt="img" class="text-center mx-auto">
                                                                    </div>
                                                                    <p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2"> $399.9 /Monthly</p>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-block btn-primary mt-4 fs-14"> Upgrade</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="side6">
													<h5 class="mt-3 fw-600 mb-4">Recent Chats</h5>
                                                    <div class="main-chat-list tab-pane">
                                                        <div class="media border-0 px-1 new border-top-0">
                                                            <div class="main-img-user online">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/5.jpg">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Raymart Santiago</span> <span>10 min</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/6.jpg"> <span>3</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Ariana Monino</span> <span>30 min</span>
                                                                </div>
                                                                <p>Good Morning</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user online"><img alt="" src="{{ asset('assets') }}/images/users/9.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Reynante Labares</span> <span>9.40 am</span>
                                                                </div>
                                                                <p> Nice to meet you </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-danger-transparent text-danger">J</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Joyce Chua</span> <span>11.20 am</span>
                                                                </div>
                                                                <p> Hi, How are you? </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/4.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Rolando Paloso</span> <span>1.38 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <div class="avatar avatar-md brround bg-primary-transparent text-primary">D</div><span>1</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Dexter dela Cruz</span> <span>4.08 pm</span>
                                                                </div>
                                                                <p>Typing...</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/21.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maricel Villalon</span> <span>8.09 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-success-transparent text-success">M</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maryjane Pechon</span> <span>1 day ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/5.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Lovely Dela Cruz</span> <span>3 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="avatar avatar-md brround bg-secondary-transparent"><i class="fe fe-user text-secondary"></i></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Daniel Padilla</span> <span>5 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/3.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>John Pratts</span> <span>20/06/2021</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/7.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Socrates Itumay</span> <span>18/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new border-bottom-0">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/6.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Samuel Lerin</span> <span>29/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="landing-page.html" target="_blank"><i
                                        class="side-menu__icon fe fe-zap"></i><span
                                        class="side-menu__label">Landing Page</span><span class="badge bg-green br-5 side-badge blink-text pb-1">New</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>Pre-build Pages</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-layers"></i><span
                                        class="side-menu__label">Pages</span><i
                                        class="angle fe fe-chevron-right"></i>
                                </a>

								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										<div class="tab-menu-heading p-0 pb-2 border-0">
											<div class="tabs-menu ">
												<!-- Tabs -->
												<ul class="nav panel-tabs">
													<li><a href="#side9" class="d-flex active" data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
													<li><a href="#side10" data-bs-toggle="tab" class="d-flex"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
												</ul>
											</div>
										</div>
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active" id="side9">
													<ul class="sidemenu-list">
                                                        <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                                                        <li><a href="profile.html" class="slide-item"> Profile</a></li>
                                                        <li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
                                                        <li><a href="notify-list.html" class="slide-item"> Notifications List</a></li>
                                                        <li><a href="email-compose.html" class="slide-item"> Mail-Compose</a></li>
                                                        <li><a href="email-inbox.html" class="slide-item"> Mail-Inbox</a></li>
                                                        <li><a href="email-read.html" class="slide-item"> Mail-Read</a></li>
                                                        <li><a href="gallery.html" class="slide-item"> Gallery</a></li>
                                                        <li class="sub-slide">
                                                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span
                                                                    class="sub-side-menu__label">Forms</span><i
                                                                    class="sub-angle fe fe-chevron-right"></i></a>
                                                            <ul class="sub-slide-menu">
                                                                <li><a href="form-elements.html" class="sub-slide-item"> Form Elements</a>
                                                                </li>
                                                                <li><a href="form-layouts.html" class="sub-slide-item"> Form Layouts</a>
                                                                </li>
                                                                <li><a href="form-advanced.html" class="sub-slide-item"> Form Advanced</a>
                                                                </li>
                                                                <li><a href="form-editor.html" class="sub-slide-item"> Form Editor</a></li>
                                                                <li><a href="form-wizard.html" class="sub-slide-item"> Form Wizard</a></li>
                                                                <li><a href="form-validation.html" class="sub-slide-item"> Form Validation</a></li>
                                                                <li><a href="form-input-spinners.html" class="sub-slide-item"> Form Input Spinners</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="sub-slide">
                                                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span
                                                                    class="sub-side-menu__label">Tables</span><i
                                                                    class="sub-angle fe fe-chevron-right"></i></a>
                                                            <ul class="sub-slide-menu">
                                                                <li><a href="tables.html" class="sub-slide-item">Default table</a></li>
                                                                <li><a href="datatable.html" class="sub-slide-item"> Data Tables</a></li>
                                                                <li><a href="edit-table.html" class="sub-slide-item"> Edit Tables</a></li>
                                                                <li><a href="extension-tables.html" class="sub-slide-item"> Extension Tables</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="sub-slide">
                                                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span
                                                                    class="sub-side-menu__label">Extension</span><i
                                                                    class="sub-angle fe fe-chevron-right"></i></a>
                                                            <ul class="sub-slide-menu">
                                                                <li><a href="about.html" class="sub-slide-item"> About Company</a></li>
                                                                <li><a href="services.html" class="sub-slide-item"> Services</a></li>
                                                                <li><a href="faq.html" class="sub-slide-item"> FAQS</a></li>
                                                                <li><a href="terms.html" class="sub-slide-item"> Terms</a></li>
                                                                <li><a href="invoice.html" class="sub-slide-item"> Invoice</a></li>
                                                                <li><a href="pricing.html" class="sub-slide-item"> Pricing Tables</a></li>
                                                                <li><a href="settings.html" class="sub-slide-item"> Settings</a></li>
                                                                <li><a href="blog.html" class="sub-slide-item"> Blog</a></li>
                                                                <li><a href="blog-details.html" class="sub-slide-item"> Blog Details</a>
                                                                </li>
                                                                <li><a href="blog-post.html" class="sub-slide-item"> Blog Post</a></li>
                                                                <li><a href="empty.html" class="sub-slide-item"> Empty Page</a></li>
                                                                <li><a href="construction.html" class="sub-slide-item"> Under
                                                                        Construction</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="switcher-1.html" class="slide-item"> Switcher</a></li>
													</ul>
                                                    <div class="menutabs-content mt-5 p-0">
                                                        <div class="Annoucement_card">
                                                            <div class="text-center">
                                                                <div>
                                                                    <h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12"> Go for Premium Account </h5>
                                                                    <div class="bg-layer">
                                                                        <img src="{{ asset('assets') }}/{{ asset('assets') }}/images/media/37.png" alt="img" class="text-center mx-auto">
                                                                    </div>
                                                                    <p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2"> $399.9 /Monthly</p>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-block btn-primary mt-4 fs-14"> Upgrade</button>
                                                        </div>
                                                    </div>
												</div>
												<div class="tab-pane" id="side10">
													<h5 class="mt-3 fw-600 mb-4">Recent Chats</h5>
                                                    <div class="main-chat-list tab-pane">
                                                        <div class="media border-0 px-1 new border-top-0">
                                                            <div class="main-img-user online">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/5.jpg">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Raymart Santiago</span> <span>10 min</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/6.jpg"> <span>3</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Ariana Monino</span> <span>30 min</span>
                                                                </div>
                                                                <p>Good Morning</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user online"><img alt="" src="{{ asset('assets') }}/images/users/9.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Reynante Labares</span> <span>9.40 am</span>
                                                                </div>
                                                                <p> Nice to meet you </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-danger-transparent text-danger">J</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Joyce Chua</span> <span>11.20 am</span>
                                                                </div>
                                                                <p> Hi, How are you? </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/4.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Rolando Paloso</span> <span>1.38 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <div class="avatar avatar-md brround bg-primary-transparent text-primary">D</div><span>1</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Dexter dela Cruz</span> <span>4.08 pm</span>
                                                                </div>
                                                                <p>Typing...</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/21.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maricel Villalon</span> <span>8.09 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-success-transparent text-success">M</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maryjane Pechon</span> <span>1 day ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/5.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Lovely Dela Cruz</span> <span>3 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="avatar avatar-md brround bg-secondary-transparent"><i class="fe fe-user text-secondary"></i></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Daniel Padilla</span> <span>5 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/3.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>John Pratts</span> <span>20/06/2021</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/7.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Socrates Itumay</span> <span>18/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new border-bottom-0">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/6.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Samuel Lerin</span> <span>29/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                    </div>
												</div>
											</div>
										</div>
									</li>
								</ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-shopping-bag"></i><span
                                        class="side-menu__label">E-Commerce</span><i
                                        class="angle fe fe-chevron-right"></i>
                                </a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										<div class="tab-menu-heading p-0 pb-2 border-0">
											<div class="tabs-menu ">
												<!-- Tabs -->
												<ul class="nav panel-tabs">
													<li><a href="#side13" class="d-flex active" data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
													<li><a href="#side14" data-bs-toggle="tab" class="d-flex"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
												</ul>
											</div>
										</div>
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active" id="side13">
													<ul class="sidemenu-list">
                                                        <li class="side-menu-label1"><a href="javascript:void(0)">E-Commerce</a></li>
                                                        <li><a href="shop.html" class="slide-item"> Shop</a></li>
                                                        <li><a href="shop-description.html" class="slide-item"> Product Details</a></li>
                                                        <li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
                                                        <li><a href="add-product.html" class="slide-item"> Add Product</a></li>
                                                        <li><a href="wishlist.html" class="slide-item"> Wishlist</a></li>
                                                        <li><a href="checkout.html" class="slide-item"> Checkout</a></li>
													</ul>
                                                    <div class="menutabs-content mt-5 p-0">
                                                        <div class="Annoucement_card">
                                                            <div class="text-center">
                                                                <div>
                                                                    <h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12"> Go for Premium Account </h5>
                                                                    <div class="bg-layer">
                                                                        <img src="{{ asset('assets') }}/{{ asset('assets') }}/images/media/37.png" alt="img" class="text-center mx-auto">
                                                                    </div>
                                                                    <p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2"> $399.9 /Monthly</p>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-block btn-primary mt-4 fs-14"> Upgrade</button>
                                                        </div>
                                                    </div>
												</div>
												<div class="tab-pane" id="side14">
													<h5 class="mt-3 fw-600 mb-4">Recent Chats</h5>
                                                    <div class="main-chat-list tab-pane">
                                                        <div class="media border-0 px-1 new border-top-0">
                                                            <div class="main-img-user online">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/5.jpg">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Raymart Santiago</span> <span>10 min</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/6.jpg"> <span>3</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Ariana Monino</span> <span>30 min</span>
                                                                </div>
                                                                <p>Good Morning</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user online"><img alt="" src="{{ asset('assets') }}/images/users/9.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Reynante Labares</span> <span>9.40 am</span>
                                                                </div>
                                                                <p> Nice to meet you </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-danger-transparent text-danger">J</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Joyce Chua</span> <span>11.20 am</span>
                                                                </div>
                                                                <p> Hi, How are you? </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/4.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Rolando Paloso</span> <span>1.38 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <div class="avatar avatar-md brround bg-primary-transparent text-primary">D</div><span>1</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Dexter dela Cruz</span> <span>4.08 pm</span>
                                                                </div>
                                                                <p>Typing...</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/21.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maricel Villalon</span> <span>8.09 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-success-transparent text-success">M</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maryjane Pechon</span> <span>1 day ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/5.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Lovely Dela Cruz</span> <span>3 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="avatar avatar-md brround bg-secondary-transparent"><i class="fe fe-user text-secondary"></i></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Daniel Padilla</span> <span>5 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/3.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>John Pratts</span> <span>20/06/2021</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/7.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Socrates Itumay</span> <span>18/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new border-bottom-0">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/6.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Samuel Lerin</span> <span>29/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                    </div>
												</div>
											</div>
										</div>
									</li>
								</ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">File
                                        Manager</span><span class="badge bg-pink side-badge">4</span><i
                                        class="angle fe fe-chevron-right hor-angle"></i>
                                </a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										<div class="tab-menu-heading p-0 pb-2 border-0">
											<div class="tabs-menu ">
												<!-- Tabs -->
												<ul class="nav panel-tabs">
													<li><a href="#side17" class="d-flex active" data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
													<li><a href="#side18" data-bs-toggle="tab" class="d-flex"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
												</ul>
											</div>
										</div>
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active" id="side17">
													<ul class="sidemenu-list">
                                                        <li class="side-menu-label1"><a href="javascript:void(0)">File Manager</a></li>
                                                        <li><a href="file-manager.html" class="slide-item"> File Manager</a></li>
                                                        <li><a href="filemanager-list.html" class="slide-item"> File Manager List</a></li>
                                                        <li><a href="filemanager-details.html" class="slide-item"> File Details</a></li>
                                                        <li><a href="file-attachments.html" class="slide-item"> File Attachments</a></li>
													</ul>
                                                    <div class="menutabs-content mt-5 p-0">
                                                        <div class="Annoucement_card">
                                                            <div class="text-center">
                                                                <div>
                                                                    <h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12"> Go for Premium Account </h5>
                                                                    <div class="bg-layer">
                                                                        <img src="{{ asset('assets') }}/{{ asset('assets') }}/images/media/37.png" alt="img" class="text-center mx-auto">
                                                                    </div>
                                                                    <p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2"> $399.9 /Monthly</p>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-block btn-primary mt-4 fs-14"> Upgrade</button>
                                                        </div>
                                                    </div>
												</div>
												<div class="tab-pane" id="side18">
													<h5 class="mt-3 fw-600 mb-4">Recent Chats</h5>
                                                    <div class="main-chat-list tab-pane">
                                                        <div class="media border-0 px-1 new border-top-0">
                                                            <div class="main-img-user online">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/5.jpg">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Raymart Santiago</span> <span>10 min</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/6.jpg"> <span>3</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Ariana Monino</span> <span>30 min</span>
                                                                </div>
                                                                <p>Good Morning</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user online"><img alt="" src="{{ asset('assets') }}/images/users/9.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Reynante Labares</span> <span>9.40 am</span>
                                                                </div>
                                                                <p> Nice to meet you </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-danger-transparent text-danger">J</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Joyce Chua</span> <span>11.20 am</span>
                                                                </div>
                                                                <p> Hi, How are you? </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/4.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Rolando Paloso</span> <span>1.38 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <div class="avatar avatar-md brround bg-primary-transparent text-primary">D</div><span>1</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Dexter dela Cruz</span> <span>4.08 pm</span>
                                                                </div>
                                                                <p>Typing...</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/21.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maricel Villalon</span> <span>8.09 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-success-transparent text-success">M</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maryjane Pechon</span> <span>1 day ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/5.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Lovely Dela Cruz</span> <span>3 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="avatar avatar-md brround bg-secondary-transparent"><i class="fe fe-user text-secondary"></i></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Daniel Padilla</span> <span>5 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/3.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>John Pratts</span> <span>20/06/2021</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/7.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Socrates Itumay</span> <span>18/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new border-bottom-0">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/6.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Samuel Lerin</span> <span>29/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                    </div>
												</div>
											</div>
										</div>
									</li>
								</ul>
                            </li>
                            <li class="sub-category">
                                <h3>Misc Pages</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-users"></i><span
                                        class="side-menu__label">Authentication</span><i
                                        class="angle fe fe-chevron-right"></i>
                                </a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										<div class="tab-menu-heading p-0 pb-2 border-0">
											<div class="tabs-menu ">
												<!-- Tabs -->
												<ul class="nav panel-tabs">
													<li><a href="#side21" class="d-flex active" data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
													<li><a href="#side22" data-bs-toggle="tab" class="d-flex"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
												</ul>
											</div>
										</div>
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active" id="side21">
													<ul class="sidemenu-list">
                                                        <li class="side-menu-label1"><a href="javascript:void(0)">Authentication</a></li>
                                                        <li><a href="login.html" class="slide-item"> Login</a></li>
                                                        <li><a href="register.html" class="slide-item"> Register</a></li>
                                                        <li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
                                                        <li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
                                                        <li class="sub-slide">
                                                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span
                                                                    class="sub-side-menu__label">Error Pages</span><i
                                                                    class="sub-angle fe fe-chevron-right"></i></a>
                                                            <ul class="sub-slide-menu">
                                                                <li><a href="400.html" class="sub-slide-item"> 400</a></li>
                                                                <li><a href="401.html" class="sub-slide-item"> 401</a></li>
                                                                <li><a href="403.html" class="sub-slide-item"> 403</a></li>
                                                                <li><a href="404.html" class="sub-slide-item"> 404</a></li>
                                                                <li><a href="500.html" class="sub-slide-item"> 500</a></li>
                                                                <li><a href="503.html" class="sub-slide-item"> 503</a></li>
                                                            </ul>
                                                        </li>
													</ul>
                                                    <div class="menutabs-content mt-5 p-0">
                                                        <div class="Annoucement_card">
                                                            <div class="text-center">
                                                                <div>
                                                                    <h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12"> Go for Premium Account </h5>
                                                                    <div class="bg-layer">
                                                                        <img src="{{ asset('assets') }}/{{ asset('assets') }}/images/media/37.png" alt="img" class="text-center mx-auto">
                                                                    </div>
                                                                    <p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2"> $399.9 /Monthly</p>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-block btn-primary mt-4 fs-14"> Upgrade</button>
                                                        </div>
                                                    </div>
												</div>
												<div class="tab-pane" id="side22">
													<h5 class="mt-3 fw-600 mb-4">Recent Chats</h5>
                                                    <div class="main-chat-list tab-pane">
                                                        <div class="media border-0 px-1 new border-top-0">
                                                            <div class="main-img-user online">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/5.jpg">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Raymart Santiago</span> <span>10 min</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/6.jpg"> <span>3</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Ariana Monino</span> <span>30 min</span>
                                                                </div>
                                                                <p>Good Morning</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user online"><img alt="" src="{{ asset('assets') }}/images/users/9.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Reynante Labares</span> <span>9.40 am</span>
                                                                </div>
                                                                <p> Nice to meet you </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-danger-transparent text-danger">J</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Joyce Chua</span> <span>11.20 am</span>
                                                                </div>
                                                                <p> Hi, How are you? </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/4.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Rolando Paloso</span> <span>1.38 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <div class="avatar avatar-md brround bg-primary-transparent text-primary">D</div><span>1</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Dexter dela Cruz</span> <span>4.08 pm</span>
                                                                </div>
                                                                <p>Typing...</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/21.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maricel Villalon</span> <span>8.09 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-success-transparent text-success">M</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maryjane Pechon</span> <span>1 day ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/5.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Lovely Dela Cruz</span> <span>3 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="avatar avatar-md brround bg-secondary-transparent"><i class="fe fe-user text-secondary"></i></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Daniel Padilla</span> <span>5 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/3.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>John Pratts</span> <span>20/06/2021</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/7.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Socrates Itumay</span> <span>18/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new border-bottom-0">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/6.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Samuel Lerin</span> <span>29/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                    </div>
												</div>
											</div>
										</div>
									</li>
								</ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <i class="side-menu__icon fe fe-cpu"></i>
                                    <span class="side-menu__label">Submenu items</span><i
                                        class="angle fe fe-chevron-right"></i>
                                </a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										<div class="tab-menu-heading p-0 pb-2 border-0">
											<div class="tabs-menu ">
												<!-- Tabs -->
												<ul class="nav panel-tabs">
													<li><a href="#side25" class="d-flex active" data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
													<li><a href="#side26" data-bs-toggle="tab" class="d-flex"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
												</ul>
											</div>
										</div>
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active" id="side25">
													<ul class="sidemenu-list">
                                                        <li class="side-menu-label1"><a href="javascript:void(0)">Submenu items</a></li>
                                                        <li><a href="javascript:void(0)" class="slide-item">Submenu-1</a></li>
                                                        <li class="sub-slide">
                                                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span
                                                                    class="sub-side-menu__label">Submenu-2</span><i
                                                                    class="sub-angle fe fe-chevron-right"></i></a>
                                                            <ul class="sub-slide-menu">
                                                                <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.1</a></li>
                                                                <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.2</a></li>
                                                                <li class="sub-slide2">
                                                                    <a class="sub-side-menu__item2" href="javascript:void(0)"
                                                                        data-bs-toggle="sub-slide2"><span
                                                                            class="sub-side-menu__label2">Submenu-2.3</span><i
                                                                            class="sub-angle2 fe fe-chevron-right"></i></a>
                                                                    <ul class="sub-slide-menu2">
                                                                        <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.1</a></li>
                                                                        <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.2</a></li>
                                                                        <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.3</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.4</a></li>
                                                                <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.5</a></li>
                                                            </ul>
                                                        </li>
													</ul>
                                                    <div class="menutabs-content mt-5 p-0">
                                                        <div class="Annoucement_card">
                                                            <div class="text-center">
                                                                <div>
                                                                    <h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12"> Go for Premium Account </h5>
                                                                    <div class="bg-layer">
                                                                        <img src="{{ asset('assets') }}/{{ asset('assets') }}/images/media/37.png" alt="img" class="text-center mx-auto">
                                                                    </div>
                                                                    <p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2"> $399.9 /Monthly</p>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-block btn-primary mt-4 fs-14"> Upgrade</button>
                                                        </div>
                                                    </div>
												</div>
												<div class="tab-pane" id="side26">
													<h5 class="mt-3 fw-600 mb-4">Recent Chats</h5>
                                                    <div class="main-chat-list tab-pane">
                                                        <div class="media border-0 px-1 new border-top-0">
                                                            <div class="main-img-user online">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/5.jpg">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Raymart Santiago</span> <span>10 min</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/6.jpg"> <span>3</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Ariana Monino</span> <span>30 min</span>
                                                                </div>
                                                                <p>Good Morning</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user online"><img alt="" src="{{ asset('assets') }}/images/users/9.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Reynante Labares</span> <span>9.40 am</span>
                                                                </div>
                                                                <p> Nice to meet you </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-danger-transparent text-danger">J</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Joyce Chua</span> <span>11.20 am</span>
                                                                </div>
                                                                <p> Hi, How are you? </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/4.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Rolando Paloso</span> <span>1.38 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <div class="avatar avatar-md brround bg-primary-transparent text-primary">D</div><span>1</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Dexter dela Cruz</span> <span>4.08 pm</span>
                                                                </div>
                                                                <p>Typing...</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/21.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maricel Villalon</span> <span>8.09 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-success-transparent text-success">M</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maryjane Pechon</span> <span>1 day ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/5.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Lovely Dela Cruz</span> <span>3 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="avatar avatar-md brround bg-secondary-transparent"><i class="fe fe-user text-secondary"></i></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Daniel Padilla</span> <span>5 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/3.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>John Pratts</span> <span>20/06/2021</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/7.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Socrates Itumay</span> <span>18/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new border-bottom-0">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/6.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Samuel Lerin</span> <span>29/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                    </div>
												</div>
											</div>
										</div>
									</li>
								</ul>
                            </li>
                            <li class="sub-category">
                                <h3>General</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-map-pin"></i><span
                                        class="side-menu__label">Maps</span><i
                                        class="angle fe fe-chevron-right"></i>
                                </a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										<div class="tab-menu-heading p-0 pb-2 border-0">
											<div class="tabs-menu ">
												<!-- Tabs -->
												<ul class="nav panel-tabs">
													<li><a href="#side29" class="d-flex active" data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
													<li><a href="#side30" data-bs-toggle="tab" class="d-flex"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
												</ul>
											</div>
										</div>
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active" id="side29">
													<ul class="sidemenu-list">
                                                        <li class="side-menu-label1"><a href="javascript:void(0)">Maps</a></li>
                                                        <li><a href="maps1.html" class="slide-item">Leaflet Maps</a></li>
                                                        <li><a href="maps2.html" class="slide-item">Mapel Maps</a></li>
                                                        <li><a href="maps.html" class="slide-item">Vector Maps</a></li>
													</ul>
                                                    <div class="menutabs-content mt-5 p-0">
                                                        <div class="Annoucement_card">
                                                            <div class="text-center">
                                                                <div>
                                                                    <h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12"> Go for Premium Account </h5>
                                                                    <div class="bg-layer">
                                                                        <img src="{{ asset('assets') }}/{{ asset('assets') }}/images/media/37.png" alt="img" class="text-center mx-auto">
                                                                    </div>
                                                                    <p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2"> $399.9 /Monthly</p>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-block btn-primary mt-4 fs-14"> Upgrade</button>
                                                        </div>
                                                    </div>
												</div>
												<div class="tab-pane" id="side30">
													<h5 class="mt-3 fw-600 mb-4">Recent Chats</h5>
                                                    <div class="main-chat-list tab-pane">
                                                        <div class="media border-0 px-1 new border-top-0">
                                                            <div class="main-img-user online">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/5.jpg">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Raymart Santiago</span> <span>10 min</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/6.jpg"> <span>3</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Ariana Monino</span> <span>30 min</span>
                                                                </div>
                                                                <p>Good Morning</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user online"><img alt="" src="{{ asset('assets') }}/images/users/9.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Reynante Labares</span> <span>9.40 am</span>
                                                                </div>
                                                                <p> Nice to meet you </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-danger-transparent text-danger">J</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Joyce Chua</span> <span>11.20 am</span>
                                                                </div>
                                                                <p> Hi, How are you? </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/4.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Rolando Paloso</span> <span>1.38 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <div class="avatar avatar-md brround bg-primary-transparent text-primary">D</div><span>1</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Dexter dela Cruz</span> <span>4.08 pm</span>
                                                                </div>
                                                                <p>Typing...</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/21.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maricel Villalon</span> <span>8.09 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-success-transparent text-success">M</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maryjane Pechon</span> <span>1 day ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/5.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Lovely Dela Cruz</span> <span>3 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="avatar avatar-md brround bg-secondary-transparent"><i class="fe fe-user text-secondary"></i></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Daniel Padilla</span> <span>5 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/3.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>John Pratts</span> <span>20/06/2021</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/7.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Socrates Itumay</span> <span>18/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new border-bottom-0">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/6.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Samuel Lerin</span> <span>29/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                    </div>
												</div>
											</div>
										</div>
									</li>
								</ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-bar-chart-2"></i><span
                                        class="side-menu__label">Charts</span><span
                                        class="badge bg-secondary side-badge">6</span><i
                                        class="angle fe fe-chevron-right hor-angle"></i>
                                </a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										<div class="tab-menu-heading p-0 pb-2 border-0">
											<div class="tabs-menu ">
												<!-- Tabs -->
												<ul class="nav panel-tabs">
													<li><a href="#side33" class="d-flex active" data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
													<li><a href="#side34" data-bs-toggle="tab" class="d-flex"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
												</ul>
											</div>
										</div>
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active" id="side33">
													<ul class="sidemenu-list">
                                                        <li class="side-menu-label1"><a href="javascript:void(0)">Charts</a></li>
                                                        <li><a href="chart-chartist.html" class="slide-item">Chart Js</a></li>
                                                        <li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
                                                        <li><a href="chart-echart.html" class="slide-item"> ECharts</a></li>
                                                        <li><a href="chart-morris.html" class="slide-item"> Morris Charts</a></li>
                                                        <li><a href="chart-nvd3.html" class="slide-item"> Nvd3 Charts</a></li>
                                                        <li><a href="charts.html" class="slide-item"> C3 Bar Charts</a></li>
                                                        <li><a href="chart-line.html" class="slide-item"> C3 Line Charts</a></li>
                                                        <li><a href="chart-donut.html" class="slide-item"> C3 Donut Charts</a></li>
                                                        <li><a href="chart-pie.html" class="slide-item"> C3 Pie charts</a></li>
													</ul>
                                                    <div class="menutabs-content mt-5 p-0">
                                                        <div class="Annoucement_card">
                                                            <div class="text-center">
                                                                <div>
                                                                    <h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12"> Go for Premium Account </h5>
                                                                    <div class="bg-layer">
                                                                        <img src="{{ asset('assets') }}/{{ asset('assets') }}/images/media/37.png" alt="img" class="text-center mx-auto">
                                                                    </div>
                                                                    <p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2"> $399.9 /Monthly</p>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-block btn-primary mt-4 fs-14"> Upgrade</button>
                                                        </div>
                                                    </div>
												</div>
												<div class="tab-pane" id="side34">
													<h5 class="mt-3 fw-600 mb-4">Recent Chats</h5>
                                                    <div class="main-chat-list tab-pane">
                                                        <div class="media border-0 px-1 new border-top-0">
                                                            <div class="main-img-user online">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/5.jpg">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Raymart Santiago</span> <span>10 min</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/6.jpg"> <span>3</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Ariana Monino</span> <span>30 min</span>
                                                                </div>
                                                                <p>Good Morning</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user online"><img alt="" src="{{ asset('assets') }}/images/users/9.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Reynante Labares</span> <span>9.40 am</span>
                                                                </div>
                                                                <p> Nice to meet you </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-danger-transparent text-danger">J</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Joyce Chua</span> <span>11.20 am</span>
                                                                </div>
                                                                <p> Hi, How are you? </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/4.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Rolando Paloso</span> <span>1.38 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <div class="avatar avatar-md brround bg-primary-transparent text-primary">D</div><span>1</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Dexter dela Cruz</span> <span>4.08 pm</span>
                                                                </div>
                                                                <p>Typing...</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/21.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maricel Villalon</span> <span>8.09 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-success-transparent text-success">M</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maryjane Pechon</span> <span>1 day ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/5.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Lovely Dela Cruz</span> <span>3 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="avatar avatar-md brround bg-secondary-transparent"><i class="fe fe-user text-secondary"></i></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Daniel Padilla</span> <span>5 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/3.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>John Pratts</span> <span>20/06/2021</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/7.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Socrates Itumay</span> <span>18/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new border-bottom-0">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/6.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Samuel Lerin</span> <span>29/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                    </div>
												</div>
											</div>
										</div>
									</li>
								</ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-wind"></i><span
                                        class="side-menu__label">Icons</span><i
                                        class="angle fe fe-chevron-right"></i>
                                </a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										<div class="tab-menu-heading p-0 pb-2 border-0">
											<div class="tabs-menu ">
												<!-- Tabs -->
												<ul class="nav panel-tabs">
													<li><a href="#side37" class="d-flex active" data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
													<li><a href="#side38" data-bs-toggle="tab" class="d-flex"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
												</ul>
											</div>
										</div>
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active" id="side37">
													<ul class="sidemenu-list">
                                                        <li class="side-menu-label1"><a href="javascript:void(0)">Icons</a></li>
                                                        <li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
                                                        <li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
                                                        <li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
                                                        <li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
                                                        <li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
                                                        <li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
                                                        <li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
                                                        <li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
                                                        <li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
                                                        <li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
                                                        <li><a href="icons11.html" class="slide-item">Bootstrap Icons</a></li>
													</ul>
                                                    <div class="menutabs-content mt-5 p-0">
                                                        <div class="Annoucement_card">
                                                            <div class="text-center">
                                                                <div>
                                                                    <h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12"> Go for Premium Account </h5>
                                                                    <div class="bg-layer">
                                                                        <img src="{{ asset('assets') }}/{{ asset('assets') }}/images/media/37.png" alt="img" class="text-center mx-auto">
                                                                    </div>
                                                                    <p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2"> $399.9 /Monthly</p>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-block btn-primary mt-4 fs-14"> Upgrade</button>
                                                        </div>
                                                    </div>
												</div>
												<div class="tab-pane" id="side38">
													<h5 class="mt-3 fw-600 mb-4">Recent Chats</h5>
                                                    <div class="main-chat-list tab-pane">
                                                        <div class="media border-0 px-1 new border-top-0">
                                                            <div class="main-img-user online">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/5.jpg">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Raymart Santiago</span> <span>10 min</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <img alt="" src="{{ asset('assets') }}/images/users/6.jpg"> <span>3</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Ariana Monino</span> <span>30 min</span>
                                                                </div>
                                                                <p>Good Morning</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user online"><img alt="" src="{{ asset('assets') }}/images/users/9.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Reynante Labares</span> <span>9.40 am</span>
                                                                </div>
                                                                <p> Nice to meet you </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-danger-transparent text-danger">J</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Joyce Chua</span> <span>11.20 am</span>
                                                                </div>
                                                                <p> Hi, How are you? </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/4.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Rolando Paloso</span> <span>1.38 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user">
                                                                <div class="avatar avatar-md brround bg-primary-transparent text-primary">D</div><span>1</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Dexter dela Cruz</span> <span>4.08 pm</span>
                                                                </div>
                                                                <p>Typing...</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/21.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maricel Villalon</span> <span>8.09 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <span class="avatar avatar-md brround bg-success-transparent text-success">M</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maryjane Pechon</span> <span>1 day ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/5.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Lovely Dela Cruz</span> <span>3 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="avatar avatar-md brround bg-secondary-transparent"><i class="fe fe-user text-secondary"></i></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Daniel Padilla</span> <span>5 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/3.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>John Pratts</span> <span>20/06/2021</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/7.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Socrates Itumay</span> <span>18/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media border-0 px-1 new border-bottom-0">
                                                            <div class="main-img-user"><img alt="" src="{{ asset('assets') }}/images/users/6.jpg"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Samuel Lerin</span> <span>29/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                    </div>
												</div>
											</div>
										</div>
									</li>
								</ul>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
            </div> --}}
            <!--/APP-SIDEBAR-->

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">{{ $title  ?? 'Dashboard'}}</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $title  ?? 'Dashboard'}}</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->
                        @yield('main')

                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

        </div>




        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    @yield('footer')
                    {{-- <div class="col-md-12 col-sm-12 text-center"> --}}
                    {{-- Copyright © <span id="year"></span> <a href="javascript:void(0)">Sash</a>. Designed with <span
                            class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko </a> All rights reserved. --}}
                    {{-- </div> --}}
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- JQUERY JS -->
        <script src="{{ asset('assets') }}/js/jquery.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="{{ asset('assets') }}/plugins/bootstrap/js/popper.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- SPARKLINE JS-->
        <script src="{{ asset('assets') }}/js/jquery.sparkline.min.js"></script>

        <!-- Sticky js -->
        <script src="{{ asset('assets') }}/js/sticky.js"></script>

        <!-- CHART-CIRCLE JS-->
        <script src="{{ asset('assets') }}/js/circle-progress.min.js"></script>

        <!-- PIETY CHART JS-->
        <script src="{{ asset('assets') }}/plugins/peitychart/jquery.peity.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/peitychart/peitychart.init.js"></script>

        <!-- SIDEBAR JS -->
        <script src="{{ asset('assets') }}/plugins/sidebar/sidebar.js"></script>

        <!-- Perfect SCROLLBAR JS-->
        <script src="{{ asset('assets') }}/plugins/p-scroll/perfect-scrollbar.js"></script>
        <script src="{{ asset('assets') }}/plugins/p-scroll/pscroll.js"></script>
        <script src="{{ asset('assets') }}/plugins/p-scroll/pscroll-1.js"></script>

        <!-- INTERNAL CHARTJS CHART JS-->
        <script src="{{ asset('assets') }}/plugins/chart/Chart.bundle.js"></script>
        <script src="{{ asset('assets') }}/plugins/chart/utils.js"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{ asset('assets') }}/plugins/select2/select2.full.min.js"></script>

        <!-- INTERNAL Data tables js-->
        <script src="{{ asset('assets') }}/plugins/datatable/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatable/js/dataTables.bootstrap5.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatable/dataTables.responsive.min.js"></script>

        <!-- INTERNAL APEXCHART JS -->
        <script src="{{ asset('assets') }}/js/apexcharts.js"></script>
        <script src="{{ asset('assets') }}/plugins/apexchart/irregular-data-series.js"></script>

        <!-- INTERNAL Flot JS -->
        <script src="{{ asset('assets') }}/plugins/flot/jquery.flot.js"></script>
        <script src="{{ asset('assets') }}/plugins/flot/jquery.flot.fillbetween.js"></script>
        <script src="{{ asset('assets') }}/plugins/flot/chart.flot.sampledata.js"></script>
        <script src="{{ asset('assets') }}/plugins/flot/dashboard.sampledata.js"></script>

        <!-- INTERNAL Vector js -->
        <script src="{{ asset('assets') }}/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

        <!-- SIDE-MENU JS-->
        <script src="{{ asset('assets') }}/plugins/sidemenu/sidemenu.js"></script>

        <!-- TypeHead js -->
        <script src="{{ asset('assets') }}/plugins/bootstrap5-typehead/autocomplete.js"></script>
        <script src="{{ asset('assets') }}/js/typehead.js"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{ asset('assets') }}/js/index1.js"></script>

        <!-- Color Theme js -->
        <script src="{{ asset('assets') }}/js/themeColors.js"></script>

        <!-- CUSTOM JS -->
        <script src="{{ asset('assets') }}/js/custom.js"></script>

        <!-- Custom-switcher -->
        <script src="{{ asset('assets') }}/js/custom-swicher.js"></script>

        <!-- Switcher js -->
        <script src="{{ asset('assets') }}/switcher/js/switcher.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        
        <script>
            // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
            function deleted(data) {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "Deleted Data " + data,
                            text: "Your file has been deleted.",
                            icon: "success"
                        });
                        
                    }
                });
            }
        </script>
        @yield('js')
</body>

</html>
