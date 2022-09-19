<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asgn02 Inheritance</title>
</head>
<body>
<h1>Inheritance Examples</h1>

<?php 
    include 'Bird.php';
    
    $bird = new Bird;
    echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

    $fly_catcher = new YellowBelliedFlyCatcher;
    echo '<p>The song of the ' . $fly_catcher->name . ' on breeding grounds is "' . $fly_catcher->song . '".</p>';

    $kiwi = new Kiwi;
    echo "<p>The " . $fly_catcher->name . " " . $fly_catcher->can_fly() . ".</p>";
    echo "<p>The " . $kiwi->name . " " . $kiwi->can_fly() . ".</p>";    

    echo 'Birds: ' . Bird::$instance_count . "<br />";
    echo 'YBFlyCatchers: ' . YellowBelliedFlyCatcher::$instance_count . "<br />";
    echo 'Kiwis: ' . Kiwi::$instance_count . "<br />";

    $bird1 = Bird::create();
    $YBFC1 = YellowBelliedFlyCatcher::create();
    $kiwi1 = Kiwi::create();

    echo "<hr />";
    echo 'Birds: ' . Bird::$instance_count . "<br />";
    echo 'YBFlyCatchers: ' . YellowBelliedFlyCatcher::$instance_count . "<br />";
    echo 'Kiwis: ' . Kiwi::$instance_count . "<br />";

?>
    </body>
</html>
