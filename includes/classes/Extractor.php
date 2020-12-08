<?php

class Extractor {
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $connection;

    function __construct($container_){
        list($this->servername, $this->username, $this->password, $this->dbname) = $container_;
        $this->connection = new PDO(
            "mysql:host=$this->servername; dbname=$this->dbname",
            $this->username,
            $this->password
        );
        $this->connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    }

    function query($command) {
        $statement = $this->connection->prepare($command);
        return $statement->execute() ? $statement->fetchAll(PDO::FETCH_NUM) : Array();
    }

    function query_file($path){
        $contents = $this->boilFile($path);
        return $this->query($contents);
    }


    function boilFile($path) {
        return file_get_contents($path);
    }


    function print_query($content){
        foreach($content as &$row) { 
            foreach($row as &$element) { echo "$element"; }
        }
    }
};

?>
