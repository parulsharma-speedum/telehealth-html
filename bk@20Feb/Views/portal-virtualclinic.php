<?php 
$pageTitle = "Dashboard";
include("includes/header-clinical.php");
?>
    <div class="app-main">
        <!--Sidebar-->
        <?php include("includes/sidebar.php"); ?> 
        <!--/Sidebar-->
            <div class="app-main__outer">
                <div class="app-main__inner app-virtualclinic">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-7 pr-0">
                            <!--Patient Banner-->
                            <?php include("includes/top-patient-banner-virtual-clinic.php"); ?> 
                            <!--/Patient Banner-->
                            <div class="main-card mb-3 card">
                            <!--Timeline-->
                            <?php include("includes/medical-assessment.php"); ?>
                            <!--Timeline-->
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-5">
                            <!--PageTitle-->
                            <?php include("includes/top-title-virtual-clinic.php"); ?>
                            <!--PageTitle-->
                            <div class="main-card mb-10p card">
                            <!--Datatable-->
                            <?php include("includes/table-patient-waitingvc.php"); ?>
                            <!--Datatable-->
                            </div>
                            <div class="main-card mb-10p card">
                            <!--Datatable-->
                            <?php include("includes/table-virtual-assist.php"); ?>
                            <!--Datatable-->
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