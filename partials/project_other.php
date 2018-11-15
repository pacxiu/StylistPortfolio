<div class="project-slide other-stories-container">
  <div class="other-stories">
    <div class="stories-thumbnails-container">
      <p class="stories-title">See other stories</p>
      <div class="stories-thumbnails">
        <?php
          
          // get count of all projects
          $directory = "./img/projects/";
          $filecount = count(glob($directory."*"));
          $projectsIndexes = [];

          for ($i = 1; $i <= $filecount; $i++) {
            if ($i !== intval($projectId))
              array_push($projectsIndexes, $i);
          }

          // get 9 random keys not items! from array
          $randomProjects = array_rand($projectsIndexes, 9);

          for ($i = 0; $i < count($randomProjects); $i++)
            echo 
            "<a href='$files/project.php?id=".$projectsIndexes[$randomProjects[$i]]."' class='portfolio-item'>
              <div class='portfolio-hint'>click to view project</div>
              <img src='$assets/img/projects/".$projectsIndexes[$randomProjects[$i]]."/1.jpg' >
            </a>"
        ?>
      </div>
      <a class="back-projects" href="./index.php">
        <div class="back-arrow">
          <img src='<?php echo $assets; ?>/img/back-icon.png' alt="">
        </div>
        <p>all projects</p>
      </a>
    </div>
  </div>
</div>