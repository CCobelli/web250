<?php

class Bicycle {
    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    private $weight_kg = 0.0;
    protected $wheels = 2;

    public function name() {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    public function weight_lbs() {
        $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
        return $weight_lbs . ' lbs';
    }

    public function set_weight_lbs($value) {
        $this->weight_kg = floatval($value) / 2.2046226218;
    }

    public function weight_kg() {
        return $this->weight_kg . ' kg';
    }

    public function set_weight_kg($value) {
        $this->weight_kg = floatval($value);
    }

    public function wheel_details() {
        $wheelString = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
        return "This has " . $wheelString . ".";
    }

    
}

class Unicycle extends Bicycle {
    protected $wheels = 1;
}

$haro = new Bicycle;
$haro->brand = 'Haro';
$haro->model = 'Midway FreeCoaster';
$haro->year = '2021';

$uni = new Unicycle;

echo "Bicycle: " . $haro->wheel_details() . "<br />";
echo "Unicycle: " . $uni->wheel_details() . "<br />";
echo "<hr />";

echo "Weight in kg<br />";
$haro->set_weight_kg(11);
echo $haro->weight_kg() . "<br />";
echo $haro->weight_lbs() . "<br />";
echo "<br />";
echo "Weight in lbs<br />";
$haro->set_weight_lbs(24);
echo $haro->weight_kg() . "<br />";
echo $haro->weight_lbs() . "<br />";
echo "<hr />";

echo "Unicycle weight<br />";
$uni->set_weight_kg(5);
echo $uni->weight_kg() . "<br />";
echo $uni->weight_lbs() . "<br />";

?>