
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
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

<div id="new-assessment" class="modal fade" tabindex="1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Assessment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="card-border border-muted card card-body mb-15p">
                <h5 class="card-title text-capitalize">Change Assessment</h5>
                <div class="row">
                    <div class="col-md-6 mb-10p multiselect-drop">
                        <label for="ma-type">Select Assessment Type</label>
                        <!-- <select style="width:100%" id="ma-type" name="ma-type" multiple="true" class="select2-custom"> -->
                        <select multiple="multiple" id="ma-type" name="ma-type" class="multiselect-dropdown form-control form-control-sm">
                            <optgroup label="Categories">
                                <option value="c1">Initial</option>
                                <option value="c2">Follow Up</option>
                                <option value="c3">Mental Health</option>
                                <option value="c4">Paediatrics</option>
                                <option value="c5">Initial</option>
                                <option value="c6">Follow Up</option>
                                <option value="c7">Mental Health</option>
                                <option value="c8">Paediatrics</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-6 mb-10p">
                        <label for="ma-action">Choose to:</label>
                        <div class="position-relative form-group">
                            <div class="custom-radio custom-radiobtn custom-control custom-control-inline">
                                <input type="radio" id="ma-action-add" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label btn btn-outline-primary" for="ma-action-add"><span><i class="fa fa-check"></i></span> Document</label>
                            </div>
                            <span class="mx-2">Or</span>
                            <div class="custom-radio custom-radiobtn custom-control custom-control-inline">
                                <input type="radio" id="ma-action-record" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label btn btn-outline-primary" for="ma-action-record"><span><i class="fa fa-check"></i></span> Add to My List</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='portal-new-assessment.php';">Next</button>
            </div>
        </div>
    </div>
</div>