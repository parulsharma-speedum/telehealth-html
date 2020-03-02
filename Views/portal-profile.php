<?php 
$pageTitle = "My Profile";
include("includes/header-inner.php");
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
                <?php include("includes/pagetitle.php"); ?> 
                <!--/PageTitle-->
                <div class="app-mainpage">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                        <!--Profile-->
                        <?php include("includes/myprofile.php"); ?> 
                        <!--/Profile-->
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
<!--Modal Content-->
<?php include("includes/modal-content.php"); ?> 
<!--/Modal Content-->
<!--Footer-->
<?php include("includes/footer.php"); ?>