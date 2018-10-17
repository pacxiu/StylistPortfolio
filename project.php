<?php require_once './config.php'; 
  $projectId = $_GET['id'];
  $pageTitle = "Project";
  $pageDescription = "Project description";
?>

<?php require_once $root.$files.'/partials/header.php'; ?>

  <div class="full-height-container" id="project">
    <div class="project-container">
      <?php if ($projectId > 0) {
          // display all images from project folder
          $directory = "./img/projects/".$projectId."/";
          $filecount = count(glob($directory."*"));
          
          echo "<div class='project-slider'>
          <div class='project-slide project-description'>
            Description $projectId
          </div>";

          for ($i = 1; $i <= $filecount; $i++)
            echo "<div class='project-slide'><img class='project-image' src='$directory$i.jpg'></div>";
          
          require_once $root.$files.'/partials/project_other.php';

          echo "</div></div>";

        } else {
          echo "<p>Project doesn't exist</p>";
        }
      ?>
    </div>
  </div>

<?php require_once $root.$files.'/partials/footer.php'; ?>