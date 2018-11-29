<?php require_once './config.php'; 
	$pageTitle = "Sylwia Morawska Stylist | Portfolio";
	$pageDescription = "Sylwia Morawska Stylist Portfolio. Consists of her stylisations in the magazines: L'Officiel, Glamour, C-heads, Design Scene, Hiro, Vanity Teen, Fashion Magazine, Lucy's, Obvious, and Flanelle and videos.";
?>

<?php require_once $root.$files.'/partials/header.php'; ?>

  <div class="full-height-container" id="portfolio">
    <div class="portfolio-container">
      <?php
        $queryProjects = [20, 11, 13, 12, 4, 23, 18, 1, 14, 2, 21, 16, 22, 17, 15, 25, 19, 3, 5, 24];

        $directory = "./img/projects/";
        // $filecount = count(glob($directory."*"));

        for ($i = 0; $i < count($queryProjects); $i++) {
          echo 
          "<a href='$files/project.php?id=".$queryProjects[$i]."' class='portfolio-item'>
            <div class='portfolio-hint'>click to view project</div>
            <img src='$assets/img/projects/".$queryProjects[$i]."/1.jpg' >
          </a>";
        }

      ?>
    </div>
    
    <p class="assistant menu-link">Videos</p>
    <div class="portfolio-container">
      <?php
        $videoLinks = ['94sXFayuUXg', 'pl-ecD2Ka-E', 'qA-IoBRpvlA'];
        for ($i = 0; $i < count($videoLinks); $i++)

        echo 
        "<div class='portfolio-item video'>
          <iframe allowfullscreen
            src='https://www.youtube.com/embed/".$videoLinks[$i]."'>
          </iframe>
        </div>";
      ?>
    </div>

    <p class="assistant menu-link">Assistant</p>
    <div class="portfolio-container">
      <?php
        $assistProjects = [6, 7, 8, 9, 10];
        for ($i = 0; $i < count($assistProjects); $i++)
        
        echo 
        "<a href='$files/project.php?id=".$assistProjects[$i]."' class='portfolio-item'>
          <div class='portfolio-hint'>click to view project</div>
          <img src='$assets/img/projects/".$assistProjects[$i]."/1.jpg' >
        </a>";
      ?>
    </div>
  </div>

<?php require_once $root.$files.'/partials/footer.php'; ?>