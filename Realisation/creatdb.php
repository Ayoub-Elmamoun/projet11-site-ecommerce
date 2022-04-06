<?php

class creatdb {

    public $servername;
    public $username;
    public $user_password;
    public $tablename;
    public $dbname;
    public $connection;

        // constructor class
    public function Constructor($dbname = "NewDb",$servername = "localhost",$tablename = "Productdb",$username = "admin",$user_password = "")
    {
        // initializing the shit 

        $this->dbname =$dbname;
        $this->servername = $servername;
        $this->tablename =$tablename;
        $this->username =$username;
        $this->user_pasword =$user_password;

        // creat connction and check it 

        $this->connection = mysqli_connect($servername,$username,$user_password);
        if (!$this->connection) 
            die ("connection failed".mysli_connection_error());
        }

    }
}


?>