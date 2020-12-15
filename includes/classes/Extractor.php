<?php

class Extractor {
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $connection;

    function __construct($container_){
	list($this->servername, $this->username, $this->password, $this->dbname) = $container_;
	try{
		$this->connection = new PDO(
		    "mysql:host=$this->servername; dbname=$this->dbname",
		    $this->username,
		    $this->password
		);
	} catch (Exception $e){
		echo "ERROR: ", $e->getMessage(), "\n";
	}
    }

    function query($command) {
        $statement = $this->connection->prepare($command);
        //return $statement->execute() ? $statement->fetchAll(PDO::FETCH_ASSOC) : Array();
        return $statement->execute() ? $statement->fetchAll(PDO::FETCH_NUM) : Array();
    }

    function query_file($path){
        $contents = $this->boilFile($path);
        return $this->query($contents);
    }


    function boilFile($path) {
        return file_get_contents($path);
    }

    function showTables(){
        $tables = Array();
        $contents = "show tables;";
        $contents = $this->query($contents);
        foreach($contents as $table) {
            array_push($tables, $table[0]);
        }
        print_r($tables);
    }

};

?>
