<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('layouts/head') ?>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
  <?= $this->include('layouts/header') ?>
  </header><!-- End Header -->

  <?= $this->renderSection('content') ?>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <?= $this->include('layouts/footer') ?>
  </footer><!-- End Footer -->

  <?= $this->include('layouts/scripts') ?>
</body>

</html>