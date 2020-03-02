<?php 
$pageTitle = "Clinical";
include("includes/header-clinical.php");
?>
<?php 
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 
?>
    <div class="app-main">
        <!--Sidebar-->
        <?php include("includes/sidebar.php"); ?> 
        <!--/Sidebar-->
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <!--PageTitle-->
                    <?php include("includes/top-patient-banner.php"); ?> 
                    <!--/PageTitle-->
                    <div class="app-mainpage">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12 content-col">
                            <div class="main-card content card card-cpoe">
                                <div class="card-header">Order Review</div>
                                <div class="card-body card-review">
                                    <div class="row">
                                        <div class="col-md-6 content-col">
                                        <!--Order Review-->
                                        <?php include("includes/order-review.php"); ?> 
                                        <!--Order Review-->
                                        </div>
                                        <div class="col-md-6 content-col">
                                        <!--List Group-->
                                        <?php include("includes/addorder-details.php"); ?> 
                                        <!--List Group-->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-light">Cancel</button>
                                    <button type="button" class="btn btn-primary">Next</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Footer Bottom-->
                <?php include("includes/footer-bottom.php"); ?> 
                <!--/Footer Bottom-->
            </div>
        </div>
    </div>
<!--Drawer-->
<?php include("includes/drawer.php"); ?> 
<!--/Drawer-->

<!--Footer-->
<?php include("includes/footer.php"); ?>