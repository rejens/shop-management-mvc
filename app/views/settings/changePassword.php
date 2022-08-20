<?php require_once APPROOT . "/views/includes/header.php" ?>

<body style="background-image: url('<?php echo IMG ?>darkGradient.jpg') ;">
    <div class=" d-flex justify-content-center align-items-center  " style="min-height: 100vh;">
        <div class=" card text-white bg-secondary mb-3  " style="width:380px">
            <div class="card-header text-center fs-3">change your password</div>
            <div class="card-body">

                <form method="POST">
                    <div class="input-group mb-3">
                        <input type="text" name="oldPassword" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="old password">
                    </div>
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

</body>

</html>