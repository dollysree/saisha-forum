<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords"  content="Awalk, Creating innovations, Home Automation, Embeded Systems, Product Development, Electronics, techcnical Consultancy"/>
    <meta name="description" content="Awalk is the brain child of students of NIT Rourkela. A brand new venture aimed to deliver products with cutting edge technology. A product development company endeavoring to create products aiding the common life." />

    <meta property="fb:app_id" content="1915709045322786" />
    <meta property="og:title" content="Awalk | Creating Innovations" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="awalk" />
    <meta property="og:url" content="http://www.awalk.co.in/"/>
    <meta property="og:description" content="Awalk is the brain child of students of NIT Rourkela. A brand new venture aimed to deliver products with cutting edge technology. A product development company endeavoring to create products aiding the common life."/>
    <meta property="og:image" content="http://www.awalk.co.in/assets/images/og.png"/>

<!--Andriod phone-->
    <meta name="theme-color" content="#201d36" />
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#201d36">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#201d36">

<link rel="icon"  sizes="92*92" href="http://awalk.co.in/fav2.png">

<title>Awalk | Creating Innovations</title>

  <link href="assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="assets/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="assets/css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="assets/js/plugins/animate-css/animate.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="assets/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection"> 
  <!--dropify-->
  <link href="assets/js/plugins/dropify/css/dropify.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="assets/js/plugins/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">

<style type="text/css">
::-webkit-scrollbar {
    width: 5px;
}
::-webkit-scrollbar-track {
    background-color: #362f58;
    border-left: 1px solid #ccc;
}
::-webkit-scrollbar-thumb {
    background-color: #201d36;
}
::-webkit-scrollbar-thumb:hover {
  background-color: #aaa;
}
.toggle-wrap-ans, .toggle-wrap-com{
display: none;
}
.data-card{
  padding-top:10px; 
  padding-bottom :10px;
}
.p-row{
  margin-bottom: 0px;
}
select option {
    margin:40px;
    background: rgba(0,0,0,0.3);
    color:#fff;
    text-shadow:0 1px 0 rgba(0,0,0,0.4);
}
.dropdown-content {
  background-color: #FFFFFF;
  margin: 0;
  display: none;
  min-width: 180px; /* Changed this to accomodate content width */
  max-height: auto;
  margin-left: -1px; /* Add this to keep dropdown in line with edge of navbar */
  overflow: hidden; /* Changed this from overflow-y:auto; to overflow:hidden; */
  opacity: 0;
  position: absolute;
  white-space: nowrap;
  z-index: 5;
  will-change: width, height;
}
.padzero{
  padding:0px;
}
div.card-action {
    border-style: solid;
    border-color: #694169;
}
div.card-action.row {
    border-color: #5c455c;
    border-left-width: 14px;
    border-bottom-width: 0;
    border-top-width: 0;
}
.wp{
  word-wrap: break-word;
}

.topbor {
    border-style: solid;
    border-bottom-width: 0;
    border-left-width: 0;
    border-right-width: 0;
}
.botmbor {
    border-style: solid;
    border-top-width: 0;
    border-left-width: 0;
    border-right-width: 0;
}



</style>

</head>

<body>

  <!-- START HEADER -->
  <header id="header" class="page-topbar ">
        <!-- start header nav-->
        <div class="navbar-fixed ">
            <nav class="navbar-color">
                <div class="nav-wrapper deep-purple darken-4">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="#!" class="brand-logo darken-1"><img src="assets/images/awalk-logo.png" alt="Awalk logo"></a> <span class="logo-text">Awalk</span></h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" list="categories" class="header-search-input z-depth-2" placeholder="Explore awalk"/>
                        <datalist id="categories">
                            <option value="Project Guidance">
                            <option value="Programming">
                            <option value="Aurdino">
                        </datalist>
                    </div>
                    <ul class="right hide-on-med-and-down">
                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button"  data-activates="profile">
                          <span>
                          <?php 
                          if (isset($_SESSION['email']))
                          {
                            $email=$_SESSION['email'];
                            $user_details_query=mysqli_query($conn,"SELECT * FROM users_data where emailid='$email'");
                            $user_details_query_count=mysqli_num_rows($user_details_query);
                            if($user_details_query_count==1){
                               while($user_details_query_data=mysqli_fetch_assoc($user_details_query)){
                                $username=$user_details_query_data['username'];
                                echo 'Hi '.$username;
                               }
                            }
                          } ?>
                        </span>
                        </a>
                      </li>
                        <li><a href="assets/logout.php" class="waves-effect waves-block waves-light" id="<?php if (!isset($_SESSION['email'])){echo "login";} else{
                         echo" logout";
                        }?>"><?php if (!isset($_SESSION['email'])){echo "login";} else{
                         echo" logout";
                        }?></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class=" deep-purple darken-4" style="background-color:#918e9a">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="assets/images/fbprofile.png" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">
                      <?php if (isset($_SESSION['email']))
                          {
                            $email=$_SESSION['email'];
                            $user_details_query=mysqli_query($conn,"SELECT * FROM users_data where emailid='$email'");
                            $user_details_query_count=mysqli_num_rows($user_details_query);
                            if($user_details_query_count==1){
                             while($user_details_query_data=mysqli_fetch_assoc($user_details_query)){
                              $username=$user_details_query_data['username'];
                              echo $username;
                             }
                          }
                          } ?></i></a>
                    <p class="user-roal ">
                              <i class="mdi-av-album ultra-small green-text"></i> User online
                     </p>
                </div>
            </div>
            </li>
            <li><a href="home.php"><i class="mdi-action-home"></i>Home</a></li>
            <li class="comingsoon"><a href="#!"><i class="mdi-social-notifications-none"></i>Notification</a></li>
            <!-- <li class="comingsoon"><a href="#!"><i class="mdi-communication-message"></i>Message</a></li>-->
            <li><a href="view-all.php"><i class="mdi-action-book"></i>Posts</a></li>
            <li class="comingsoon"><a href="#!"><i class="mdi-content-content-paste"></i>Notice Board</a></li>
            <li><a href="#!"><i class="mdi-social-share"></i>Share</a></li>
            <li><a href="#!"><i class="mdi-action-settings"></i>Settings</a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->