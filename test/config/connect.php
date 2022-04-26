<?php
 class database {

    public function connect_db(){

        $connect=null;
        if ($connect == null) {

            $connect = myslqi_connect('localhost','root','', 'livecoding');

            else (
                $message='bro there is a database error';
                throw new exeption ($message);
            )
        }
        return $connect; 
    }
 }


?>