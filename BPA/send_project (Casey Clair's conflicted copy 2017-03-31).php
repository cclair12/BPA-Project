<?php
$errors = [];
$missing = [];
include './_includes/title.php';
//check if form has submitted
if (isset($_POST['send'])) {
	//email processing script
	$to = 'woodsmanslog@gmail.com';
	$subject = 'Project Idea for Woodsmans Log';
	// expected fields
	$expected = ['name', 'email', 'project_title', 'project_steps', 'uploaded_file'];
	// required fields
	$required = ['name', 'email', 'project_title', 'project_steps', 'uploaded_file'];
	//additional headers
	$headers = "From: Woodman's Log Project Submission<woodsmanslog@gmail.com>\r\n";
	$headers = 'Content-Type: text/plain; charset=utf-8';
	require './_includes/processmail.php';
	if ($mailSent) {
		header('Location: http://ftclass.com/bpaps/thank_you.php?id=2');
		exit;
	}
}
?>
<?php require './_includes/header.php'; ?>
<div class="container contact-form">
	<div class="row">
		<div class="twelve columns">
<h1 class="page-header">Send Us A Project Idea!</h1>
	  </div>
</div><!--row-->
<p class="tip">&#42; Required fields</p>
<?php if (($_POST && $suspect) || ($_POST && isset($errors['mailfail']))) { ?>
      <p class="tip">Sorry, your project could not be sent. Please try later.</p>
    <?php } elseif ($missing || $errors) {?>
        <p class="tip">Please fix the item(s) indicated.</p>
        <?php } ?>
<div class="row">
  <div class="eight columns offset-by-two">
    <div class="form-wrapper">
	<form method="post" name="submit_an_idea" enctype="multipart/form-data">
		<label for="name">Name: <strong class="tip">&#42;</strong>
       <?php if ($missing && in_array('name', $missing)) { ?>
         <span class="tip">Please enter your name.</span>
         <?php } ?></label>
		<input type="text" name="name" id="name" placeholder="Name">
		<label for="email">Email: <strong class="tip">&#42;</strong>
			<?php if ($missing && in_array('email', $missing)) { ?>
          <span class="tip">Please enter your email address.</span>
          <?php } ?></label>
		<input type="text" name="email" id="email" placeholder="Email Address">
		<label for="project_title">Project Title: <strong class="tip">&#42;</strong>
      <?php if ($missing && in_array('project_title', $missing)) { ?>
          <span class="tip">Please enter your project title.</span>
          <?php } ?></label>
		<input type="text" name="project_title" id="project_title" placeholder="Project Title">
		<label for="project_steps">Project Steps: <strong class="tip">&#42;</strong>
      <?php if ($missing && in_array('project_steps', $missing)) { ?>
          <span class="tip">Please enter the steps to your project.</span>
            <?php } ?></label>
		<textarea name="project_steps" id="project_steps" placeholder="Please List Project Steps In Order"></textarea><br>
		<input type="submit" value="send" name='send'>
	</form>
     </div>
   </div>
</div><!--row-->
</div><!--container-->
<?php include './_includes/footer.php'; ?>
<script src="_js/script.js"></script>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

</body>
</html>
