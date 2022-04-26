<?php
 class dataBase {

    public function connectDb(){

        $connect=null;
        if ($connect == null) {

            // try to connect to database

            $connect = mysqli_connect('localhost','root','', 'livecoding');


        }

        // if not connected disply that shitty messge
        
        else {
            echo 'cannot access brother';
        return $connect; 
    }
 }
}


?>