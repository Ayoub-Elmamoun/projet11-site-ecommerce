<?php

class CreateDb { 

    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;  

    public function __construct(
        $servername ="localhost",
        $username ="root",
        $password ="",
        $dbname ="site-ecommerce",
        $tablename ="products") 
        {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->tablename = $tablename;
    

        // create connection
    
            $this->con = new mysqli($servername, $username, $password, $dbname);
            if ($this->con->connect_error) {
                die("Connection failed: " . $this->con->connect_error);
            }

        // query

        $sql="CREATE DATABASE IF NOT EXISTS $dbname";
        
        // execute query
        if(mysqli_query($this->con, $sql)){

        } else{
            echo "Error creating database: " . mysqli_error($this->con);
        }

        // create table
            $sql = "CREATE TABLE IF NOT EXISTS $tablename (
                id INT(100) AUTO_INCREMENT PRIMARY KEY,
                product_name VARCHAR(30) NOT NULL,
                product_price FLOAT(10,2) NOT NULL,
                product_image VARCHAR(100) NOT NULL
                )";
        
                if (!mysqli_query($this->con, $sql)) {
                    echo "Error creating table: " . mysqli_error($this->con);
                }
        
    }

    // get data from database

    public function getData(){

        $sql = "SELECT * FROM $this->tablename";
        $result = $this->con->query($sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        }
    }

} 
 ?>