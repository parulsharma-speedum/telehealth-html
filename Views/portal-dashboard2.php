<?php 
$pageTitle = "Dashboard";
include("includes/header-inner.php");
?>
<!--Ui theme options-->
    <?php include("includes/ui-theme.php"); ?> 
<!--/Ui theme options-->

    <div class="app-main">
        <!--Sidebar-->
        <?php include("includes/sidebar.php"); ?> 
        <!--/Sidebar-->
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <!--PageTitle-->
                    <?php include("includes/top-dashboard-appointment.php"); ?> 
                    <!--/PageTitle-->
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <!--Responsive Table-->
                            <?php include("includes/resposive-table.php"); ?>
                            <!--Responsive Table-->
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