<?php
// Iesākam autentifikācijas procesā izveidoto sesiju
session_start();

require 'includes/db_inc.php';

// Ja lietotājs nav autentificējies, novirzām uz login lapu:
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}

// Lai saglabātu koda tīrību, izmantojam 'include' funkciju uz failu, kas satur <head> saturu un navigāciju:
include ("includes/header.php");
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="dropdown mb-4">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Lietotāji</h1>
              <a href="#" class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-wrench fa-sm text-white-50"></i> Darbības</a>
              <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Pievienot jaunu</a>
                <a class="dropdown-item" href="#">Labot</a>
                <a class="dropdown-item" href="#">Dzēst</a>
              </div>
            </div>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Vārds</th>
                      <th>Uzvārds</th>
                      <th>E-pasts</th>
                      <th>Reģistrācijas datums</th>
                      <th>Tiesību līmenis</th>
											<th>Labot</th>
											<th>Dzēst</th>
                    </tr>
                  </thead>
                  <tbody>
										<?php
											$stmt = $con->prepare('SELECT * FROM accounts INNER JOIN roles ON accounts.user_role = roles.id;');
											$stmt->bind_param('s', $name); // 's' specifies the variable type => 'string'
											$stmt->execute();
											$result = $stmt->get_result();
											while ($row = $result->fetch_assoc())
											{
												echo "<tr>";
												echo "<td>" . $row['id'] . "</td>";
												echo "<td>" . $row['first_name'] . "</td>";
												echo "<td>" . $row['last_name'] . "</td>";
												echo "<td>" . $row['email'] . "</td>";
												echo "<td>" . $row['account_reg_time'] . "</td>";
												echo "<td>" . $row['role_name'] . "</td>";
											}
										?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>&copy;2020 Jāņa Eglīša Preiļu Valsts ģimnāzija</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pabeidzāt darbu?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Nospiediet "Iziet", lai izietu no sava profila.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Atcelt</button>
          <a class="btn btn-primary" href="login.php">Iziet</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
