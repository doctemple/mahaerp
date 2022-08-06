<?php
session_start();

if(isset($_SESSION['aut'])){

    if(session_destroy()){

        header("location:../?");
    }else{
        unset($_SESSION['aut']);
    }

}else{
    header("location:../?");
}
?>