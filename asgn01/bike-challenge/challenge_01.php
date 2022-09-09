<?php

class Bicycle {
    var $brand;
    var $model;
    var $year;
    var $description = 'Used bicycle';
    var $weight_kg = 0.0;

    function name() {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    function weight_lbs() {
        return floatval($this->weight_kg) * 2.2046226218;
    }

    function set_weight_lbs($value) {
        $this->weight_kg = floatval($value) / 2.2046226218;
    }
}

$haro = new Bicycle;
$haro->brand = 'Haro';
$haro->model = 'Midway FreeCoaster';
$haro->year = '2021';
$haro->weight_kg = '11.8';

echo $haro->name() . "<br />";
echo $haro->weight_kg . "<br />";
echo $haro->weight_lbs() . "<br />";
echo "<br />";
$haro->set_weight_lbs(26);
echo $haro->weight_kg . "<br />";
echo $haro->weight_lbs() . "<br />";
?>

