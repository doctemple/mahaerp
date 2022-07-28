<?php
session_start();

if(isset($_POST)){
    if($_POST['u'] == "admin"){
        $_SESSION['aut'] = true;
    }else{
        $_SESSION['aut'] = false;
    }

    header("location:../?");
}
?>