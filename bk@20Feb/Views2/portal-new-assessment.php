<?php 
$pageTitle = "Dashboard";
include("includes/header-clinical.php");
?>
<!--Ui theme options-->
    <?php //include("includes/ui-theme.php"); ?> 
<!--/Ui theme options-->

    <div class="app-main">
        <!--Sidebar-->
        <?php include("includes/sidebar.php"); ?> 
        <!--/Sidebar-->
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <!--PageTitle-->
                    <?php include("includes/top-patient-banner.php"); ?> 
                    <!--/PageTitle-->
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="main-card mb-3 card card-timeline">
                        <!--Timeline-->
                        <?php include("includes/medical-assessment-step.php"); ?>
                        <!--Timeline-->
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