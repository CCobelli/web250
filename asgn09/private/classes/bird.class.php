<?php

class Bird extends DatabaseObject {

    static protected $table_name = 'birds';
    static public $db_columns = ['id', 'common_name', 'habitat', 'food', 'backyard_tips', 'conservation_id'];
  
    public $id;
    public $common_name;
    public $habitat;
    public $food;
    public $backyard_tips;
    public $conservation_id;
    public const CONSERVATION_LEVEL = [
        1 => 'low',
        2 => 'moderate',
        3 => 'hight',
        4 => 'extreme'
    ];
    

    public function __construct($args=[]) {
        $this->common_name = $args['common_name'] ?? '';
        $this->habitat = $args['habitat'] ?? '';
        $this->food = $args['food'] ?? '';
        $this->backyard_tips = $args['backyard_tips'] ?? '';
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
        return "{$this->common_name}";
      }
   
}

?>