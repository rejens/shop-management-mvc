<?php require_once APPROOT . "/views/includes/header.php"; ?>

<body style="background-image: url('<?php echo IMG ?>darkGradient.jpg') ; background-repeat: no-repeat;  background-size: 100%">

    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">sign up</p>

                                    <form class="mx-1 mx-md-4" method="post">

                                        <div class="d-flex flex-row align-items-center   ">
                                            <div class="form-outline flex-fill mb-0">
                                                <div class="mb-2">
                                                    <label class="form-label" for="name">Your Name</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-user py-1 "></i></div>
                                                        </div>
                                                        <input type="text" name="name" class="form-control" id="name" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center   ">
                                            <div class="form-outline flex-fill mb-0">
                                                <div class="mb-3">
                                                    <label class="form-label" for="company">company name</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"> <i class="fa-solid fa-building fa-lg py-1 "></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="company" id="company" class="form-control" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center   ">
                                            <div class="form-outline flex-fill mb-0">
                                                <div class="mb-3">
                                                    <label class="form-label" for="company">email</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"> <i class="fa-solid fa-envelope fa-lg py-1"></i>
                                                            </div>
                                                        </div>
                                                        <input type="email" name="email" id="email" class="form-control" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center   ">
                                            <div class="form-outline flex-fill mb-0">
                                                <div class="mb-3">
                                                    <label class="form-label" for="password">Password</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"> <i class="fas fa-lock fa-lg py-1 "></i>
                                                            </div>
                                                        </div>
                                                        <input type="password" name=password name id="password" class="form-control" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" name="signup" class="btn btn-dark btn-lg">Signup</button>
                                        </div>

                                    </form>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 ">

                                    <img src="<?php echo URLROOT ?>img/register.webp" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>