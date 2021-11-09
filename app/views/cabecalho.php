 <!-- BEGIN LOADER -->
 <div id="load_screen">
     <div class="loader">
         <div class="loader-content">
             <div class="spinner-grow align-self-center"></div>
         </div>
     </div>
 </div>
 <!--  END LOADER -->

 <!--  BEGIN NAVBAR  -->
 <div class="header-container fixed-top">
     <header class="header navbar navbar-expand-sm">

         <ul class="navbar-item theme-brand flex-row  text-center">
             <li class="nav-item theme-logo">
                 <a href="index.html">
                     <img src="<?php echo URL_BASE ?>assets/assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                 </a>
             </li>
             <li class="nav-item theme-text">
                 <a href="<?php echo URL_BASE ?>" class="nav-link"> Área administrativa </a>
             </li>
         </ul>

         <ul class="navbar-item flex-row ml-md-auto">

             <li class="nav-item dropdown user-profile-dropdown">
                 <a href="" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Sair
                 </a>
                 <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                     <div class="">
                         <div class="dropdown-item">
                             <a class="" href="<?php echo URL_BASE . "login/sair"?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                     <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                     <circle cx="12" cy="7" r="4"></circle>
                                 </svg>Sair</a>
                         </div>
                     </div>
                 </div>
             </li>
         </ul>
     </header>
 </div>
 <!--  END NAVBAR  -->

 <!--  BEGIN NAVBAR  -->
 <div class="sub-header-container">
     <header class="header navbar navbar-expand-sm">
         <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                 <line x1="3" y1="12" x2="21" y2="12"></line>
                 <line x1="3" y1="6" x2="21" y2="6"></line>
                 <line x1="3" y1="18" x2="21" y2="18"></line>
             </svg></a>

         <ul class="navbar-nav flex-row">
             <li>
                 <div class="page-header">
                     <div class="page-title">
                         <h3>Menu</h3>
                     </div>
                 </div>
             </li>
         </ul>
     </header>
 </div>
 <!--  END NAVBAR  -->