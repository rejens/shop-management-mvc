<?php require_once APPROOT . "/views/includes/header.php"; ?>


<body style="background-image: url('<?php echo IMG ?>darkGradient.jpg') ; background-repeat: no-repeat;  background-size: 100%">
    <div class="card mb-3 bg-light shadow-lg" style="max-width: 540px; margin:0 auto;margin-top:3%">
        <div class="row g-0">
            <div class="col-md-4 col-sm bg-dark">
                <img src="<?php echo IMG ?>vector-sign-of-user-icon.webp" class="img-fluid rounded-start mt-5 pt-3  img-responsive" style="border-radius: 5rem;" alt="">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title mb-4 mt-2 d-flex justify-content-center">Login </h5>
                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">user id</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa-solid py-1 fa-id-card"></i></div>
                                </div>
                                <input type="number" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">company name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa-solid py-1 fa-building"></i></div>
                                </div>
                                <input type="text" name="company" class="form-control" id="exampleCompany" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa-solid py-1 fa-key"></i></div>
                                </div>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                            </div>
                        </div>

                        <div class="text-center m-3"><a href="<?php echo URLROOT ?>users/forgotPassword">Forgot password?</a></div>

                        <button type="submit" name="login" class="btn btn-dark" style="margin-left: 8rem;">Login</button>

                        <p class="text-center pt-5">Don't have an account? <a class="" href="<?php echo URLROOT ?>users/signup">Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>