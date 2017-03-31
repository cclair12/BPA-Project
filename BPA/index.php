
<?php include './_includes/title.php'; ?>
<?php include './_includes/header.php'; ?>
  <div class="container fluid">
    <div id="banner">
    <div class="row">
      <div class="twelve columns">
<h1 class="typewriter">get out and create.</h1>
      </div>
    </div><!--row-->
  </div><!--banner-->
<section id="categories">
   <div class="row">
    <a href="category.php?cat_id=1" class="one-third column cat-icon">
      <img class="circle-img" src="_images/hunting_icon.gif" alt="hunting icon" onload="catIcon()">
      <h3>Hunting</h3>
  </a>
  <a href="category.php?cat_id=2" class="one-third column cat-icon">
    <img class="circle-img" src="_images/fishing_icon.gif" alt="fishing icon" onload="catIcon()">
    <h3>Fishing</h3>
</a>
<a href="category.php?cat_id=3" class="one-third column cat-icon">
  <img class="circle-img" src="_images/camping_icon.gif" alt="camping icon" onload="catIcon">
  <h3>Camping</h3>
</a>
</div><!--row-->
</section><!--categories-->
</div><!--container-->
</main>
 <?php include './_includes/footer.php'; ?>
 <script src="_js/script.js"></script>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
