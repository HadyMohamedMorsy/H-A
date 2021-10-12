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
    <?php include('./Links CSS In Head Area.php') ?>
    <!-- End The Links Files -->
<body>

    <!-- Start The Header -->
<div class="container-hady">

    <?php include("./Website-Structure/Dashbored-header.php"); ?>
    <!-- End The Header-->

    <?php include ("./Website-Structure/Dashboard-Details-Body.php"); ?>

    <!-- Start The Footer -->
    <?php include ("Website-Structure/Footer.php"); ?>

    <!-- End The Footer-->
    
</div>
    <!-- Start The Links Files -->
    <?php include ("./Links Javascript In Footer Area.php"); ?>
    <!-- <script type="text/javascript" src="Javascript-Files/Main-index-Page.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        data: [0, 10, 5, 2, 13, 15, 25],
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

module.exports = {
  actions: [],
  config: config,
};

    </script>
    <script>
  // === include 'setup' then 'config' above ===

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
</body>

</html>