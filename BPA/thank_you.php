<?php
$id = $_GET['id'];
include './_includes/title.php';
require './_includes/header.php';
?>
    <div class="container white-space">
      <div class="row">
        <div class="twelve columns">
        <h1 class="confirm">Thank You!</h1>
        <p><?php if ($id == 1) {
					echo "Your comments have been sent. We appreciate your feedback and will use it to continue to improve our website!";
        }elseif ($id == 2) {
          echo "Your project has been submitted to our team! If accepted, it will be posted in the appropriate category and you will be notified via the email you have provided! We hope you'll continue to get out and create!";
        }else {
          echo "";
        }
        ?>
      </p>
        </div>
      </div><!--row-->
    </div>
    <?php include './_includes/footer.php'; ?>
    <script src="_js/script.js"></script>
</div>
</body>
</html>
