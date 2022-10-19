<<<<<<< HEAD
      
  <?php if(isset($super_hero_image)) { ?>
    
=======

  <?php if(isset($super_hero_image)) { ?>

>>>>>>> dev
    <div class="expanding-wrapper">
      <?php $image_url = url_for('/images/' . $super_hero_image); ?>
      <img id="super-hero-image" src="<?php echo $image_url; ?>" />
      <footer>
        <?php include(SHARED_PATH . '/public_copyright_disclaimer.php'); ?>
      </footer>
    </div>
<<<<<<< HEAD
    
  <?php } else { ?>
    
    <footer>
      <?php include(SHARED_PATH . '/public_copyright_disclaimer.php'); ?>
    </footer>
    
=======

  <?php } else { ?>

    <footer>
      <?php include(SHARED_PATH . '/public_copyright_disclaimer.php'); ?>
    </footer>

>>>>>>> dev
  <?php } ?>

  </body>
</html>

<?php
db_disconnect($database);
<<<<<<< HEAD
?>
=======
?>
>>>>>>> dev
