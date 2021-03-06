<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>PVĢ robotika</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <div id="wrapper">

    <!-- Sānjosla -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sānjosla - nosaukums -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">PVĢ robotika</div>
      </a>

      <!-- Atdalītājs -->
      <hr class="sidebar-divider my-0">

      <!-- Navigācija - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Kopsavilkums</span></a>
      </li>

      <!-- Atdalītājs -->
      <hr class="sidebar-divider">


      <!-- Navigācija - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Detaļas</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="parts.html">Visas detaļas</a>
            <a class="collapse-item" href="categories.html">Kategorijas</a>
            <a class="collapse-item" href="manufacturers.html">Ražotāji</a>
            <a class="collapse-item" href="brands.html">Zīmoli</a>
            <a class="collapse-item" href="suppliers.html">Izplatītāji</a>
          </div>
        </div>
      </li>

      <!-- Navigācija - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Pasūtījumi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="unfinished.html">Nepabeigtie</a>
            <a class="collapse-item" href="finished.html">Pabeigtie</a>
            <a class="collapse-item" href="orders.html">Visi pasūtījumi</a>
          </div>
        </div>
      </li>

      <!-- Atdalītājs -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="users.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Lietotāji</span></a>
      </li>
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Atskaites
      </div>

      <!-- Navigācija - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="report.html">
          <i class="fas fa-fw fa-plus"></i>
          <span>Izveidot atskaiti</span></a>
      </li>

      <!-- Saglabātās atskaites -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Saglabātās atskaites</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="#">Pēdējās 7 dienas</a>
            <a class="collapse-item" href="#">Pēdējais mēnesis</a>
            <a class="collapse-item" href="#">Pēdējie 3 mēneši</a>
            <a class="collapse-item" href="#">Pēdējais gads</a>
          </div>
        </div>
      </li>

      <!-- Atdalītājs -->
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
        <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Navigācija - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white-600 small "><?=$_SESSION['first_name'] . ' ' . $_SESSION['last_name']?></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.html">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profils
                </a>
                <a class="dropdown-item" href="settings.html">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Iestatījumi
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Iziet
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
