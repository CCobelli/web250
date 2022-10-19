<<<<<<< HEAD
      
  <?php if(isset($super_hero_image)) { ?>
    
=======
<<<<<<< HEAD
      
  <?php if(isset($super_hero_image)) { ?>
    
=======

  <?php if(isset($super_hero_image)) { ?>

>>>>>>> dev
>>>>>>> dev
    <div class="expanding-wrapper">
      <?php $image_url = url_for('/images/' . $super_hero_image); ?>
      <img id="super-hero-image" src="<?php echo $image_url; ?>" />
      <footer>
        <?php include(SHARED_PATH . '/public_copyright_disclaimer.php'); ?>
      </footer>
    </div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> dev
    
  <?php } else { ?>
    
    <footer>
      <?php include(SHARED_PATH . '/public_copyright_disclaimer.php'); ?>
    </footer>
    
<<<<<<< HEAD
=======
=======

  <?php } else { ?>

    <footer>
      <?php include(SHARED_PATH . '/public_copyright_disclaimer.php'); ?>
    </footer>

>>>>>>> dev
>>>>>>> dev
  <?php } ?>

  </body>
</html>

<?php
db_disconnect($database);
<<<<<<< HEAD
?>
=======
<<<<<<< HEAD
?>
=======
?>
>>>>>>> dev
>>>>>>> dev
