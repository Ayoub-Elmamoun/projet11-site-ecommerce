<?php 

class dataBase{

    function connectDb(){

        $connect=null;
        if ($connect == null) {

            // try to connect to database
            $connect = myslqi_connect('localhost','root','', 'livecoding');
        }
        else {
            echo 'cannot connect buddy';
        }
        return $connect;
    }

}
?>