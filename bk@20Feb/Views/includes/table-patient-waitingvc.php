
<!-- /*Datatable*/ -->

    <div class="card-header">Patients waiting in Lobby
        <div class="btn-actions-pane-right">
            <button class="btn btn-primary">Call In</button>
        </div>
    </div>
    <div class="card-body table-datatable">
        <table style="width: 100%;" id="tb-patients-waiting" class="table table-hover table-striped table-borderless"> <!-- table-bordered -->
            <thead>
            <tr>
                <th class="td-wd-xs td-check"><div class="custom-checkbox custom-control">
                    <input id="c-all" type="checkbox" class="custom-control-input" onclick="checkAll(this)">
                    <label for="c-all" class="custom-control-label">Check</label>
                </div></th>
                <th class="td-wd-xs">#</th>
                <th class="td-wd-lg td-name">Name</th>
                <th class="td-wd-lg">Appointment Time</th>
                <th class="td-wd-md">Waiting Time</th>
                <th class="td-action text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="td-check"><div class="custom-checkbox custom-control"><input id="c-1" type="checkbox" class="custom-control-input"><label for="c-1" class="custom-control-label">Check</label></div></td>
                <td>#2</td>
                <td class="td-name">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                    <div class="widget-content-left mr-2"><div class="avatar-icon-wrapper"><div class="avatar-icon avatar-icon-lg rounded-circle"><img src="../images/avatars/1.jpg" alt="patient-avatar"></div></div></div>
                    <div class="widget-content-left flex2"><div class="widget-heading">Garrett Winters</div></div>
                    </div>
                </div>
                </td>
                <td>2:00 PM</td>
                <td>0:0:10</td>
                <td class="td-action text-center">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary" data-toggle="tooltip-light" data-placement="top" title="Phone Call"><i class="pe-7s-call"></i></button>
                    <button type="button" class="btn btn-info" data-toggle="tooltip-light" data-placement="top" title="Chat"><i class="pe-7s-chat"></i></button>
                </div>
                </td>
            </tr>
            <tr>
                <td class="td-check"><div class="custom-checkbox custom-control"><input id="c-2" type="checkbox" class="custom-control-input"><label for="c-2" class="custom-control-label">Check</label></div></td>
                <td>#3</td>
                <td class="td-name">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                    <div class="widget-content-left mr-2"><div class="avatar-icon-wrapper"><div class="avatar-icon avatar-icon-lg rounded-circle"><img src="../images/avatars/2.jpg" alt="patient-avatar"></div></div></div>
                    <div class="widget-content-left flex2"><div class="widget-heading">Ashton Cox</div></div>
                    </div>
                </div>
                </td>
                <td>2:00 PM</td>
                <td>0:0:10</td>
                <td class="td-action text-center">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary" data-toggle="tooltip-light" data-placement="top" title="Phone Call"><i class="pe-7s-call"></i></button>
                    <button type="button" class="btn btn-info" data-toggle="tooltip-light" data-placement="top" title="Chat"><i class="pe-7s-chat"></i></button>
                </div>
                </td>
            </tr>
            <tr>
                <td class="td-check"><div class="custom-checkbox custom-control"><input id="c-3" type="checkbox" class="custom-control-input"><label for="c-3" class="custom-control-label">Check</label></div></td>
                <td>#1</td>
                <td class="td-name">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                    <div class="widget-content-left mr-2"><div class="avatar-icon-wrapper"><div class="avatar-icon avatar-icon-lg rounded-circle"><img src="../images/avatars/3.jpg" alt="patient-avatar"></div></div></div>
                    <div class="widget-content-left flex2"><div class="widget-heading">Cedric Kelly</div></div>
                    </div>
                </div>
                </td>
                <td>2:00 PM</td>
                <td>0:0:10</td>
                <td class="td-action text-center">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary" data-toggle="tooltip-light" data-placement="top" title="Phone Call"><i class="pe-7s-call"></i></button>
                    <button type="button" class="btn btn-info" data-toggle="tooltip-light" data-placement="top" title="Chat"><i class="pe-7s-chat"></i></button>
                </div>
                </td>
            </tr>
            <tr>
                <td class="td-check"><div class="custom-checkbox custom-control"><input id="c-4" type="checkbox" class="custom-control-input"><label for="c-4" class="custom-control-label">Check</label></div></td>
                <td>#4</td>
                <td class="td-name">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                    <div class="widget-content-left mr-2"><div class="avatar-icon-wrapper"><div class="avatar-icon avatar-icon-lg rounded-circle"><img src="../images/avatars/5.jpg" alt="patient-avatar"></div></div></div>
                    <div class="widget-content-left flex2"><div class="widget-heading">Garrett Winters</div></div>
                    </div>
                </div>
                </td>
                <td>2:00 PM</td>
                <td>0:0:10</td>
                <td class="td-action text-center">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary" data-toggle="tooltip-light" data-placement="top" title="Phone Call"><i class="pe-7s-call"></i></button>
                    <button type="button" class="btn btn-info" data-toggle="tooltip-light" data-placement="top" title="Chat"><i class="pe-7s-chat"></i></button>
                </div>
                </td>
            </tr>
        </table>
    </div>