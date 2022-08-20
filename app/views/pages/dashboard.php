<?php require_once APPROOT . "/views/includes/includes.php" ?>


<div class="container-fluid chart-section ">
    <div class="row">
        <!--   pie chart start-->
        <div class="col-lg-4 col-md-5 ">
            <div class="card bg-light mb-3 ml-0 shadow-lg pie-chart" style="background-color:#F4FCD9; height:30rem;border-radius: 15px; ">
                <div class="card-body text-primary">
                    <canvas id="pieChart"></canvas>

                    <br>
                </div>
            </div>
        </div>
        <!--   pie chart end-->

        <!--   line chart start-->
        <div class=" col-lg-8 col-md-7 ">
            <div class="card bg-light mb-3 ml-0 shadow-lg line-chart" style="max-width: 45rem; background-color:#F4FCD9; 
        height:30rem;border-radius: 15px; ">
                <div class="card-body text-primary">
                    <canvas id="lineChart" style="max-width: 60rem;max-height: 50rem"></canvas>
                </div>
            </div>
        </div>
        <!--   line chart end-->

    </div>

</div>
</div>

</div>
<script src="<?php echo URLROOT ?>/js/customScript.js"></script>
<script src="<?php echo URLROOT ?>/js/ajax.js"></script>

