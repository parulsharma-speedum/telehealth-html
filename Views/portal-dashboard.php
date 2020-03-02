<?php 
$pageTitle = "Dashboard";
include("includes/header-dashboard.php");
?>
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
                    <div class="col-md-12 col-lg-6 col-xl-8 content-col">
                        <!--Responsive Table-->
                        <?php include("includes/resposive-table.php"); ?>
                        <!--Responsive Table-->
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4 content-col">
                        <!--ChartBox Grid-->
                        <?php include("includes/chartbox-grid.php"); ?>
                        <!--ChartBox Grid-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-8 content-col">
                        <!--Stats Graph 1-->
                        <?php include("includes/stats-graph1.php"); ?>
                        <!--Stats Graph 1-->
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4 content-col">
                        <!--ToDO List-->
                        <?php include("includes/todo-list.php"); ?>
                        <!--ToDO List-->
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