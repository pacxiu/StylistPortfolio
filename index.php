<?php require_once './config.php'; 
	$pageTitle = "Portfolio";
	$pageDescription = "Portfolio description";
?>

<?php require_once $root.$files.'/partials/header.php'; ?>

  <div class="full-height-container" id="portfolio">
    <div class="portfolio-container">
      <?php
        // display thumbnails for all projects
        $assistProjects = [6, 7, 8, 9, 10];

        $directory = "./img/projects/";
        $filecount = count(glob($directory."*"));

        for ($i = 1; $i <= $filecount; $i++) {
          $assistFlag = false;
          for ($j = 0; $j < count($assistProjects); $j++)
            if ($assistProjects[$j] === $i) {
              $assistFlag = true;
            }
        
          if (!$assistFlag) {
            echo 
            "<a href='$files/project.php?id=$i' class='portfolio-item'>
              <div class='portfolio-hint'>click to view project</div>
              <img src='$assets/img/projects/".$i."/1.jpg' >
            </a>";
          }
        }

      ?>
    </div>
    <p class="assistant menu-link">Assistant</p>
    <div class="portfolio-container">
      <?php
        // display thumbnails for all projects
        for ($i = 0; $i < count($assistProjects); $i++)
        
        echo 
        "<a href='$files/project.php?id='".$assistProjects[$i]."' class='portfolio-item'>
          <div class='portfolio-hint'>click to view project</div>
          <img src='$assets/img/projects/".$assistProjects[$i]."/1.jpg' >
        </a>"
      ?>
    </div>
  </div>

<?php require_once $root.$files.'/partials/footer.php'; ?>