<?php
require("./Dir_session.php");
if(empty($_POST['users']) || empty($_POST['email']) || empty($_POST['message'])){
   
    header("Location: http://localhost/animundo/");
}else{

    $dir = new Loads();

    $dir->User_message($_POST['users'],$_POST['email'],$_POST['message']);

}