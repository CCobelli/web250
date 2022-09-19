<?php

class Bird {
    public $habitat;
    public $food;
    public $nesting = "tree";
    public $conservation;
    public $song = "chirp";
    protected static $flying = "yes";
    public static $instance_count = 0;
    public static $egg_num = 0;

    public static function create() {
        $bird_name = get_called_class();
        $obj = new $bird_name;
        self::$instance_count++;
        return $obj;
    }

    public static function can_fly() {
        $flying_string = static::$flying == "yes" ? "can fly" : "is stuck on the ground";
        return  $flying_string ;
    }
}

class YellowBelliedFlyCatcher extends Bird {
    var $name = "yellow-bellied flycatcher";
    var $diet = "mostly insects.";
    var $song = "flat chilk";
    public static $egg_num = "3-4 sometimes 5.";
}

class Kiwi extends Bird {
    var $name = "kiwi";
    var $diet = "omnivorous";
    protected static $flying = "no";
}
