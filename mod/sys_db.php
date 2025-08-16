<?php

 class Sys_db{

 public function __construct(){
   $this->Conexes();
 }

 public function Conexes(){

    return $db = Mysqli_connect("localhost",'root','','animundo');

    
 }
}

