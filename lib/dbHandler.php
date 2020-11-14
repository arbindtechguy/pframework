<?php
require_once('config/conf.php');

class DBHandler {
    private $server;
    private $username;
    private $password;
    private $dbName;
    protected $myDb;

    function __construct() {
        $this->server   = SERVER;
        $this->username = USERNAME;
        $this->password = PASSWORD;
        $this->dbName   = DBNAME;
        $this->myDb   = new mysqli($this->server, $this->username, $this->password, $this->dbName);
        if ($this->myDb->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }




}