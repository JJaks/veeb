<?php require_once  APPROOT.'/views/inc/header.php';?>
    <div class="rov">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h2>Login</h2>
                <form action="<?php echo URLROOT; ?>/users/login" method="post">
                    <div class="form-group">
                        <label for="name">Email:</label>
                        <input type="text" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Password:</label>
                        <input type="password" id="pass" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Login" class="btn btn-block btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once APPROOT . '/views/inc/footer.php';?>