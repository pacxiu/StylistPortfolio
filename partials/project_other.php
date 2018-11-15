<div class="project-slide other-stories-container">
  <div class="other-stories">
    <div class="stories-thumbnails-container">
      <p class="stories-title">See other stories</p>
      <div class="stories-thumbnails">
        <?php
          for ($i = 1; $i <= 9; $i++)

          echo 
          "<a href='$files/project.php?id=$i' class='portfolio-item'>
            <div class='portfolio-hint'>click to view project</div>
            <img src='$assets/img/thumbnails/project_1.jpg' >
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