<?php

if (empty($_GET["uid"])) {
    header("Location: ../view/AdminHome.php");
} else {
    include '../model/UserManagement.php';
    ActivateUser($_GET["uid"]); // return by itself
      
    
}
?>
