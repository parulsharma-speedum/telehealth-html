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
                            <div class="card-header">
                                <div class="form-check form-check-inline">
                                    <label for="inlineCheckbox1" class="form-check-label">Admin</label>
                                    <input id="inlineCheckbox1" class="form-check-input" type="checkbox" data-size="mini" data-toggle="toggle" data-style="mx-2" checked>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label for="inlineCheckbox2" class="form-check-label">Clinical</label>
                                    <input id="inlineCheckbox2" class="form-check-input" type="checkbox" data-size="mini" data-toggle="toggle" data-style="mx-2">
                                </div>
                                <div class="btn-actions-pane-right">
                                    <a href="portal-new-assessment.php" class="btn btn-primary">New Assessment</a>
                                    <div class="btn-group dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                            <i class="pe-7s-edit text-dark fsize-2 btn-icon-wrapper"></i>
                                        </button>
                                        <!--Filter Dropdown-->
                                        <?php include("includes/filter-dropdown.php"); ?> 
                                        <!--/Filter Dropdown-->
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                            <!--Timeline-->
                            <?php include("includes/datatable-assessment.php"); ?>
                            <!--Timeline-->
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