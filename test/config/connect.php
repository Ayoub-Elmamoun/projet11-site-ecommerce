<?php
 class database {

    public function connect_db(){

        $connect=null;
        if ($connect == null) {

            $connect = myslqi_connect('localhost','root','', 'livecoding');

            else (
                $message='cannot access brother';
                throw new exeption ($message);
            )
        }
        return $connect; 
    }
 }


?>