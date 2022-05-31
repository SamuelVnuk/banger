<?php
include('../sdg/header.php');
require_once('../sdg/connection.php');
?>
<main class="container">
  <h1 class="m-4 text-uppercase" style="text-align: center">Clanocky jak z refresheru</h1>

  <?php

  $page = isset($_GET["page"]) ? $_GET["page"]: "";
  if($page < 1){
    $page = 1;
  }

  for($i = 0; $i <$page; $i++){
      $x=0+ 16 * $i;
      $y=15+ 16 * $i;
  }
  
  $last = $conn->query("SELECT MAX(Id) AS newest FROM articles");
  while ($newest = $last->fetch_assoc()) {
    $s = $newest["newest"] - $x;
    $i = $newest["newest"] - $y;
    $query1 = $conn->query("SELECT * FROM articles WHERE Id BETWEEN '$i' AND '$s' ORDER BY Create_time DESC");
  }
  ?>

  <div class="container">
    <div class="row align-items-center">
      <?php
      while ($row1 = $query1->fetch_assoc()) {
      ?>
      
        <div class="col-md-4 col-sm-5 col-xs-7" style="text-align: center">

          <img src="../images/<?php echo $row1["Cover_image"] ?>" alt="<?php echo $row1["Title"] ?>" style="width: 200px">

          <p><span style="font-size: 20px; font-weight: bold;">Nazov:</span> <?php echo $row1["Title"] ?>
          <p><span style="font-size: 20px; font-weight: bold;">Autor:</span> <?php echo $row1["Autor"] ?>
          <p><?php echo $row1["Text"] ?>
        </div>
      
      <?php
      }
      ?>
    </div>
  </div>

  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="../sdg/index.php<?php echo "?page=" . $page - 1; ?>" aria-label="Previous Page">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Predchadzajuca</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="../sdg/index.php<?php echo "?page=" . $page + 1; ?>" aria-label="Next Page">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Dalsia</span>
        </a>
      </li>
    </ul>
  </nav>    

</main>