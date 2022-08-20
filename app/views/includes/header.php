<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME ?></title>

    <!--bootstrap links start-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/bootstrap.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->

    <script src="<?php echo URLROOT ?>js/bootstrap.bundle.min.js"></script>
    <!--bootstrap links end-->

    <!--font awesome links start-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/fontawesome/css/all.css">
    <script src="<?php echo URLROOT ?>js/all.js"> </script>
    <!--font awesome links end-->

    <!--jquery links start-->
    <script src="<?php echo URLROOT ?>js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo URLROOT ?>js/jquery-ui.min.js"></script>

    <!--jquery links end-->

    <!--chartjs links start-->
    <script src="<?php echo URLROOT ?>js/node_modules/chart/dist/chart.js"></script>
    <!--chartjs links end-->

    <!-- custom css-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/style.css">
    <!-- custom css-->

    <!-- sweet alert-->
    <!-- <script src="<?php // echo URLROOT ?>js/sweetalert.min.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- sweet alert-->

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>