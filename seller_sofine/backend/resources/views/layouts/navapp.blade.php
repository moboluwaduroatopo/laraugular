<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
     <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
          <link href="{{asset('assets/vendors/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{asset('assets/vendors/morrisjs/morris.css')}}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{asset('assets/vendors/c3-master/c3.min.css')}}" rel="stylesheet">
    
	<!-- flot css -->
    <link href="{{asset('main/css/pages/float-chart.css')}}" rel="stylesheet">

    <!--Toaster Popup message CSS -->
    <link href="{{asset('assets/vendors/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('main/css/master-stylesheet.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('main/css/colors/default.css')}}" id="theme" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <script src="../assets/vendors/jquery/jquery.min.js"></script>
        <!-- Bootstrap popper Core JavaScript -->
        <script src="{{asset('assets/vendors/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
        
        
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{asset('assets/vendors/ps/perfect-scrollbar.jquery.min.js')}}"></script>
        <!--Wave Effects -->
        <script src="{{asset('main/js/waves.js')}}"></script>
        <!--Menu sidebar -->
        <script src="{{asset('main/js/sidebarmenu.js')}}"></script>
        <!--Custom JavaScript -->
        <script src="{{asset('main/js/custom.min.js')}}"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <!--morris JavaScript -->
        <script src="{{asset('assets/vendors/raphael/raphael-min.js')}}"></script>
        <script src="{{asset('assets/vendors/morrisjs/morris.min.js')}}"></script>
        <!--c3 JavaScript -->
        <script src="{{asset('assets/vendors/d3/d3.min.js')}}"></script>
        <script src="{{asset('assets/vendors/c3-master/c3.min.js')}}"></script>
        <!-- Popup message jquery -->
        <script src="{{asset('assets/vendors/toast-master/js/jquery.toast.js')}}"></script>
        
    
        <!--Sparkline JavaScript -->
        <script src="{{asset('assets/vendors/sparkline/jquery.sparkline.min.js')}}"></script>
    
        
        <!-- Chart JS -->
        <script src="{{asset('main/js/dashboard1.js')}}"></script>
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="{{asset('assets/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>
    
    <script>
    $('.counter-count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 5000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
        
       <style type="text/css">
         body{
          background:linear
         }
       </style>
    </head>
    <body class="fix-header fix-sidebar card-no-border">
            <div id="main-wrapper">
                    <!-- ============================================================== -->
                    <!-- Topbar header - style you can find in pages.scss -->
                    <!-- ============================================================== -->
                    <header class="topbar">
                        <nav class="navbar top-navbar navbar-expand-md navbar-light">
                            <!-- ============================================================== -->
                            <!-- Logo -->
                            <!-- ============================================================== -->
                            <div class="navbar-header">
                                <a class="navbar-brand" href="index.html">
                                    <!-- Logo icon --><b>
                                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                        <!-- Dark Logo icon -->
                                        <img src="../assets/images/logo-light-icon.png" alt="homepage" class="dark-logo" />
                                        <!-- Light Logo icon -->
                                        <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                                    </b>
                                    <!--End Logo icon -->
                                    <!-- Logo text --><span>
                                     <!-- dark Logo text -->
                                     <img src="../assets/images/logo-light-text.png" alt="homepage" class="dark-logo" />
                                     <!-- Light Logo text -->    
                                     <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                            </div>
                            <!-- ============================================================== -->
                            <!-- End Logo -->
                            <!-- ============================================================== -->
                            <div class="navbar-collapse">
                                <!-- ============================================================== -->
                                <!-- toggle and nav items -->
                                <!-- ============================================================== -->
                                <ul class="navbar-nav mr-auto">
                                    <!-- This is  -->
                                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>
                                    <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>
                                    <!-- ============================================================== -->
                                    <!-- Search -->
                                    <!-- ============================================================== -->
                                    <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="icon-Magnifi-Glass2"></i></a>
                                        <form class="app-search">
                                            <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                                    </li>
                                </ul>
                                <!-- ============================================================== -->
                                <!-- User profile and search -->
                                <!-- ============================================================== -->
                                <ul class="navbar-nav my-lg-0">
                                    <!-- ============================================================== -->
                                    <!-- Comment -->
                                    <!-- ============================================================== -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-Bell"></i>
                                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right mailbox animated fadeIn">
                                            <ul>
                                                <li>
                                                    <div class="drop-title">Notifications</div>
                                                </li>
                                                <li>
                                                    <div class="message-center">
                                                        <!-- Message -->
                                                        <a href="#">
                                                            <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                            <div class="mail-contnet">
                                                                <h5>Launch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="#">
                                                            <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                            <div class="mail-contnet">
                                                                <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="#">
                                                            <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                            <div class="mail-contnet">
                                                                <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="#">
                                                            <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                            <div class="mail-contnet">
                                                                <h5>Mason Hudson</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- ============================================================== -->
                                    <!-- End Comment -->
                                    <!-- ============================================================== -->
                                    <!-- ============================================================== -->
                                    <!-- Messages -->
                                    <!-- ============================================================== -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-Mail"></i>
                                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                        </a>
                                        <div class="dropdown-menu mailbox dropdown-menu-right animated fadeIn" aria-labelledby="2">
                                            <ul>
                                                <li>
                                                    <div class="drop-title">You have 4 new messages</div>
                                                </li>
                                                <li>
                                                    <div class="message-center">
                                                        <!-- Message -->
                                                        <a href="#">
                                                            <div class="user-img"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                            <div class="mail-contnet">
                                                                <h5>Mason Hudson</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="#">
                                                            <div class="user-img"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                            <div class="mail-contnet">
                                                                <h5>Pepper Hensen</h5> <span class="mail-desc">Neque porro quisquam est!</span> <span class="time">9:10 AM</span> </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="#">
                                                            <div class="user-img"> <img src="../assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                            <div class="mail-contnet">
                                                                <h5>Steve Carter</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="#">
                                                            <div class="user-img"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                            <div class="mail-contnet">
                                                                <h5>Mason Hudson</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- ============================================================== -->
                                    <!-- End Messages -->
                                    <!-- ============================================================== -->
                                    <!-- ============================================================== -->
                                    <!-- mega menu -->
                                    <!-- ============================================================== -->
                                    <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-Box-Close"></i></a>
                                        <div class="dropdown-menu animated fadeIn">
                                            <ul class="mega-dropdown-menu row">
                                                <li class="col-lg-3 col-xlg-2 mb-30">
                                                    <h4 class="mb-20">CAROUSEL</h4>
                                                    <!-- CAROUSEL -->
                                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner" role="listbox">
                                                            <div class="carousel-item active">
                                                                <div class="container"> <img class="d-block img-fluid" src="../assets/images/big/img1.jpg" alt="First slide"></div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img2.jpg" alt="Second slide"></div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img3.jpg" alt="Third slide"></div>
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                                    </div>
                                                    <!-- End CAROUSEL -->
                                                </li>
                                                <li class="col-lg-3 mb-30">
                                                    <h4 class="mb-20">ACCORDION</h4>
                                                    <!-- Accordian -->
                                                    <div id="accordion" class="nav-accordion" role="tablist" aria-multiselectable="true">
                                                        <div class="card">
                                                            <div class="card-header" role="tab" id="headingOne">
                                                                <h5 class="mb-0">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                              Collapsible Group Item #1
                                                            </a>
                                                          </h5> </div>
                                                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high. </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" role="tab" id="headingTwo">
                                                                <h5 class="mb-0">
                                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                              Collapsible Group Item #2
                                                            </a>
                                                          </h5> </div>
                                                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" role="tab" id="headingThree">
                                                                <h5 class="mb-0">
                                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                              Collapsible Group Item #3
                                                            </a>
                                                          </h5> </div>
                                                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-lg-3  mb-30">
                                                    <h4 class="mb-20">CONTACT US</h4>
                                                    <!-- Contact -->
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" placeholder="Enter email"> </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-info">Submit</button>
                                                    </form>
                                                </li>
                                                <li class="col-lg-3 col-xlg-4 mb-30">
                                                    <h4 class="mb-20">List style</h4>
                                                    <!-- List style -->
                                                    <ul class="list-style-none">
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- ============================================================== -->
                                    <!-- End mega menu -->
                                    <!-- ============================================================== -->
                                    <!-- ============================================================== -->
                                    <!-- Language -->
                                    <!-- ============================================================== -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right animated fadeIn"> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> India</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> China</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
                                    </li>
                                    <!-- ============================================================== -->
                                    <!-- Profile -->
                                    <!-- ============================================================== -->
                                    <li class="nav-item dropdown u-pro">
                                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="" /> <span class="hidden-md-down">Mark Sanders &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                                        <div class="dropdown-menu dropdown-menu-right animated fadeIn">
                                            <ul class="dropdown-user">
                                                <li>
                                                    <div class="dw-user-box">
                                                        <div class="u-img"><img src="../assets/images/users/1.jpg" alt="user"></div>
                                                        <div class="u-text">
                                                            <h4>Steave Jobs</h4>
                                                            <p class="text-muted">michelle@gmail.com</p><a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                                    </div>
                                                </li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                                <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                                <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </header>
                    <!-- ============================================================== -->
                    <!-- End Topbar header -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Left Sidebar - style you can find in sidebar.scss  -->
                    <!-- ============================================================== -->
                    <aside class="left-sidebar">
                        <!-- Sidebar scroll-->
                        <div class="scroll-sidebar">
                            <!-- Sidebar navigation-->
                            <nav class="sidebar-nav">
                                <ul id="sidebarnav">
                                    <li class="nav-small-cap">MAIN</li>
                                    <li class="active"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-apps mr-10"></i><span class="hide-menu">Dashboard <span class="label label-rounded label-danger">4</span></span></a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li><a href="/">Dashboard </a></li>
                                            
                                        </ul>
                                    </li>
                         
                                  
                                  
                                   
                                    <li class="nav-small-cap">OTHER PAGES</li>
            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-cart mr-10"></i><span class="hide-menu">Product</span></a>
            <ul aria-expanded="false" class="collapse">
                            {{-- <li><a href="ecommerce-dashboard.html">Dashboard</a></li> --}}
                            <li><a href="productlist">Product List</a></li>
                            <li><a href="addproduct">Add new product</a></li>
                            <li><a href="order">Orders</a></li>
                            <li><a href="invoice">Invoice</a></li>
                            <li><a href="customer">Customers</a></li>
                          </ul>
                                    </li>
                                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file-document mr-10"></i><span class="hide-menu">Categories</span></a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li><a href="addcat">1 Column</a></li>
                                            <li><a href="catlist">Fix header</a></li>
                                           
                                        </ul>
                                    </li>
                                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file-multiple mr-10"></i><span class="hide-menu">Sample Pages <span class="label label-rounded label-info">25</span></span></a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li><a href="starter-kit.html">Starter Kit</a></li>
                                            <li><a href="pages-blank.html">Blank page</a></li>
                                            <li><a href="#" class="has-arrow">Authentication <span class="label label-rounded label-success pull-right">6</span></a>
                                                <ul aria-expanded="false" class="collapse">
                                                    <li><a href="pages-login.html">Login 1</a></li>
                                                    <li><a href="pages-login-2.html">Login 2</a></li>
                                                    <li><a href="pages-register.html">Register</a></li>
                                                    <li><a href="pages-register2.html">Register 2</a></li>
                                                    <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                                                    <li><a href="pages-recover-password.html">Recover password</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="pages-profile.html">Profile page</a></li>
                                            <li><a href="pages-animation.html">Animation</a></li>
                                            <li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
                                            <li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
                                            
                                            <li><a href="pages-treeview.html">Treeview</a></li>
                                            <li><a href="pages-utility-classes.html">Helper Classes</a></li>
                                            <li><a href="pages-search-result.html">Search result</a></li>
                                            <li><a href="pages-scroll.html">Scrollbar</a></li>
                                            <li><a href="pages-pricing.html">Pricing</a></li>
                                            <li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
                                            <li><a href="pages-gallery.html">Gallery</a></li>
                                            <li><a href="pages-faq.html">Faqs</a></li>
                                            <li><a href="#" class="has-arrow">Error Pages</a>
                                                <ul aria-expanded="false" class="collapse">
                                                    <li><a href="pages-error-400.html">400</a></li>
                                                    <li><a href="pages-error-403.html">403</a></li>
                                                    <li><a href="pages-error-404.html">404</a></li>
                                                    <li><a href="pages-error-500.html">500</a></li>
                                                    <li><a href="pages-error-503.html">503</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    
                                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-format-line-spacing mr-10"></i><span class="hide-menu">Multi level dd</span></a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li><a href="#">item 1.1</a></li>
                                            <li><a href="#">item 1.2</a></li>
                                            <li> <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                                <ul aria-expanded="false" class="collapse">
                                                    <li><a href="#">item 1.3.1</a></li>
                                                    <li><a href="#">item 1.3.2</a></li>
                                                    <li><a href="#">item 1.3.3</a></li>
                                                    <li><a href="#">item 1.3.4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">item 1.4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- End Sidebar navigation -->
                        </div>
                        <!-- End Sidebar scroll-->
                    </aside>
                    <!-- ============================================================== -->
                    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Page wrapper  -->
                    <!-- ============================================================== -->
                    <div class="page-wrapper">
                        <!-- ============================================================== -->
                        <!-- Container fluid  -->
                        <!-- ============================================================== -->
                        @include('includes.messages')
                        @yield('my-content')
                        <!-- ============================================================== -->
                        <!-- End Container fluid  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- footer -->
                        <!-- ============================================================== -->
                        {{-- <footer class="footer"> © 2018 Hyrax UX Admin Template by SRGIT </footer> --}}
                        <!-- ============================================================== -->
                        <!-- End footer -->
                        <!-- ============================================================== -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Page wrapper  -->
                    <!-- ============================================================== -->
                </div>
     {{-- @include('includes.nav') --}}
      
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    </body>
</html>
