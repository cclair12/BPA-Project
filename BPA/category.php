
<?php
// create database connection
require_once './_includes/connection.php';
$category = $_GET['cat_id'];
$conn = dbConnect('read');
$sql = 'SELECT projects.id,projects.category_id,projects.image_id,projects.name,projects.description,images.filename FROM projects,images WHERE projects.image_id = images.id AND category_id = ' .$category;
$result = $conn->query($sql);
if (!$result) {
    $error = $conn->error;
} else {
  $numRows = $result->num_rows;
}
?>
<?php include './_includes/title.php';
include './_includes/header.php';
?>
<div class="container preview">
    <div class="row">
      <div class="twelve columns">
        <h1 class="page-header"><?php if ($category == 1) {
					echo "Hunting";
				} elseif ($category == 2) {
					echo "Fishing";
				} elseif ($category == 3) {
					echo "Camping";
				} else {
					echo '';
				}?></h1>
      </div>
</div>
  <div class="row">
    <?php while ($row = $result->fetch_assoc()) { ?>
     <div class="six columns">
       <a href="project.php?id=<?= $row['id']; ?>" class="project-wrapper">
      <h2><?= $row['name']; ?></h2>
      <p><?= $row['description'];?>!</p>
      <!-- Add Image here --><img src="_images/<?= $row['filename']; ?>" alt="<?= $row['name']; ?>" class="responsive-img">
      </a>
  </div>
  <?php } ?>
</div><!--row-->

</div><!--container-->
<?php include './_includes/footer.php'; ?>
<script src="_js/script.js"></script>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
