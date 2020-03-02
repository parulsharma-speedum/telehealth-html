<?php 
include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Physician Portal - <?php echo $pageTitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/theme.css">
    <!-- <script type="text/javascript" src="../js/handlebars-v4.7.2.js"></script> -->
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
<!--Header START-->
    <div class="app-header header-shadow">
        <div class="app-header__logo"><div class="logo-src"></div><div class="header__pane ml-auto"><div><button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button></div></div></div>
        <div class="app-header__mobile-menu"><div><button type="button" class="hamburger hamburger--elastic mobile-toggle-nav"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button></div></div>
        <div class="app-header__menu"><span><button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav"><span class="btn-icon-wrapper"><i class="fa fa-ellipsis-v fa-w-6"></i></span></button></span></div>     
        <div class="app-header__content">
        <div class="app-header-left">
        <!--Top Menus-->
            <?php include("includes/patient/top-menu-patient.php"); ?> 
        <!--/Top Menus-->
        </div>
        <div class="app-header-right">
            <div class="header-dots">
                <div class="search-wrapper wrap-right"><div class="input-holder"><input type="text" class="search-input" placeholder="Type to search"><button class="search-icon"><span></span></button></div><button class="close"></button></div>
                <div class="dropdown">
                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 btn btn-link">
                    <span class="icon-wrapper icon-wrapper-alt rounded-circle"><span class="icon-wrapper-bg bg-theme-orange"></span><i class="icon text-theme-orange icon-anim-pulse ion-android-notifications"></i><span class="badge badge-dot badge-dot-sm badge-theme-orange">Notifications</span></span>
                    </button>
                    <!--Notification dropdown-->
                    <?php include("includes/notification.php"); ?> 
                    <!--/Notification dropdown-->
                </div>
            </div>            
            <div class="header-btn-lg pr-0">
                <!--User Info Widget-->
                <?php include("includes/headerwidget-userinfo.php"); ?> 
                <!--/User Info Widget-->
            </div>
            <div class="header-btn-lg"><button type="button" class="hamburger hamburger--elastic open-right-drawer"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button></div>
        </div>
        </div>
    </div>
<!--Header END-->