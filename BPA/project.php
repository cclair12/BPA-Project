<?php
require_once './_includes/connection.php';
// create database connectio
$project = $_GET['id'];
$conn = dbConnect('read');
$sql = 'SELECT * FROM materials WHERE project_id = ' .$project;
$getSteps = 'SELECT steps.id,steps.project_id,steps.image_id,steps.step,steps.step_order,images.filename FROM steps,images WHERE steps.image_id = images.id AND project_id = ' .$project;
$result = $conn->query($sql);
$result2 = $conn->query($getSteps);
if (!$result && !$result2) {
    $error = $conn->error;
} else {
  $numRows = $result->num_rows;
  $numRows2 = $result2->num_rows;
}
?>
<?php include './_includes/title.php';
include './_includes/header.php';
?>
<div class="container">
    <div class="row">
      <div class="twelve columns">
        <h1 class="page-header"><?php if ($project == 1) {
					echo "Bow Target Stand";
				} elseif ($project == 2) {
					echo "Firewood Sling";
				} elseif ($project == 3) {
					echo "Fishing Line Spooler";
				} elseif ($project == 4) {
					echo "Hand Washing Station";
				} elseif ($project == 5) {
					echo "Homemade Cover Scent";
				} elseif ($project == 6) {
					echo "Minnow Trap";
				} else {
					echo " ";
				} ?></h1>
      </div>
</div><!--row-->
<div class="row">
<div class="eight columns materials">
      <h2>Materials Needed</h2>
      <?php while ($row = $result->fetch_assoc()) { ?>
      <label><input type="checkbox" class="mats"><span><?= $row['item']; ?></span></label>
<?php } ?>
</div>
</div><!--row-->
<div class="row">
    <div class="eight columns">
      <h2>What you'll Do:</h2>
      <?php while ($row = $result2->fetch_assoc()) { ?>
      <p><span class="steps">Step <?= $row['step_order']; ?></span><br><?= $row['step']; ?></p>
      <img class="img-thumbnail responsive-steps" src="_images/<?= $row['filename']; ?>" alt="Example of current step">
      <?php } ?>
      <p class="back-to"><a href="<?php if ($project == 1) {
        echo "category.php?cat_id=1";
      } elseif ($project == 2) {
        echo "category.php?cat_id=3";
      } elseif ($project == 3) {
        echo "category.php?cat_id=2";
      } elseif ($project == 4) {
        echo "category.php?cat_id=3";
      } elseif ($project == 5) {
        echo "category.php?cat_id=1";
      } elseif ($project == 6) {
        echo "category.php?cat_id=2";
      } else {
        echo " ";
      } ?>" title="back to previous page">&larr;Back to <?php if ($project == 1) {
        echo "Hunting";
      } elseif ($project == 2) {
        echo "Camping";
      } elseif ($project == 3) {
        echo "Fishing";
      } elseif ($project == 4) {
        echo "Camping";
      } elseif ($project == 5) {
        echo "Hunting";
      } elseif ($project == 6) {
        echo "Fishing";
      } else {
        echo " ";
      } ?></a></p>
    </div>
  </div><!--row-->
</div><!--container-->
<?php include './_includes/footer.php'; ?>
<script src="_js/script.js"></script>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
