<?php

class Bird {
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
   
}

?>