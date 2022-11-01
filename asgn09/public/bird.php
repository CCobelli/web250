<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <h1>Small Sampling of WNC Birds</h1>
    </div>

    <table id="inventory">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Conservations Level</th>
        <th>Backyard Tips</th>
      </tr>

      <?php 

      $birds = Bird::find_all();


      ?>

      <?php foreach($birds as $bird) { ?>
      <tr>
      <td><?php echo h($bird->id); ?></td>
        <td><?php echo h($bird->common_name); ?></td>
        <td><?php echo h($bird->habitat); ?></td>
        <td><?php echo h($bird->food); ?></td>
        <td><?php echo h($bird->conservation_id); ?></td>
        <td><?php echo h($bird->backyard_tips); ?></td>
      </tr>
      <?php } ?>

    </table>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>

