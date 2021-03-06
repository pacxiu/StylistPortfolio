<?php require_once './config.php'; 
  $projectId = $_GET['id'];
  $pageTitle = "Sylwia Morawska Stylist | Project";
  $pageDescription = "Detailed description of one from many Sylwia Morawska Stylist's projects.";
?>

<?php require_once $root.$files.'/partials/header.php'; ?>

  <div class="full-height-container" id="project">
    <div class="project-container">
      <?php if ($projectId > 0 && $projectId < 28) {
          // display all images from project folder
          $directory = "./img/projects/".$projectId."/";
          $filecount = count(glob($directory."*"));
          
          echo "<div class='project-slider'>";

          for ($i = 1; $i <= $filecount - 1; $i++) {
            $imgSrc = $directory.$i.'.jpg';
            list($width, $height) = getimagesize($imgSrc);

            // check if image is horizontal or vertical            
            if ($height < $width) {
              echo "<div class='project-slide'><img class='project-image horizontal' src='$imgSrc'></div>";
            } else {
              echo "<div class='project-slide'><img class='project-image' src='$imgSrc'></div>";
            }
          }

          require_once $root.$files.'/partials/project_description.php';
          
          require_once $root.$files.'/partials/project_other.php';

          echo "</div>";

        } else {
          echo "<p class='no-project'>Project doesn't exist</p>";
        }
      ?>
    </div>
  </div>

<?php require_once $root.$files.'/partials/footer.php'; ?>