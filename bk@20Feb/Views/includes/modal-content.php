
<!-- /*Modal Content*/ -->

<div id="add-support" class="modal fade" tabindex="1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Support Network</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-0">
                <div class="card-header">
                    <ul class="nav">
                        <li class="nav-item"><a data-toggle="tab" href="#add-support-tab1" class="active nav-link">Support Members</a></li>
                        <li class="nav-item"><a data-toggle="tab" href="#add-support-tab2" class="nav-link">Add New Member</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="add-support-tab1" role="tabpanel">
                        <!--Datatable-->
                        <?php include("includes/data-table-2.php"); ?>
                        <!--Datatable-->
                        </div>
                        <div class="tab-pane" id="add-support-tab2" role="tabpanel">
                        <!--Datatable-->
                        <?php include("includes/add-support-member.php"); ?>
                        <!--Datatable-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>