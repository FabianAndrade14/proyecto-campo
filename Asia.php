<?php 
 require 'Logic/connect.php';


 $sqlDivisas = "SELECT * FROM divisas where area = 'Asia'"; 
$result5 = mysqli_query($connection, $sqlDivisas);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Areas</title>
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<script src="https://code.highcharts.com/highcharts.js"></script>
  <style type="text/css">
    .opciones{
  background-color: #27ae607d;
  width: 250px;
  height: 600px;
  float: left;
}
  </style>
<script>
	
document.addEventListener('DOMContentLoaded', () => {

Highcharts.chart('container', {
   chart: {
     width: 700,
     height: 450,
     type: 'line'

   },
   title: {
     text: 'Asia'
   },
   
   yAxis: {
     type: 'logarithmic',
     minorTickInterval: 0.1,
     title: {
     	text: 'Divisas'
      }
   },
   
   xAxis: {
   	  categories: [
      <?php 
        $sql = "SELECT * FROM divisas where area = 'Asia'";
        $result = mysqli_query($connection, $sql);
        while ($registros = mysqli_fetch_array($result))
        {
          ?>
             '<?php echo $registros["pais"] ?>',
          <?php
        }   
       ?>
      ]
   },
   series: [
      {
      name: 'Pais',
      data: [
      
        <?php 
        $sql = "SELECT * FROM divisas where area = 'Asia'";
        $result = mysqli_query($connection, $sql);
        while ($registros = mysqli_fetch_array($result))
        {
          ?>
             <?php echo $registros["valor"] ?>,
          <?php
        }   
       ?>

      ]

      }]
   });

});

</script>
</head>
<body>

   <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Inicio</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>DIVISAS - FINANZAS</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        DIVISAS
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Area</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <!--a class="collapse-item" href="nuevo.php">Nuevo Egresado Posgrado</a-->
           <a class="collapse-item" href="Graficos.php">Europa</a>

            <a class="collapse-item" href="Africa.php">Africa</a>
            <a class="collapse-item" href="America.php">America del Sur</a>

            <a class="collapse-item" href="Asia.php">Asia</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Funciones</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="utilities-color.html">Financieras</a>
            <a class="collapse-item" href="utilities-border.html">Contables</a>
            <a class="collapse-item" href="utilities-animation.html">Indicadores</a>
            <a class="collapse-item" href="utilities-other.html">Otro</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Administracion
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Control de documentos</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="login.html">Cargue</a>
            <a class="collapse-item" href="register.html">Servicio</a>
            <a class="collapse-item" href="forgot-password.html">Otros</a>
           
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Fletes</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Administracion de Usuarios</span></a>
      </li>
       <!-- Nav Item - Exit -->
      <li class="nav-item">
        <a class="nav-link" href='Logic/exit.php'>
          <i class="fas fa-fw fa-window-close"></i>
          <span>Salir</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
          
            <!-- Nav Item - Messages -->
            

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">MONEDAS</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Imprimir</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            

<div id="container"></div>

 <table class="table">
                     <thead class="thead-dark">
                      <tr >
                       <th style="border: 1px solid white;">Pais</th> 
                      
                       <th style="border: 1px solid white;">Moneda</th> 
                       <th style="border: 1px solid white;">Codigo ISO</th>
                       <th style="border: 1px solid white;">Valor</th> 

                      </thead>
                    <tbody>
                      <?php while($row6 = $result5->fetch_array(MYSQLI_ASSOC)) { ?>
              <tr>
                
                <td class="bg-primary" style="color: white;"><?php echo $row6['pais']; ?></td>
                
                 <td class="bg-success" style="color: white;"><?php echo $row6['moneda']; ?></td>
                <td class="bg-warning" style="color: white;"><?php echo $row6['codigoiso']; ?></td>
                <td class="bg-danger" style="color: white;"><?php echo $row6['valor']; ?></td>
              </tr>
            
            <?php } ?>
                    </tbody>


                    </table> 



  
       
</table>


<script type="text/javascript" src="Graphs.js"></script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>