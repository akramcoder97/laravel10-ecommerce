<!DOCTYPE html> 
<html lang="en">
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Corona Admin</title>
 <!-- plugins:css -->
 <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
 <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css')}}">
 <!-- endinject -->
 <!-- Plugin css for this page -->
 <link rel="stylesheet" href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css')}}">
 <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
 <link rel="stylesheet" href="{{ asset('ssets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
 <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
 <!-- End plugin css for this page -->
 <!-- inject:css -->
 <!-- endinject -->
 <!-- Layout styles -->
 <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
 <!-- End layout styles -->
 <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" />
 <!-- bootsrap icons cdn -->    
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>
<div id="blur-background"></div>
 <div class="container-scroller">
   <!-- partial:partials/_sidebar.html -->
   <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
       <a class="sidebar-brand brand-logo" href="index.html"><img src="../assets/images/logo.svg" alt="logo" /></a>
       <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
     </div>
     <ul class="nav">
       <li class="nav-item profile">
         <div class="profile-desc">
           <div class="profile-pic">
             <div class="count-indicator">
               <img class="img-xs rounded-circle " src="../assets/images/faces/face15.jpg" alt="">
               <span class="count bg-success"></span>
             </div>
             <div class="profile-name">
               <h5 class="mb-0 font-weight-normal">@auth {{ Auth::user()->name }} @endauth </h5>
               <span>Gold Member</span>
             </div>
           </div>
           <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
           <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
             <a href="#" class="dropdown-item preview-item">
               <div class="preview-thumbnail">
                 <div class="preview-icon bg-dark rounded-circle">
                   <i class="mdi mdi-settings text-primary"></i>
                 </div>
               </div>
               <div class="preview-item-content">
                 <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
               </div>
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item preview-item">
               <div class="preview-thumbnail">
                 <div class="preview-icon bg-dark rounded-circle">
                   <i class="mdi mdi-onepassword  text-info"></i>
                 </div>
               </div>
               <div class="preview-item-content">
                 <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
               </div>
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item preview-item">
               <div class="preview-thumbnail">
                 <div class="preview-icon bg-dark rounded-circle">
                   <i class="mdi mdi-calendar-today text-success"></i>
                 </div>
               </div>
               <div class="preview-item-content">
                 <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
               </div>
             </a>
           </div>
         </div>
       </li>
       <li class="nav-item nav-category">
         <span class="nav-link">Navigation</span>
       </li>
       <li class="nav-item menu-items">
         <a class="nav-link" href="{{route('admin.index')}}">
           <span class="menu-icon">
             <i class="mdi mdi-speedometer"></i>
           </span>
           <span class="menu-title">e-commerce</span>
         </a>
       </li>
       <!-- <li class="nav-item menu-items">
         <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
           <span class="menu-icon">
             <i class="mdi mdi-laptop"></i>
           </span>
           <span class="menu-title ">Prodduits</span>
           <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="ui-basic">
           <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Ajouter nouveau produits</a></li>
             <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Liste des produits</a></li>
           </ul>
         </div>
       </li> -->
       <li class="nav-item menu-items active">
         <a class="nav-link" href="{{route('admin.orders.index')}}">
           <span class="menu-icon">
             <i class="mdi mdi-playlist-play"></i>
           </span>
           <span class="menu-title">Produits</span>
         </a>
       </li>
       <li class="nav-item menu-items">
         <a class="nav-link" href="{{route('admin.orders.index')}}">
           <span class="menu-icon">
             <i class="mdi mdi-table-large"></i>
           </span>
           <span class="menu-title">Orders</span>
         </a>
       </li>
       <li class="nav-item menu-items">
         <a class="nav-link" href="pages/charts/chartjs.html">
           <span class="menu-icon">
             <i class="mdi mdi-chart-bar"></i>
           </span>
           <span class="menu-title">Users</span>
         </a>
       </li>
       <li class="nav-item menu-items">
         <a class="nav-link" href="pages/icons/mdi.html">
           <span class="menu-icon">
             <i class="mdi mdi-contacts"></i>
           </span>
           <span class="menu-title">Icons</span>
         </a>
       </li>
       <li class="nav-item menu-items">
         <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
           <span class="menu-icon">
             <i class="mdi mdi-security"></i>
           </span>
           <span class="menu-title">User Pages</span>
           <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="auth">
           <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
             <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
             <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
             <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
             <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
           </ul>
         </div>
       </li>
       <li class="nav-item menu-items">
         <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
           <span class="menu-icon">
             <i class="mdi mdi-file-document-box"></i>
           </span>
           <span class="menu-title">Documentation</span>
         </a>
       </li>
     </ul>
   </nav>
   <!-- partial -->
   <div class="container-fluid page-body-wrapper">
     <!-- partial:partials/_navbar.html -->
     <nav class="navbar p-0 fixed-top d-flex flex-row">
       <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
         <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
       </div>
       <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
         <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
           <span class="mdi mdi-menu"></span>
         </button>
         <ul class="navbar-nav w-100">
           <li class="nav-item w-100">
             <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
               <input type="text" class="form-control" placeholder="Search products">
             </form>
           </li>
         </ul>
         <ul class="navbar-nav navbar-nav-right">
           <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link btn btn-success create-new-button" id="popupButton">+ Créer nouveau produit</a>
             <!-- <a class=" btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false">+ Créer  produit</a> -->
             <!-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
               <h6 class="p-3 mb-0">Projects</h6>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item preview-item">
                 <div class="preview-thumbnail">
                   <div class="preview-icon bg-dark rounded-circle">
                     <i class="mdi mdi-file-outline text-primary"></i>
                   </div>
                 </div>
                 <div class="preview-item-content">
                   <p class="preview-subject ellipsis mb-1">Software Development</p>
                 </div>
               </a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item preview-item">
                 <div class="preview-thumbnail">
                   <div class="preview-icon bg-dark rounded-circle">
                     <i class="mdi mdi-web text-info"></i>
                   </div>
                 </div>
                 <div class="preview-item-content">
                   <p class="preview-subject ellipsis mb-1">UI Development</p>
                 </div>
               </a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item preview-item">
                 <div class="preview-thumbnail">
                   <div class="preview-icon bg-dark rounded-circle">
                     <i class="mdi mdi-layers text-danger"></i>
                   </div>
                 </div>
                 <div class="preview-item-content">
                   <p class="preview-subject ellipsis mb-1">Software Testing</p>
                 </div>
               </a>
               <div class="dropdown-divider"></div>
               <p class="p-3 mb-0 text-center">See all projects</p>
             </div> -->
           </li>
           <li class="nav-item nav-settings d-none d-lg-block">
             <a class="nav-link" href="#">
               <i class="mdi mdi-view-grid"></i>
             </a>
           </li>
           <li class="nav-item dropdown border-left">
             <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
               <i class="mdi mdi-email"></i>
               <span class="count bg-success"></span>
             </a>
             <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
               <h6 class="p-3 mb-0">Messages</h6>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item preview-item">
                 <div class="preview-thumbnail">
                   <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                 </div>
                 <div class="preview-item-content">
                   <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                   <p class="text-muted mb-0"> 1 Minutes ago </p>
                 </div>
               </a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item preview-item">
                 <div class="preview-thumbnail">
                   <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                 </div>
                 <div class="preview-item-content">
                   <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                   <p class="text-muted mb-0"> 15 Minutes ago </p>
                 </div>
               </a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item preview-item">
                 <div class="preview-thumbnail">
                   <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                 </div>
                 <div class="preview-item-content">
                   <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                   <p class="text-muted mb-0"> 18 Minutes ago </p>
                 </div>
               </a>
               <div class="dropdown-divider"></div>
               <p class="p-3 mb-0 text-center">4 new messages</p>
             </div>
           </li>
           <li class="nav-item dropdown border-left">
             <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
               <i class="mdi mdi-bell"></i>
               <span class="count bg-danger"></span>
             </a>
             <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
               <h6 class="p-3 mb-0">Notifications</h6>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item preview-item">
                 <div class="preview-thumbnail">
                   <div class="preview-icon bg-dark rounded-circle">
                     <i class="mdi mdi-calendar text-success"></i>
                   </div>
                 </div>
                 <div class="preview-item-content">
                   <p class="preview-subject mb-1">Event today</p>
                   <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                 </div>
               </a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item preview-item">
                 <div class="preview-thumbnail">
                   <div class="preview-icon bg-dark rounded-circle">
                     <i class="mdi mdi-settings text-danger"></i>
                   </div>
                 </div>
                 <div class="preview-item-content">
                   <p class="preview-subject mb-1">Settings</p>
                   <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                 </div>
               </a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item preview-item">
                 <div class="preview-thumbnail">
                   <div class="preview-icon bg-dark rounded-circle">
                     <i class="mdi mdi-link-variant text-warning"></i>
                   </div>
                 </div>
                 <div class="preview-item-content">
                   <p class="preview-subject mb-1">Launch Admin</p>
                   <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                 </div>
               </a>
               <div class="dropdown-divider"></div>
               <p class="p-3 mb-0 text-center">See all notifications</p>
             </div>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
               <div class="navbar-profile">
                 <img class="img-xs rounded-circle" src="../assets/images/faces/face15.jpg" alt="">
                 <p class="mb-0 d-none d-sm-block navbar-profile-name">@auth {{ Auth::user()->name }} @endauth</p>
                 <i class="mdi mdi-menu-down d-none d-sm-block"></i>
               </div>
             </a>
             <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
               <h6 class="p-3 mb-0">Profile</h6>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item preview-item">
                 <div class="preview-thumbnail">
                   <div class="preview-icon bg-dark rounded-circle">
                     <i class="mdi mdi-settings text-success"></i>
                   </div>
                 </div>
                 <div class="preview-item-content">
                   <p class="preview-subject mb-1">Settings</p>
                 </div>
               </a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item preview-item">
                 <div class="preview-thumbnail">
                   <div class="preview-icon bg-dark rounded-circle">
                     <i class="mdi mdi-logout text-danger"></i>
                   </div>
                 </div>
                 <div class="preview-item-content">
                   <p class="preview-subject mb-1">Log out</p>
                 </div>
               </a>
               <div class="dropdown-divider"></div>
               <p class="p-3 mb-0 text-center">Advanced settings</p>
             </div>
           </li>
         </ul>
         <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
           <span class="mdi mdi-format-line-spacing"></span>
         </button>
       </div>
     </nav>

     <!-- partial -->
     <div class="main-panel">
       <div class="content-wrapper">
        
         <!-- <div class="row">
           <div class="col-md-4 grid-margin stretch-card">
             <div class="card">
               <div class="card-body">
                 <h4 class="card-title">Transaction History</h4>
                 <canvas id="transaction-history" class="transaction-chart"></canvas>
                 <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                   <div class="text-md-center text-xl-left">
                     <h6 class="mb-1">Transfer to Paypal</h6>
                     <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                   </div>
                   <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                     <h6 class="font-weight-bold mb-0">$236</h6>
                   </div>
                 </div>
                 <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                   <div class="text-md-center text-xl-left">
                     <h6 class="mb-1">Tranfer to Stripe</h6>
                     <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                   </div>
                   <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                     <h6 class="font-weight-bold mb-0">$593</h6>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-md-8 grid-margin stretch-card">
             <div class="card">
               <div class="card-body">
                 <div class="d-flex flex-row justify-content-between">
                   <h4 class="card-title mb-1">Open Projects</h4>
                   <p class="text-muted mb-1">Your data status</p>
                 </div>
                 <div class="row">
                   <div class="col-12">
                     <div class="preview-list">
                       <div class="preview-item border-bottom">
                         <div class="preview-thumbnail">
                           <div class="preview-icon bg-primary">
                             <i class="mdi mdi-file-document"></i>
                           </div>
                         </div>
                         <div class="preview-item-content d-sm-flex flex-grow">
                           <div class="flex-grow">
                             <h6 class="preview-subject">Admin dashboard design</h6>
                             <p class="text-muted mb-0">Broadcast web app mockup</p>
                           </div>
                           <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                             <p class="text-muted">15 minutes ago</p>
                             <p class="text-muted mb-0">30 tasks, 5 issues </p>
                           </div>
                         </div>
                       </div>
                       <div class="preview-item border-bottom">
                         <div class="preview-thumbnail">
                           <div class="preview-icon bg-success">
                             <i class="mdi mdi-cloud-download"></i>
                           </div>
                         </div>
                         <div class="preview-item-content d-sm-flex flex-grow">
                           <div class="flex-grow">
                             <h6 class="preview-subject">Wordpress Development</h6>
                             <p class="text-muted mb-0">Upload new design</p>
                           </div>
                           <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                             <p class="text-muted">1 hour ago</p>
                             <p class="text-muted mb-0">23 tasks, 5 issues </p>
                           </div>
                         </div>
                       </div>
                       <div class="preview-item border-bottom">
                         <div class="preview-thumbnail">
                           <div class="preview-icon bg-info">
                             <i class="mdi mdi-clock"></i>
                           </div>
                         </div>
                         <div class="preview-item-content d-sm-flex flex-grow">
                           <div class="flex-grow">
                             <h6 class="preview-subject">Project meeting</h6>
                             <p class="text-muted mb-0">New project discussion</p>
                           </div>
                           <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                             <p class="text-muted">35 minutes ago</p>
                             <p class="text-muted mb-0">15 tasks, 2 issues</p>
                           </div>
                         </div>
                       </div>
                       <div class="preview-item border-bottom">
                         <div class="preview-thumbnail">
                           <div class="preview-icon bg-danger">
                             <i class="mdi mdi-email-open"></i>
                           </div>
                         </div>
                         <div class="preview-item-content d-sm-flex flex-grow">
                           <div class="flex-grow">
                             <h6 class="preview-subject">Broadcast Mail</h6>
                             <p class="text-muted mb-0">Sent release details to team</p>
                           </div>
                           <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                             <p class="text-muted">55 minutes ago</p>
                             <p class="text-muted mb-0">35 tasks, 7 issues </p>
                           </div>
                         </div>
                       </div>
                       <div class="preview-item">
                         <div class="preview-thumbnail">
                           <div class="preview-icon bg-warning">
                             <i class="mdi mdi-chart-pie"></i>
                           </div>
                         </div>
                         <div class="preview-item-content d-sm-flex flex-grow">
                           <div class="flex-grow">
                             <h6 class="preview-subject">UI Design</h6>
                             <p class="text-muted mb-0">New application planning</p>
                           </div>
                           <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                             <p class="text-muted">50 minutes ago</p>
                             <p class="text-muted mb-0">27 tasks, 4 issues </p>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div> -->
         <div class="row">
           <div class="col-sm-4 grid-margin">
             <div class="card">
               <div class="card-body">
                 <h5>produits</h5>
                 <div class="row">
                   <div class="col-8 col-sm-12 col-xl-8 my-auto">
                     <div class="d-flex d-sm-block d-md-flex align-items-center">
                       <h2 class="mb-0">{{ $productsCount }}</h2>
                       <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                     </div>
                     <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                   </div>
                   <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                     <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-sm-4 grid-margin">
             <div class="card">
               <div class="card-body">
                 <h5>revenu</h5>
                 <div class="row">
                   <div class="col-8 col-sm-12 col-xl-8 my-auto">
                     <div class="d-flex d-sm-block d-md-flex align-items-center">
                       <h2 class="mb-0">${{ $total }}</h2>
                       <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                     </div>
                     <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                   </div>
                   <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                   <i class="icon-lg mdi mdi-cash-usd  text-danger ml-auto"></i>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-sm-4 grid-margin">
             <div class="card">
               <div class="card-body">
                 <h5>Purchase</h5>
                 <div class="row">
                   <div class="col-8 col-sm-12 col-xl-8 my-auto">
                     <div class="d-flex d-sm-block d-md-flex align-items-center">
                       <h2 class="mb-0">$2039</h2>
                       <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
                     </div>
                     <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                   </div>
                   <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                     <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

         
         <style>
          #blur-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            display: none;
            z-index: 9998;
          }
          .popup{
            display: none;
            position: fixed;
            top: 30px;
            width: 70%;
            z-index: 9999;
            opacity: 0;
            animation: 0.4s fade;
          }
          .popup .card-body{
            overflow-y: scroll;
            overflow-x: hidden;
            height: 550px;
          }
          .popup.show{
            opacity: 1;
            display: block;
          }
          .close,
          .closeEdit{
            position: absolute;
            right: 20px;
            top: 8px;
            cursor: pointer;
          }
          @keyframes fade{ 
            0%{
                opacity: 0;
            }
            100%{
                opacity: 100%;
            }
          }

          #deleteModal .modal-content{
            background: #191c24;
          }
          #deleteModal .btn-close{
            font-size: 30px;
            border: none;
            background: none;          
          }
         </style>

         <!-- javascript code its belowe " ltaaht ga3 " -->

          <!-- add product pop up  -->
          <div id="popupForm" class="row popup">
            <div class="col-md-8 mx-auto grid-margin stretch-card">
              <div class="card border-light">
              <span class="close text-danger fs-2">&times;</span>
                <div class="card-body">
                
                  <h4 class="card-title">Ajouter nouveau produit</h4>
                  <!-- <p class="card-description"> Basic form layout </p> -->
                  <form class="forms-sample" method="POST" action="{{route('admin.produits.add')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nom de produit</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Nom de produit">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Slug</label>
                      <input type="text" class="form-control" name="slug" id="slug" placeholder="slug">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Short description</label>
                      <input type="text" class="form-control" name="short_description" id="shortDescription" placeholder="Short description">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" class="form-control" name="description" id="description" placeholder="Description">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Regular price</label>
                      <input type="text" class="form-control" name="regular_price" id="regularPrice" placeholder="Regular price">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Sale price</label>
                      <input type="text" class="form-control" name="sale_price" id="salePrice" placeholder="sale price">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">SKU</label>
                      <input type="text" class="form-control" name="SKU" id="sku" placeholder="SMD(100-500)">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Quantity</label>
                      <input type="text" class="form-control" name="quantity" id="quantity" placeholder="quantity">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Image</label>
                      <input type="file" class="form-control" name="image" id="image">
                    </div>
                    <div class="form-group">
                      <label for="">Status</label><br>
                        <select class="form-select" id="status" name="status">
                          <option value="instock">instock</option>
                          <option class="text-danger" value="outofstock">outofstock</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="">Category</label><br>
                      <select class="form-select" id="category" name="category">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Ajouter le produit</button>
                    <button class="btn btn-dark">Annuler</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
        <!-- edit product pop up -->
        <div id="editForm" class="row popup">
            <div class="col-md-8 mx-auto grid-margin stretch-card">
              <div class="card border-light">
              <span class="close closeEdit text-danger fs-2">&times;</span>
                <div class="card-body">
                
                  <h4 class="card-title">Modifier le produit</h4>
                  <!-- <p class="card-description"> Basic form layout </p> -->
                  <form class="forms-sample" method="POST" action="{{route('admin.produits.update')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="e-id" name="id" value="">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nom de produit</label>
                      <input type="text" class="form-control" name="name" id="e-name" placeholder="Nom de produit" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Slug</label>
                      <input type="text" class="form-control" name="slug" id="e-slug" placeholder="Password" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Short description</label>
                      <input type="text" class="form-control" name="short_description" id="e-shortDescription" placeholder="Short description" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" class="form-control" name="description" id="e-description" placeholder="Description" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Regular price</label>
                      <input type="text" class="form-control" name="regular_price" id="e-regularPrice" placeholder="Regular price" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Sale price</label>
                      <input type="text" class="form-control" name="sale_price" id="e-salePrice" placeholder="sale price" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">SKU</label>
                      <input type="text" class="form-control" name="SKU" id="e-sku" placeholder="SMD(100-500)" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Quantity</label>
                      <input type="text" class="form-control" id="e-quantity" name="quantity" placeholder="quantity" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Image</label>
                      <input type="file" class="form-control" id="e-image" name="image" value="">
                    </div>
                    <div class="form-group">
                      <label for="">Status</label><br>
                        <select class="form-select status" id="e-status" name="status">
                          <option value="instock">instock</option>
                          <option class="text-danger" value="outofstock">outofstock</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="">Category</label><br>
                      <select class="form-select" id="e-category" name="category">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
                    <button class="btn btn-dark">Annuler</button>
                  </form>
                </div>
              </div>
            </div>
        </div> 


        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="deleteModalLabel">Attention !</h5>
                      <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                  </div>
                  <div class="modal-body">
                      étes vous sur, vous voulez supprimer ce produit ?
                  </div>
                  <div class="modal-footer">
                      <form id="deleteForm" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                          <button type="submit" class="btn btn-danger">Supprimer</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>


      <!--------------- products list ----------->

         <div class="row">
           <div class="col-12 grid-margin">
             <div class="card">
               <div class="card-body">
                 <h4 class="card-title">Tout les produits</h4>
                 <div class="table-responsive">
                   <table class="table">
                     <thead>
                       <tr>
                         <th>
                           <div class="form-check form-check-muted m-0">
                             <label class="form-check-label">
                               <input type="checkbox" class="form-check-input">
                             </label>
                           </div>
                         </th>
                         <th> image</th>
                         <th> Nom de produit </th>
                         <th> category </th>
                         <th> Prix </th>
                         <th> Quantité </th>
                         <th> status </th>
                         <th> action </th>
                       </tr>
                     </thead>
                     <tbody>
                     @foreach($products as $product)
                       <tr>
                         <td>
                           <div class="form-check form-check-muted m-0">
                             <label class="form-check-label">
                               <input type="checkbox" class="form-check-input">
                             </label>
                           </div>
                         </td>
                         <td> <img src="{{asset('assets/img')}}/{{$product->image}}" alt="{{$product->image}}" style="width:80px; height:80px;"> </td>
                         <td>
                            <span class="name pl-2">{{$product->name}}</span>
                         </td>
                         <td class="category">{{$product->category->name}}</td>
                         <td class="regularPrice"> ${{$product->regular_price}}</td>
                         <td class="quantity"> {{$product->quantity}} </td>
                         <td>
                           <div class="status badge badge-outline-success">{{$product->stock_status}}</div>
                         </td>
                         <td class="d-none slug"> {{$product->slug}} </td>
                         <td class="d-none id"> {{$product->id}} </td>
                         <td class="d-none salePrice"> {{$product->sale_price}} </td>
                         <td class="d-none shortDescription"> {{$product->short_description}} </td>
                         <td class="d-none description"> {{$product->description}} </td>
                         <td class="d-none SKU"> {{$product->SKU}} </td>
                         <td>
                            <button id="ApopupButton" data-id="{{$product->id}}" class="EditButton btn btn-info"><i class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"  data-id="{{ $product->id }}">
                            <i class="bi bi-trash"></i>
                            </button>
                            <!-- <a class="btn btn-danger"><i class="bi bi-trash"></i></a> -->
                         </td>
                         @endforeach
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-md-6 col-xl-4 grid-margin stretch-card">
             <div class="card">
               <div class="card-body">
                 <div class="d-flex flex-row justify-content-between">
                   <h4 class="card-title">Messages</h4>
                   <p class="text-muted mb-1 small">View all</p>
                 </div>
                 <div class="preview-list">
                   <div class="preview-item border-bottom">
                     <div class="preview-thumbnail">
                       <img src="assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                     </div>
                     <div class="preview-item-content d-flex flex-grow">
                       <div class="flex-grow">
                         <div class="d-flex d-md-block d-xl-flex justify-content-between">
                           <h6 class="preview-subject">Leonard</h6>
                           <p class="text-muted text-small">5 minutes ago</p>
                         </div>
                         <p class="text-muted">Well, it seems to be working now.</p>
                       </div>
                     </div>
                   </div>
                   <div class="preview-item border-bottom">
                     <div class="preview-thumbnail">
                       <img src="assets/images/faces/face8.jpg" alt="image" class="rounded-circle" />
                     </div>
                     <div class="preview-item-content d-flex flex-grow">
                       <div class="flex-grow">
                         <div class="d-flex d-md-block d-xl-flex justify-content-between">
                           <h6 class="preview-subject">Luella Mills</h6>
                           <p class="text-muted text-small">10 Minutes Ago</p>
                         </div>
                         <p class="text-muted">Well, it seems to be working now.</p>
                       </div>
                     </div>
                   </div>
                   <div class="preview-item border-bottom">
                     <div class="preview-thumbnail">
                       <img src="assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                     </div>
                     <div class="preview-item-content d-flex flex-grow">
                       <div class="flex-grow">
                         <div class="d-flex d-md-block d-xl-flex justify-content-between">
                           <h6 class="preview-subject">Ethel Kelly</h6>
                           <p class="text-muted text-small">2 Hours Ago</p>
                         </div>
                         <p class="text-muted">Please review the tickets</p>
                       </div>
                     </div>
                   </div>
                   <div class="preview-item border-bottom">
                     <div class="preview-thumbnail">
                       <img src="assets/images/faces/face11.jpg" alt="image" class="rounded-circle" />
                     </div>
                     <div class="preview-item-content d-flex flex-grow">
                       <div class="flex-grow">
                         <div class="d-flex d-md-block d-xl-flex justify-content-between">
                           <h6 class="preview-subject">Herman May</h6>
                           <p class="text-muted text-small">4 Hours Ago</p>
                         </div>
                         <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-md-6 col-xl-4 grid-margin stretch-card">
             <div class="card">
               <div class="card-body">
                 <h4 class="card-title">Portfolio Slide</h4>
                 <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                   <div class="item">
                     <img src="assets/images/dashboard/Rectangle.jpg" alt="">
                   </div>
                   <div class="item">
                     <img src="assets/images/dashboard/Img_5.jpg" alt="">
                   </div>
                   <div class="item">
                     <img src="assets/images/dashboard/img_6.jpg" alt="">
                   </div>
                 </div>
                 <div class="d-flex py-4">
                   <div class="preview-list w-100">
                     <div class="preview-item p-0">
                       <div class="preview-thumbnail">
                         <img src="assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                       </div>
                       <div class="preview-item-content d-flex flex-grow">
                         <div class="flex-grow">
                           <div class="d-flex d-md-block d-xl-flex justify-content-between">
                             <h6 class="preview-subject">CeeCee Bass</h6>
                             <p class="text-muted text-small">4 Hours Ago</p>
                           </div>
                           <p class="text-muted">Well, it seems to be working now.</p>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <p class="text-muted">Well, it seems to be working now. </p>
                 <div class="progress progress-md portfolio-progress">
                   <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-md-12 col-xl-4 grid-margin stretch-card">
             <div class="card">
               <div class="card-body">
                 <h4 class="card-title">To do list</h4>
                 <div class="add-items d-flex">
                   <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                   <button class="add btn btn-primary todo-list-add-btn">Add</button>
                 </div>
                 <div class="list-wrapper">
                   <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                     <li>
                       <div class="form-check form-check-primary">
                         <label class="form-check-label">
                           <input class="checkbox" type="checkbox"> Create invoice </label>
                       </div>
                       <i class="remove mdi mdi-close-box"></i>
                     </li>
                     <li>
                       <div class="form-check form-check-primary">
                         <label class="form-check-label">
                           <input class="checkbox" type="checkbox"> Meeting with Alita </label>
                       </div>
                       <i class="remove mdi mdi-close-box"></i>
                     </li>
                     <li class="completed">
                       <div class="form-check form-check-primary">
                         <label class="form-check-label">
                           <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                       </div>
                       <i class="remove mdi mdi-close-box"></i>
                     </li>
                     <li>
                       <div class="form-check form-check-primary">
                         <label class="form-check-label">
                           <input class="checkbox" type="checkbox"> Plan weekend outing </label>
                       </div>
                       <i class="remove mdi mdi-close-box"></i>
                     </li>
                     <li>
                       <div class="form-check form-check-primary">
                         <label class="form-check-label">
                           <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                       </div>
                       <i class="remove mdi mdi-close-box"></i>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-12">
             <div class="card">
               <div class="card-body">
                 <h4 class="card-title">Visitors by Countries</h4>
                 <div class="row">
                   <div class="col-md-5">
                     <div class="table-responsive">
                       <table class="table">
                         <tbody>
                           <tr>
                             <td>
                               <i class="flag-icon flag-icon-us"></i>
                             </td>
                             <td>USA</td>
                             <td class="text-right"> 1500 </td>
                             <td class="text-right font-weight-medium"> 56.35% </td>
                           </tr>
                           <tr>
                             <td>
                               <i class="flag-icon flag-icon-de"></i>
                             </td>
                             <td>Germany</td>
                             <td class="text-right"> 800 </td>
                             <td class="text-right font-weight-medium"> 33.25% </td>
                           </tr>
                           <tr>
                             <td>
                               <i class="flag-icon flag-icon-au"></i>
                             </td>
                             <td>Australia</td>
                             <td class="text-right"> 760 </td>
                             <td class="text-right font-weight-medium"> 15.45% </td>
                           </tr>
                           <tr>
                             <td>
                               <i class="flag-icon flag-icon-gb"></i>
                             </td>
                             <td>United Kingdom</td>
                             <td class="text-right"> 450 </td>
                             <td class="text-right font-weight-medium"> 25.00% </td>
                           </tr>
                           <tr>
                             <td>
                               <i class="flag-icon flag-icon-ro"></i>
                             </td>
                             <td>Romania</td>
                             <td class="text-right"> 620 </td>
                             <td class="text-right font-weight-medium"> 10.25% </td>
                           </tr>
                           <tr>
                             <td>
                               <i class="flag-icon flag-icon-br"></i>
                             </td>
                             <td>Brasil</td>
                             <td class="text-right"> 230 </td>
                             <td class="text-right font-weight-medium"> 75.00% </td>
                           </tr>
                         </tbody>
                       </table>
                     </div>
                   </div>
                   <div class="col-md-7">
                     <div id="audience-map" class="vector-map"></div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <!-- content-wrapper ends -->
       <!-- partial:partials/_footer.html -->
       <footer class="footer">
         <div class="d-sm-flex justify-content-center justify-content-sm-between">
           <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
           <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
         </div>
       </footer>
       <!-- partial -->
     </div>

     <!-- main-panel ends -->

   </div>
   <!-- page-body-wrapper ends -->
 </div>
 <!-- container-scroller -->
 <!-- plugins:js -->
 <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
 <!-- endinject -->
 <!-- Plugin js for this page -->
 <script src="{{ asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
 <script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
 <!-- End plugin js for this page -->
 <!-- inject:js -->
 <script src="{{ asset('assets/js/off-canvas.js')}}"></script>
 <script src="{{ asset('assets/js/hoverable-collapse.js')}}"></script>
 <script src="{{ asset('assets/js/misc.js')}}"></script>
 <script src="{{ asset('assets/js/settings.js')}}"></script>
 <script src="{{ asset('assets/js/todolist.js')}}"></script>
 <!-- endinject -->
 <!-- Custom js for this page -->
 <script src="{{ asset('assets/js/dashboard.js')}}"></script>
 <!-- End custom js for this page -->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
 <script>
      // add product form -------------

          // Get the modal 
          var popupForm = document.getElementById("popupForm");

    // Get the button that opens the modal
    var btn = document.getElementById("popupButton");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    var close = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        //popupForm.style.display = "block";
        popupForm.classList.add("show");
        document.getElementById('blur-background').style.display = 'block';
    }
    // close popup form
    close.onclick = function() {
      //popupForm.style.display = "none";
      popupForm.classList.remove("show");
      document.getElementById('blur-background').style.display = 'none';
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == popupForm) {
            //popupForm.style.display = "none";
            popupForm.classList.remove("show");
            document.getElementById('blur-background').style.display = 'none';
        }
        if (event.target == editForm) {
                //popupForm.style.display = "none";
                editForm.classList.remove("show");
                document.getElementById('blur-background').style.display = 'none';
            }
    }

    // edit product form------------------

      // Get the modal 
      /* var editForm = document.getElementById("editForm");

        // Get the button that opens the modal
        var btn2 = document.getElementById("ApopupButton");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("closeEdit")[0];
        var closeEdit = document.getElementsByClassName("closeEdit")[0];

        // When the user clicks the button, open the modal 
        btn2.onclick = function() {
            //popupForm.style.display = "block";
            editForm.classList.add("show");
            document.getElementById('blur-background').style.display = 'block';
        }
        // close popup form
        closeEdit.onclick = function() {
          //popupForm.style.display = "none";
          editForm.classList.remove("show");
          document.getElementById('blur-background').style.display = 'none';
        } */

        // When the user clicks anywhere outside of the modal, close it
        /* window.onclick = function(event) {
            if (event.target == editForm) {
                //popupForm.style.display = "none";
                editForm.classList.remove("show");
                document.getElementById('blur-background').style.display = 'none';
            }
        }  
        */ 

      // pop up edit form
        document.addEventListener('DOMContentLoaded', function() {
          document.querySelectorAll('.EditButton').forEach(function(button) {
              button.addEventListener('click', function() {
                  var itemId = this.getAttribute('data-id');
                  var editForm = document.getElementById("editForm")
                  //alert('Button clicked for item ID: ' + itemId);
                  editForm.classList.add("show");
                  document.getElementById('blur-background').style.display = 'block';
              });
          });
      });

      $(document).on('click','.EditButton',function()
      {
        var _this = $(this).parents('tr');
        var status = $('.status').val();

        $('#e-id').val(_this.find('.id').text());
        $('#e-name').val(_this.find('.name').text());
        $('#e-slug').val(_this.find('.slug').text());
        $('#e-shortDescription').val(_this.find('.shortDescription').text());
        $('#e-description').val(_this.find('.description').text());
        $('#e-regularPrice').val(_this.find('.regularPrice').text());
        $('#e-salePrice').val(_this.find('.salePrice').text());
        $('#e-sku').val(_this.find('.SKU').text());
        $('#e-quantity').val(_this.find('.quantity').text());
        $('#e-status').val(status);
      })

      /*---- delete modal ----*/
      $(document).ready(function() {
      $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var action = '{{ route('admin.produits.delete', ':id') }}';
        action = action.replace(':id', id);
        $('#deleteForm').attr('action', action);
      });
    });
    </script>
</body>
</html>



