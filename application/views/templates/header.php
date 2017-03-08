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
    <meta property="og:image" content="http://www.awalk.co.in/../images/og.png"/>

<!--Andriod phone-->
<meta name="theme-color" content="#201d36" />
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#201d36">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#201d36">

 <link rel="icon"  sizes="92*92" href="http://awalk.co.in/fav2.png">

    <title>Awalk | Creating Innovations</title>  
  <!-- For Windows Phone -->

  <link href="assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="assets/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="assets/css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="assets/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="jassets/s/plugins/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
<style type="text/css">
::-webkit-scrollbar {
    width: 10px;
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
.wp{
  word-wrap: break-word;
}
</style>

</head>

<body>
  <!-- Start Page Loading 
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
   End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

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
                        <input type="text" name="Search" list="browsers" class="header-search-input z-depth-2" placeholder="Explore awalk"/>
                        <datalist id="browsers">
                            <option value="Internet Explorer">
                            <option value="Firefox">
                            <option value="Chrome">
                            <option value="Opera">
                            <option value="Safari">
                          </datalist>
                    </div>
                    <ul class="right hide-on-med-and-down">
                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" id="profile">
                          <?php if (isset($_SESSION['email']))
                          {
                            $email=$_SESSION['email'];
                            $user_details_query=mysqli_query($conn,"SELECT * FROM users_data where emailid='$email'");
                            $user_details_query_count=mysqli_num_rows($user_details_query);
                            if($user_details_query_count==1){
                             while($user_details_query_data=mysqli_fetch_assoc($user_details_query)){
                              echo 'Hi '.$user_details_query_data['username'];
                             }
                          }
                          } ?>
                        </a>
                      </li>

                        <li><a href="<?php if (!isset($_SESSION['email'])){ ?>user-login.php <?php }else { ?>logout.php <?php }?>" class="waves-effect waves-block waves-light" ><?php if (!isset($_SESSION['email'])){echo "SignIn";} else{
                         echo"signout";
                        }?></a></li>
                       
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->
