<?php
 class database {

    public function connect_db(){

        $connect=null;
        if ($connect == null) {

            // try to connect to database

            $connect = myslqi_connect('localhost','root','', 'livecoding');


        }

        // if not connected disply that shitty messge
        
        else {
            $message='cannot access brother';
            throw new exeption ($message);                
        };
        return $connect; 
    }
 }


?>