<?php
class Department {
    public $identifier;
    public $name;
    public $telephone;
    public $location;
    public $chairperson;

    function __construct($container_){
        // Assign the values of an array into the attributes of the class Department in order as seen above
        list($this->identifier, $this->name, $this->telephone, $this->location, $this->chairperson) = $container_;
    }
}

?>
