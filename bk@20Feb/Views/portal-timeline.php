

<?php 
$pageTitle = "Dashboard";
include("includes/header-clinical.php");
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
                            <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="main-card card card-timeline">
                                <div class="card-header">
                                    <div class="form-check form-check-inline">
                                        <label for="inlineCheckbox1" class="form-check-label">Admin</label>
                                        <input id="inlineCheckbox1" class="form-check-input" type="checkbox" data-size="mini" data-toggle="toggle" data-style="mx-2" checked>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label for="inlineCheckbox2" class="form-check-label">Clinical</label>
                                        <input id="inlineCheckbox2" class="form-check-input" type="checkbox" data-size="mini" data-toggle="toggle" data-style="mx-2">
                                    </div>
                                    <div class="btn-actions-pane-right filter-actions">
                                        <!--Filter Results-->
                                        <?php include("includes/filtered-pills.php"); ?> 
                                        <!--/Filter Results-->
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
                                    <div class="tab-timeline btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm nav btn-group">
                                            <a data-toggle="tab" href="#tab-timeline-0" class="btn-shadow active btn btn-primary">Week</a>
                                            <a data-toggle="tab" href="#tab-timeline-1" class="btn-shadow btn btn-primary">Month</a>
                                            <a data-toggle="tab" href="#tab-timeline-2" class="btn-shadow btn btn-primary">Quarter</a>
                                            <a data-toggle="tab" href="#tab-timeline-3" class="btn-shadow btn btn-primary">Year</a>
                                            <a data-toggle="tab" href="#tab-timeline-4" class="btn-shadow btn btn-primary">Lifespan</a>
                                        </div>
                                    </div>
                                    <div class="tab-content tab-timeline-content">
                                        <div class="tab-pane active" id="tab-timeline-0" role="tabpanel">
                                        <!--Timeline-->
                                        <?php include("includes/timeline.php"); ?>
                                        <!--Timeline-->
                                        </div>
                                        <div class="tab-pane" id="tab-timeline-1" role="tabpanel">
                                        <!--Timeline-->
                                        <?php include("includes/timeline.php"); ?>
                                        <!--Timeline-->
                                        </div>
                                        <div class="tab-pane" id="tab-timeline-2" role="tabpanel">
                                        <!--Timeline-->
                                        <?php include("includes/timeline.php"); ?>
                                        <!--Timeline-->
                                        </div>
                                    </div>
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