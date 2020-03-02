
<!-- /*Add Support Member*/ -->

    <div class="card-body p-0">
        <h5 class="card-title">Add New Members</h5>
        <form class="">
            <div id="apm-doctorselection" class="position-relative row form-group">
                <div class="col-sm-10">
                    <select class="multiselect-dropdown form-control form-control-sm apm-selectdoc" name="apm-selectdoc" id="apm-selectdoc">
                        <optgroup label="Audiology">
                            <option value="Dr. Naved Ahmed">Dr. Naved Ahmed</option>
                            <option value="Dr. Shabana Shah">Dr. Shabana Shah</option>
                        </optgroup>
                        <optgroup label="Cardiology">
                            <option value="Dr. Adam Davidson">Dr. Adam Davidson</option>
                            <option value="Dr. Jared Leto">Dr. Jared Leto</option>
                            <option value="Dr. Joe Sheeran">Dr. Joe Sheeran</option>
                        </optgroup>
                        <optgroup label="Dentistry">
                            <option value="Dr. Christopher Nolan">Dr. Christopher Nolan</option>
                            <option value="Dr. Maria Doe">Dr. Maria Doe</option>
                            <option value="Dr. Javed Rehman">Dr. Javed Rehman</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2 p-0" for="apm-selectdoc">
                    <button class="btn btn-sm btn-primary" type="button">Attach to Group</button>
                </div>
                <div class="col-sm-12">
                    <div class="d-block mt-2" id="apm-selected">
                        <!-- <a href="javascript:void(0);" class="fa-xs mb-2 mr-2 btn-pill btn btn-sm badge-outline-yellow"></a> -->
                    </div>
                </div>
            </div>

            <div class="position-relative row form-group">
                <label class="col-sm-3 col-form-label" for="apm-name">Name</label>
                <div class="col-sm-9"><input name="apm-name" id="apm-name" placeholder="Enter Name" type="text" class="form-control form-control-sm"></div>
            </div>
            <div class="position-relative row form-group">
                <label class="col-sm-3 col-form-label" for="apm-relation">Relation</label>
                <div class="col-sm-9">
                    <select name="apm-relation" id="apm-relation" class="form-control form-control-sm">
                        <option>Dad</option>
                        <option>Mom</option>
                        <option>Husband</option>
                        <option>Wife</option>
                        <option>Brother</option>
                        <option>Sister</option>
                    </select>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label class="col-sm-3 col-form-label" for="apm-contact">Contact</label>
                <div class="col-sm-9"><input name="email" id="apm-contact" placeholder="Enter Contact Details" type="text" class="form-control form-control-sm"></div>
            </div>
            <div class="position-relative row form-group">
                <label class="col-sm-3 col-form-label">File</label>
                <div class="col-sm-9"><input name="file" id="apm-uploadfile" type="file" class="form-control-file">
                    <span class="form-text text-muted">Upload Picture</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <div class="col-sm-9 offset-sm-3">
                    <button class="btn btn-sm btn-primary" type="button">Add to Group</button>
                </div>
            </div>
        </form>
    </div>
