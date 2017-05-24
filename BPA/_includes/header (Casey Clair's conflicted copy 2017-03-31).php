 <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>

   <!-- Basic Page Needs
   –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <meta charset="utf-8">
     <title>Woodsman's Log<?php if (isset($title)) {echo "&#8212;{$title}";} ?></title>
     <link rel="icon" href="_images/favicon.png">
   <!-- Mobile Specific Metas
   –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- FONT
   –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans%7cSpecial+Elite" rel="stylesheet">

   <!-- CSS
   –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <link rel="stylesheet" href="_css/styles.css">
 </head>
 <body>

   <!-- Primary Page Layout
   –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <header><!--(quinn)-->
   <div class="container fluid">
<section class="header">
      <div class="row">
        <div class="twelve columns">
         <a href="index.php"><img class="logo" src="_images/wl_logo.svg" alt="woodsman's log logo" width="320" height="200"></a>
    </div>
  </div><!--row-->
  <div class="row">
    <div class="twelve columns">
  <nav>
      <ul class="topnav" id="myTopnav">
        <li><a href="index.php" <?php if ($currentPage == 'index.php') { echo 'id="current"';} ?>>Home</a></li>
        <li><a href="category.php?cat_id=1" <?php if ($currentPage == 'category.php?cat_id=1') { echo 'id="current"';} ?>>Hunting</a></li>
        <li><a href="category.php?cat_id=2" <?php if ($currentPage == 'category.php?cat_id=2') { echo 'id="current"';} ?>>Fishing</a></li>
        <li><a href="category.php?cat_id=3" <?php if ($currentPage == 'category.php?cat_id=3') { echo 'id="current"';} ?>>Camping</a></li>
        <li><a href="contact.php" <?php if ($currentPage == 'contact.php') { echo 'id="current"';} ?>>Contact</a></li>
        <li><a href="about_us.php" <?php if ($currentPage == 'about_us.php') { echo 'id="current"';} ?>>About</a></li>
        <li class="icon">
          <button onclick="myFunction()">
            <span class="sr-only">Toggle navigation</span>
            <span class="menu-icon"></span>
            <span class="menu-icon"></span>
            <span class="menu-icon"></span>
          </button>
        </li>
    </ul>
    </nav>
    </div>
  </div><!--row-->
  </section><!--header-->
</div> <!--container(quinn)-->
</header> <!--(quinn)-->
