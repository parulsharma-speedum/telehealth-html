<!--Header-->
<?php include("includes/header.php"); ?> 
<!--/Header-->
<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100 bg-signup">
            <div class="d-flex h-100 justify-content-center align-items-center">
                <div class="mx-auto app-login-box col-md-8">
                    <div class="app-logo-login mx-auto mb-3"></div>
                    <div class="modal-dialog w-100 mt-0 mx-auto">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="system-status text-center mb-3 mt-5">
                                    <img width="100" class="img-system" src="../images/img-system.png" alt="">
                                    <h6 class="small status-text">Version 1.2 Updated</h6>
                                </div>
                                <div class="h5 modal-title text-center">
                                    <h4 class="mt-2">
                                        <div class="text-dark">Welcome Back,</div>
                                        <span>Please sign in to your account below.</span>
                                    </h4>
                                </div>
                                <form class="">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group"><input name="email" id="exampleEmail" placeholder="Enter Email Address" type="email" class="form-control"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="position-relative form-group"><input name="password" id="examplePassword" placeholder="Password" type="password" class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="position-relative form-check mb-2"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Keep me logged in</label></div>
                                </form>
                            </div>
                            <div class="modal-footer clearfix">
                                <div class="float-right">
                                    <button class="btn btn-primary btn-lg">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center text-secondary opacity-8 mt-3">Copyright &copy; Speedum 2020</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Footer-->
<?php include("includes/footer.php"); ?>