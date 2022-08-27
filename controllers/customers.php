<?php

        if(isset($_GET['add'])){
            include_once(_PATH.'/views/'.$comm.'/add.php');  

        }else{

            if(isset($_GET['id'])){

                if(isset($_GET['edit'])){
                    include_once(_PATH.'/views/'.$comm.'/edit.php');              
                }else{
                    include_once(_PATH.'/views/'.$comm.'/detail.php');  
                }

            }else{

             include_once(_PATH.'/views/'.$comm.'/list.php');    

            }
        }
              
?>