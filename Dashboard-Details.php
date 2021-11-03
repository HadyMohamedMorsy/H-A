<?php
    include('Datebase/Config.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php
    $Page_Title = 'Dashboard-Details';
    include ('Website-Structure/Header-Elemnts.php') ;
?>
    <!-- Start The Links Files -->
    <?php include('./links-Dashbored.php') ?>
    <link rel="stylesheet" href="./CSS-Files/Dashbored.css">
    <!-- End The Links Files -->
<body>

    <!-- Start The Header -->
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <!-- Start The Header -->
            <?php include ("Website-Structure/Dashbored-header.php"); ?>
            <!-- End The Header-->

            <?php include ("./Website-Structure/Dashboard-Details-Body.php"); ?>

            <!-- Start The Footer -->
        </div>
    </div>
</div>
    <!-- Start The Links Files -->
    <?php include ("./Links javascript Dashbored.php"); ?>
    <script src="./Javascript-Files/Dashbored-main.js"></script>
    <!-- <script type="text/javascript" src="Javascript-Files/Main-index-Page.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
// <block:setup:1>
    const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    ];
const data = {
  labels: labels,
  datasets: [{
        label: 'My First dataset',
        backgroundColor: 'rgb(255, 118, 117)',
        borderColor: 'rgb(255, 117, 117)',
        data: [0, 10, 5, 2, 20, 30, 35],
    },{
        label: 'My Secound dataset',
        backgroundColor: 'rgb(255, 159, 26)',
        borderColor: 'rgb(255, 159, 26)',
        data: [0, 10, 5, 2, 13, 45, 50],
    },{
        label: 'My Secound dataset',
        backgroundColor: 'rgb(0, 184, 148)',
        borderColor: 'rgb(0, 184, 148)',
        data: [0, 12, 14, 7, 15, 11, 15],
    }]
};
// </block:setup>

// <block:config:0>
const config = {
  type: 'line',
  data: data,
  options: {}
};
// </block:config>
</script>
    <script>
  // === include 'setup' then 'config' above ===

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>


<script>
var xValues = ["Italy", "France", "Spain"];
var yValues = [55, 49, 44];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797"
];

new Chart("myCharttwo", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "World Wide Wine Production 2018"
    }
  }
});
</script>

<script>
var xValues = ["Italy", "France", "Spain"];
var yValues = [55, 49, 44];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797"
];

new Chart("myChartthree", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "World Wide Wine Production 2018"
    }
  }
});
</script>
<script>
var ctx = document.getElementById('myChartfor').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: 'First Value',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        },
        {
            label: 'Secound Value',
            data: [16, 11, 8, 2, 4, 7],
            backgroundColor: [
                'rgba(255, 88, 132, 0.2)',
                'rgba(54, 100, 235, 0.2)',
                'rgba(255, 300, 86, 1)',
                'rgba(75, 92, 192, 0.2)',
                'rgba(153, 80, 255, 0.2)',
                'rgba(255, 120, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 88, 132, 1)',
                'rgba(54, 100, 235, 1)',
                'rgba(255, 300, 86, 1)',
                'rgba(75, 92, 192, 1)',
                'rgba(153, 80, 255, 1)',
                'rgba(255, 120, 64, 1)'
            ],
            borderWidth: 1
        }, {
            label: 'thired Value',
            data: [14, 13, 11, 12, 14, 11],
            backgroundColor: [
                'rgba(255, 88, 111, 0.2)',
                'rgba(54, 100, 222, 0.2)',
                'rgba(255, 300, 111, 1)',
                'rgba(75, 92, 55, 0.2)',
                'rgba(153, 80, 15, 0.2)',
                'rgba(255, 120, 85, 0.2)'
            ],
            borderColor: [
                'rgba(255, 88, 111, 1)',
                'rgba(54, 100, 222, 1)',
                'rgba(255, 300, 111, 1)',
                'rgba(75, 92, 55, 1)',
                'rgba(153, 80, 15, 1)',
                'rgba(255, 120, 85, 1)'
            ],
            borderWidth: 1
        }
        
        ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
</body>

</html>