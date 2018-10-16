<?php require_once './config.php'; 
	$pageTitle = "Portfolio";
	$pageDescription = "Portfolio description";
?>

<?php require_once $root.$files.'/partials/header.php'; ?>

  <div class="full-height-container" id="portfolio">
    <div class="portfolio-container">
      <?php
        for($i = 1; $i <=20; $i++)
        
        echo 
        "<div class='portfolio-item'>
          <div class='portfolio-hint'>click to see project details</div>
          <img src='$assets/img/thumbnails/project_1.jpg' >
        </div>"
      ?>
    </div>
  </div>

<?php require_once $root.$files.'/partials/footer.php'; ?>