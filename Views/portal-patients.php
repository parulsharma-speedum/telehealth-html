<?php 
$pageTitle = "Patients";
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
                <?php include("includes/top-dashboard-patient.php"); ?> 
                <!--/PageTitle-->
                <div class="app-mainpage">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="main-card card">
                                <!--Datatable-->
                                <?php include("includes/data-table.php"); ?>
                                <!--Datatable-->
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
<!--Modal Content-->
<?php include("includes/modal-content.php"); ?> 
<!--/Modal Content-->
<!--Footer-->
<?php include("includes/footer.php"); ?>