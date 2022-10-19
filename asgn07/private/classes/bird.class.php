<?php

class Bird {

    static protected $database;

    static public function set_database($database) {
        self::$database = $database;
    }

    static public function find_by_sql($sql) {
        $result = self::$database->query($sql);
        if(!$result) {
            exit("Database query failed.");
        }

        $object_array = [];
        while($record = $result->fetch_assoc()) {
            $object_array[] =self::instantiate($record);
        }

        $result->free();

        return $object_array;
    }

    static public function find_all() {
        $sql = "SELECT * FROM birds";
        return self::find_by_sql($sql);
    }

    static public function find_by_id($id) {
        $sql = "SELECT * FROM birds ";
        $sql .= "WHERE id='" . self::$database->escape_string($id) . "'";
        $obj_array = self::find_by_sql($sql);
        if(!empty($obj_array)) {
            return array_shift($obj_array);
        }else {
            return false;
        }
    }

    static protected function instantiate($record) {
        $object = new self;
        foreach($record as $property => $value) {
            if(property_exists($object, $property)) {
                $object->$property = $value;
            }
        }
        return $object;
    }

    public $id;
    public $name;
    public $habitat;
    public $food;
    public $nestPlacement;
    public $behavior;
    public $backyardTips;
    protected const CONSERVATION_LEVEL = [
        1 => 'low',
        2 => 'moderate',
        3 => 'hight',
        4 => 'extreme',
    ];
    

    public function __construct($args=[]) {
        $this->id = $args['id'] ?? '';
        $this->name = $args['common_name'] ?? '';
        $this->habitat = $args['habitat'] ?? '';
        $this->food = $args['food'] ?? '';
        $this->nestPlacement = $args['nest_placement'] ?? '';
        $this->behavior = $args['behavior'] ?? '';
        $this->backyardTips = $args['backyard_tips'] ?? '';
        $this->conservation_id = $args['conservation_id'] ?? 3;
    }

    public function conservation() {
        if($this->conservation_id > 0) {
            return self::CONSERVATION_LEVEL[$this->conservation_id];
        } else {
            return "Unknown";
        }
    }

    public function name() {
        return "{$this->name}";
    }
   
}

?>