<?php require_once './config.php'; 
	$pageTitle = "Portfolio";
	$pageDescription = "Portfolio description";
?>

<?php require_once $root.$files.'/partials/header.php'; ?>

  <div class="full-height-container" id="portfolio">
    <div class="portfolio-container">
      <?php
        $query = [20, 11, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14, 15, 16, 17, 18, 19, 21, 22, 23, 24, 25, 26];
        $query = [20, 11, 13, 12, 4, 23, 18, 1, 14, 2, 21, 16, 22, 17, 15, 25, 19, 3, 5, 24, 6, 7, 8, 9, 10];

        // display thumbnails for all projects
        $assistProjects = [6, 7, 8, 9, 10];

        $directory = "./img/projects/";
        $filecount = count(glob($directory."*"));

        for ($i = 1; $i <= $filecount; $i++) {
          $assistFlag = false;
          for ($j = 0; $j < count($assistProjects); $j++)
            if ($assistProjects[$j] === $query[$i - 1]) {
              $assistFlag = true;
            }
        
          if (!$assistFlag) {
            echo 
            "<a href='$files/project.php?id=".$query[$i - 1]."' class='portfolio-item'>
              <div class='portfolio-hint'>click to view project</div>
              <img src='$assets/img/projects/".$query[$i - 1]."/1.jpg' >
            </a>";
          }
        }

      ?>
    </div>
    
    <p class="assistant menu-link">Videos</p>
    <div class="portfolio-container">
      <div class="portfolio-item video">
        <iframe allowfullscreen="allowfullscreen"
          src="https://www.youtube.com/embed/94sXFayuUXg">
        </iframe>
      </div>
      
      <div class="portfolio-item video">
        <iframe allowfullscreen="allowfullscreen"
          src="https://www.youtube.com/embed/pl-ecD2Ka-E">
        </iframe>
      </div>

      <div class="portfolio-item video">
        <iframe allowfullscreen="allowfullscreen"
          src="https://www.youtube.com/embed/qA-IoBRpvlA">
        </iframe>
      </div>
    </div>

    <p class="assistant menu-link">Assistant</p>
    <div class="portfolio-container">
      <?php
        // display thumbnails for all projects
        for ($i = 0; $i < count($assistProjects); $i++)
        
        echo 
        "<a href='$files/project.php?id=".$assistProjects[$i]."' class='portfolio-item'>
          <div class='portfolio-hint'>click to view project</div>
          <img src='$assets/img/projects/".$assistProjects[$i]."/1.jpg' >
        </a>"
      ?>
    </div>
  </div>

<?php require_once $root.$files.'/partials/footer.php'; ?>