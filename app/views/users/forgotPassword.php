<?php require_once APPROOT . "/views/includes/header.php" ?>


<body>

    <!-- forgot password part -->
    <div id="forgotPasswordBody">
        <div class=" d-flex justify-content-center align-items-center " style=" min-height: 100vh;">
            <div class=" card text-white bg-secondary mb-3  " style="width:380px">
                <div class="p-3 text-light">submit your credientals for password recovery</div>
                <div class="card-body">
                    <form method="POST">
                        <div class="input-group mb-3">
                            <input type="number" name="id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="id">
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="email">
                        </div>
                        <input type="submit" class="btn btn-dark" value="submit" name="forgotPasswordSubmit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--otp part-->
    <div id="otpBody">
        <div class=" d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class=" card text-white bg-secondary mb-3  " style="width:380px">
                <div class="text-light m-3">otp exipres in : <span id="time">02:00</span></div>
                <div class="text-light m-3">please check your email for otp</div>
                <div class="card-body">
                    <form method="POST">
                        <div class="input-group mb-3">
                            <input type="text" name="otp" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="one time password">
                        </div>
                        <input type="submit" class="btn btn-dark" value="submit" id="submitOtp" name="submitOtp">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="changePasswordBody">
        <div class=" d-flex justify-content-center align-items-center  " style="min-height: 100vh;">
            <div class=" card text-white bg-secondary mb-3  " style="width:380px">
                <div class="card-header text-center fs-3">change your password</div>
                <div class="card-body">
                    <form method="POST">
                        <div class="input-group mb-3">
                            <input type="text" name="newPassword" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="new password">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="confirmPassword" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="confirm password">
                        </div>
                        <input type="submit" class="btn btn-dark" value="submit" name="changePasswordSubmit">
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="<?php echo URLROOT . 'js/customScript.js' ?>"></script>


</html>