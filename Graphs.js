<?php 
 require 'Logic/connect.php';
?>


document.addEventListener('DOMContentLoaded', () => {

Highcharts.chart('container', {
   chart: {
     type: 'column'
   },
   title: {
     text: 'Monitoring Graphs'
   },
   
   yAxis: {
     title: {
     	text: 'Ventas'
      }
   },
   
   xAxis: {
   	  categories: [
      <?php 
        $sql = "SELECT * FROM producto";
        $result = mysqli_query($connection, $sql);
        while ($registros = mysqli_fetch_array($result))
        {
          ?>
             '<?php echo $registros["nombreProducto"] ?>',
          <?php
        }   
       ?>
      ]
   },
   series: [
      {
      name: 'Ventas',
      data: [
      
        <?php 
        $sql = "SELECT * FROM producto";
        $result = mysqli_query($connection, $sql);
        while ($registros = mysqli_fetch_array($result))
        {
          ?>
             <?php echo $registros["cantidad"] ?>,
          <?php
        }   
       ?>

      ]

      }]
   });

});