<?php
class Telephone {
    public $areaCode;
    public $extension;

    function __construct($inputString){
        $expression = "/([0-9]{3})\-?([0-9]{3}\-?[0-9]{4})/";
        $matches = array();
        $search = preg_match_all($expression, $inputString, $matches);
        $this->areaCode = $matches[1][0];
        $this->extension = $matches[2][0];
    }
}
?>
