<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top p-3">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="d-flex gap-2">
                <!-- offcanvas trigger-->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
                </button>
                <!-- offcanvas trigger-->

                <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold nav-navbar-brand" href="#">TPS for shop</a>
            </div>
            <div class="d-flex ">
                <!-- notification -->
                <div class="mx-1 nav-align">
                    <div class="dropdown ms-1 ">
                        <button class="btn btn-secondary dropdown-toggle  nav-btn" id="bd-versions" data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static">
                            <i class="fa-solid fa-bell"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="notificationBadge">

                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end notificationCenter" aria-labelledby="bd-versions" data-bs-popper="static">
                            <!-- <li class="dropdown-item list-group-item-action list-group-item-light" href="#">this is notification</li> -->
                        </ul>
                    </div>
                </div>

                <!-- more -->
                <div class="mx-1 nav-align">
                    <div class="dropdown ms-1 ">
                        <button class="btn btn-secondary dropdown-toggle  nav-btn" id="bd-versions" data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static">
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-versions" data-bs-popper="static">
                            <li class="list-group-item-action list-group-item-light">
                                <button class="btn btn-toggle align-items-center rounded settings-dropdown" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
                                    <i class="fa-solid fa-gear me-2"></i>settings
                                </button>
                                <div class="collapse " id="dashboard-collapse">
                                    <ul class="list-group">
                                        <a href="<?php echo URLROOT ?>settings/updateProfile" class="link-dark rounded list-group-item list-group-item-action">update profile</a>
                                        <a href="<?php echo URLROOT ?>settings/changePassword" class="link-dark rounded list-group-item list-group-item-action">change password</a>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item list-group-item-action list-group-item-light">
                                <form method="post" action="">
                                    <button type="submit" name="logout" class="btn  btn-danger m-2">Logout</button>
                                </form>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            </ul>
            <!-- </div> -->
        </div>
    </nav>
</div>