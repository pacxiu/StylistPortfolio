<?php require_once './config.php'; 
	$pageTitle = "Portfolio";
	$pageDescription = "Portfolio description";
?>

<?php require_once $root.$files.'/partials/header.php'; ?>

  <div class="full-height-container" id="portfolio">
    <div class="portfolio-container">
      <?php
        // display thumbnails for all projects
        $directory = "./img/thumbnails/";
        $filecount = count(glob($directory."*"));
        for ($i = 1; $i <= 23; $i++)
        
        echo 
        "<a href='$files/project.php?id=$i' class='portfolio-item'>
          <div class='portfolio-hint'>click to see view details</div>
          <img src='$assets/img/thumbnails/project_1.jpg' >
        </a>"
      ?>
    </div>
  </div>

<?php require_once $root.$files.'/partials/footer.php'; ?>