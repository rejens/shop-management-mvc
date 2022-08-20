<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>public/css/style.css">
</head>

<body style="background-image: url('<?php echo IMG ?>darkGradient.jpg') ; ">

    <div class="row mt-5">

        <div class="col-md-4 d-flex justify-content-end">
            <div class="card" style="width: 18rem; height:80vh">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img src="<?php echo IMG ?>userPng.png" alt="" style="height: 5rem;">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 ">
            <div class="card" style="width: 50rem; height:80vh">
                <div class="card-body">
                    <h5 class="card-title text-center">update profile</h5>
                    <div class="row mt-5">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="company name">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="company establishment date">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="company's address ">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>