<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flavora | From Indonesian Soil to Global Soul</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>

<body>
  <?php include 'component/header.php'; ?>
  <div class="main-page-container" style="overflow-x: hidden;">
    <?php include 'page/aboutus.php'; ?>
    <!-- <img src="assets/logo.webp" alt="Logo" style="max-width: 100%; height: auto;">
    <p style="margin-top:20px; font-family: Arial, sans-serif; font-size: 24px; color: #333;">COMING SOON</p> -->

  </div>
  <?php include 'component/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <script>
    window.addEventListener('scroll', function() {
      const header = document.getElementById('main-header');
      const scrollThreshold = 400; 
      if (window.scrollY > scrollThreshold) header.classList.remove('header-hidden');
      else header.classList.add('header-hidden');
    });
  </script>
</body>

</html>