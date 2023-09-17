<?php $page = 'home'; ?>
<!doctype html>
<style>
  img[alt="www.000webhost.com"] {
    display: none;
  }
</style>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Assessment | Home</title>
  <link rel="icon" type="image/png" href="../img/icon/logo1.png" />
  <!-- CSS -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />

  <link href="../public/css/tabler.min.css?1684106062" rel="stylesheet" />

</head>

<body>

  <div class="page">
    <?php
    session_start();
    if (!isset($_SESSION['userweb'])) {
      header("Location: ..\index.php");
    }

    include 'unit.php'; ?>

    <!-- Navbar -->
    <?php
    include '../partials/header.php';
    include '../partials/navbar.php';
    ?>

    <div class="page-wrapper">

      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl">
          <div class="row">
            <div class="col text-center">
              <h1 style="font-size: 36px; color: #0074E4; padding-top: 150px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Welcome, IT Software Developer</h1>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- body page -->

    <?php include '../partials/footer.php' ?>

    <?php
    include '../home/component/modalTambahCustomer.php';
    include '../home/component/modalTambahStaff.php';
    ?>

    <!-- Libs JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
      $('#tambahCustomer').on('shown.bs.modal', function() {
        $('#nama_customer').focus();
      });
    </script>
    <script src="../public/js/dashboard-home.js"></script>
    <script src="../public/js/tabler.min.js?1684106062" defer></script>
</body>

</html>