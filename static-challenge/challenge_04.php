<?php

class Bicycle {
    public static $instance_count = 0;
    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    public $category;
    protected $weight_kg = 0.0;
    protected static $wheels = 2;

    public const CATEGORIES = ['Street', 'BMX', 'Mountain'];

    public static function create() {
        $class_name = get_called_class();
        $obj = new $class_name;
        self::$instance_count++;
        return $obj;
    }

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

    public static function wheel_details() {
        $wheelString = static::$wheels == 1 ? "1 wheel" : static::$wheels . " wheels";
        return "This has " . $wheelString . ".";
    }
}

class Unicycle extends Bicycle {
    protected  static $wheels = 1;
}


$haro = new Bicycle;
$haro->brand = 'Haro';
$haro->model = 'Midway FreeCoaster';
$haro->year = '2021';

echo 'Bicycle count: ' . Bicycle::$instance_count . '<br />';
echo 'Unicycle count: ' . Unicycle::$instance_count . '<br />';

$bike = Bicycle::create();
$uni = Unicycle::create();

echo 'Bicycle count: ' . Bicycle::$instance_count . '<br />';
echo 'Unicycle count: ' . Unicycle::$instance_count . '<br />';

echo "<hr />";
echo 'Categories: ' . implode(', ', Bicycle::CATEGORIES) . '<br />';
$haro->category = Bicycle::CATEGORIES[1];
echo 'Category: ' . $haro->category . '<br />';

echo "<hr />";
echo "Bicycle: " . Bicycle::wheel_details() . "<br />";
echo "Unicycle: " . Unicycle::wheel_details() . "<br />";
?>