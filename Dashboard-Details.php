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
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [0, 10, 5, 2, 20, 30, 45],
    },{
        label: 'My Secound dataset',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [0, 10, 5, 2, 13, 15, 45],
    },{
        label: 'My Secound dataset',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [0, 12, 14, 7, 15, 11, 45],
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