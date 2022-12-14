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
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Nest Placement</th>
        <th>Behavior</th>
        <th>Conservations Level</th>
        <th>Backyard Tips</th>
      </tr>

      <?php 

      $parser = new ParseCSV(PRIVATE_PATH . '/wnc-birds.csv');
      $bird_array = $parser->parse();

      ?>

      <?php foreach($bird_array as $args) { ?>
        <?php $bird = new Bird($args); ?>
      <tr>
        <td><?php echo h($bird->name); ?></td>
        <td><?php echo h($bird->habitat); ?></td>
        <td><?php echo h($bird->food); ?></td>
        <td><?php echo h($bird->nestPlacement); ?></td>
        <td><?php echo h($bird->behavior); ?></td>        
        <td><?php echo h($bird->conservation()); ?></td>
        <td><?php echo h($bird->backyardTips); ?></td>
      </tr>
      <?php } ?>

    </table>
  </div>

</div>

