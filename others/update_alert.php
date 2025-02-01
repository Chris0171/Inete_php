<?php
include('../includes/head.php');
?>
<title>INETE | Actualización</title>

<!--::::::::::::::: Meta tags here :::::::::::::::-->
<meta name="description" content="En esta página se proporcionará información sobre las proximas actualizaciónes">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<link rel="canonical" href="https://inete.com/other/update_alert.php">

<!-- Open Graph para Facebook y otros -->
<meta property="og:title" content="INETE | Actualización">
<meta property="og:description"
  content="En esta página se proporcionará información sobre las proximas actualizaciónes">
<!-- <meta property="og:image" content="https://www.tusitio.com/images/homepage.jpg"> -->
<meta property="og:url" content="https://inete.com/other/update_alert.php">
<meta property="og:type" content="website">

<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="INETE | Actualización">
<meta name="twitter:description"
  content="En esta página se proporcionará información sobre las proximas actualizaciónes">
<!-- <meta name="twitter:image" content="https://www.tusitio.com/images/homepage.jpg"> -->

<?php
include('../includes/head-end.php');
?>

<?php
$isAlert = false;
include('../includes/header.php');
?>

<!--::::::::::::::: Body page here :::::::::::::::-->
<div class="container-fluid p-0 m-0 mt-3">
  <?php
  include('../includes/pages-body/others/update_alert.inc.php');
  ?>
</div>


<?php
include('../includes/foot.php');
?>