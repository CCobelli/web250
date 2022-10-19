<?php require_once('../private/initialize.php'); ?>

<?php

  // Get requested ID

  $id = $_GET['id'] ?? false;

  if(!$id) {
<<<<<<< HEAD
    redirect_to('bird.php');
=======
<<<<<<< HEAD
    redirect_to('bird.php');
=======
    redirect_to('bicycles.php');
>>>>>>> dev
>>>>>>> dev
  }

  // Find bicycle using ID

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> dev
  $bird = Bird::find_by_id($id);

?>

<?php $page_title = 'Detail: ' . $bird->name(); ?>
<<<<<<< HEAD
=======
=======
  $bike = Bicycle::find_by_id($id);

?>

<?php $page_title = 'Detail: ' . $bike->name(); ?>
>>>>>>> dev
>>>>>>> dev
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

<<<<<<< HEAD
  <a href="bird.php">Back to Inventory</a>
=======
<<<<<<< HEAD
  <a href="bird.php">Back to Inventory</a>
=======
  <a href="bicycles.php">Back to Inventory</a>
>>>>>>> dev
>>>>>>> dev

  <div id="page">

    <div class="detail">
      <dl>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> dev
        <dt>Name</dt>
        <dd><?php echo h($bird->name); ?></dd>
      </dl>
      <dl>
        <dt>Habitat</dt>
        <dd><?php echo h($bird->habitat); ?></dd>
      </dl>
      <dl>
        <dt>Food</dt>
        <dd><?php echo h($bird->food); ?></dd>
      </dl>
      <dl>
        <dt>Conservation</dt>
        <dd><?php echo h($bird->conservation()); ?></dd>
      </dl>
      <dl>
        <dt>Backyard Tips</dt>
        <dd><?php echo h($bird->backyardTips); ?></dd>
<<<<<<< HEAD
=======
=======
        <dt>Brand</dt>
        <dd><?php echo h($bike->brand); ?></dd>
      </dl>
      <dl>
        <dt>Model</dt>
        <dd><?php echo h($bike->model); ?></dd>
      </dl>
      <dl>
        <dt>Year</dt>
        <dd><?php echo h($bike->year); ?></dd>
      </dl>
      <dl>
        <dt>Category</dt>
        <dd><?php echo h($bike->category); ?></dd>
      </dl>
      <dl>
        <dt>Gender</dt>
        <dd><?php echo h($bike->gender); ?></dd>
      </dl>
      <dl>
        <dt>Color</dt>
        <dd><?php echo h($bike->color); ?></dd>
      </dl>
      <dl>
        <dt>Weight</dt>
        <dd><?php echo h($bike->weight_kg()) . ' / ' . h($bike->weight_lbs()); ?></dd>
      </dl>
      <dl>
        <dt>Condition</dt>
        <dd><?php echo h($bike->condition()); ?></dd>
      </dl>
      <dl>
        <dt>Price</dt>
        <dd><?php echo h(money_format('$%i', $bike->price)); ?></dd>
      </dl>
      <dl>
        <dt>Description</dt>
        <dd><?php echo h($bike->description); ?></dd>
>>>>>>> dev
>>>>>>> dev
      </dl>
    </div>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
