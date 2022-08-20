<?php
class Chart
{
    protected $totalInvestment;

    //pie chart
    public function pieChart($result)
    {
?>
        <script>
            var quantity = [];
            var background = [];
            var hover = [];
            var label = [];
        </script>

        <?php
        $this->totalInvestment = 0;
        foreach ($result as $row) {
        ?>
            <script>
                <?php $investment = $row['quantity'] * $row['cp']; ?>
                quantity.push(<?php echo $investment ?>);
                label.push("<?php echo $row['name'] ?>")
                <?php $this->totalInvestment += $investment; ?>

                function getRandomColor() {
                    var letters = '0123456789ABCDEF';
                    var color = '#';
                    for (var i = 0; i < 6; i++) {
                        color += letters[Math.floor(Math.random() * 16)];
                    }
                    return color;
                }

                background.push(getRandomColor())
                hover.push(getRandomColor())
            </script>
        <?php
        }

        ?>
        <script>
            var quantity = quantity
            var bg = background
            var bgc = hover
            var label = label


            var pieChart = document.getElementById("pieChart").getContext('2d');
            var myPieChart = new Chart(pieChart, {
                type: 'pie',
                data: {
                    labels: label,
                    datasets: [{
                        data: quantity,
                        backgroundColor: bg,
                        hoverBackgroundColor: bgc
                    }]
                },
                options: {
                    responsive: true
                }
            });
        </script>
    <?php
    }


    //line chart
    public function lineChart($result)
    {

    ?>
        <script>
            var datee = [];
            var pl = [];
            <?php
            foreach ($result as $row) {
            ?>
                datee.push('<?php echo $row['datee']; ?>')
                pl.push(<?php echo $row['group'] ?>)
            <?php
            }
            ?>
        </script>

        <script>
            let dateLabels = datee;
            let data = pl;
            var lineChart = document.getElementById("lineChart").getContext('2d');
            let gradient = lineChart.createLinearGradient(0, 0, 0, 400)
            gradient.addColorStop(0, "rgb(58,123,231,1");
            gradient.addColorStop(1, "rgb(0,210,255,0.3");

            var myLineChart = new Chart(lineChart, {
                type: 'line',
                data: {
                    labels: dateLabels,
                    datasets: [{
                        data: data,
                        hoverBackgroundColor: '#5B7DB1',
                        label: 'sales',
                        fill: true,
                        backgroundColor: gradient,
                        borderColor: "#5B7DB1",
                        radius: 3,
                        hoverRadius: 5,

                    }]

                },
                options: {
                    responsive: true,
                    animations: {
                        tension: {
                            duration: 500,
                            easing: 'swing',
                            from: 1,
                            to: 0,

                        }
                    },
                }
            });
        </script>

<?php

    }
}
?>