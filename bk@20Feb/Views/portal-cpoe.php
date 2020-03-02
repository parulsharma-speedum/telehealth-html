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
                            <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="main-card mb-3 card card-cpoe">
                                <div class="card-header">Orders</div>
                                <div class="card-body">
                                    <div class="card-border border-muted card card-body mb-3">
                                        <div class="row">
                                            <div class="col-md-3 multiselect-drop">
                                            <h5 class="font-size-md text-capitalize font-weight-normal">Select Categories</h5>
                                            <select multiple="multiple" class="multiselect-dropdown form-control form-control-sm">
                                                <optgroup label="Category 1">
                                                    <option value="c1">Category 1</option>
                                                    <option value="c2">Category 2</option>
                                                </optgroup>
                                                <optgroup label="Category 2">
                                                    <option value="c3">Category 1</option>
                                                    <option value="c4">Category 2</option>
                                                    <option value="c5">Category 3</option>
                                                </optgroup>
                                            </select>
                                            </div>
                                            <div class="col-md-3 multiselect-drop">
                                            <h5 class="font-size-md text-capitalize font-weight-normal">Select Type</h5>
                                            <select multiple="multiple" class="multiselect-dropdown form-control">
                                                <optgroup label="Type 1">
                                                    <option value="t1">Type 1</option>
                                                    <option value="t2">Type 2</option>
                                                </optgroup>
                                                <optgroup label="Type 2">
                                                    <option value="t3">Type 1</option>
                                                    <option value="t4">Type 2</option>
                                                    <option value="t5">Type 3</option>
                                                </optgroup>
                                            </select>
                                            </div>
                                            <div class="col-md-11">
                                            <div class="position-relative form-group mb-0">
                                                <input placeholder="Enter text here" type="text" class="mb-2 form-control-sm form-control">
                                            </div>
                                            </div>
                                            <div class="col-md-1 pl-0">
                                            <div class="position-relative form-group mb-0 search-cpoe">
                                                <button class="mb-2 btn btn-primary btn-sm">Search</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        <!--List Group-->
                                        <?php include("includes/list-consultation.php"); ?> 
                                        <!--List Group-->
                                        </div>
                                        <div class="col-md-4">
                                        <!--List Group-->
                                        <?php include("includes/list-lab.php"); ?> 
                                        <!--List Group-->
                                        </div>
                                        <div class="col-md-4">
                                        <!--List Group-->
                                        <?php include("includes/list-radiology.php"); ?> 
                                        <!--List Group-->
                                        </div>
                                        <div class="col-md-4">
                                        <!--List Group-->
                                        <?php include("includes/list-medication.php"); ?> 
                                        <!--List Group-->
                                        </div>
                                        <div class="col-md-4">
                                        <!--List Group-->
                                        <?php include("includes/list-therapies.php"); ?> 
                                        <!--List Group-->
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