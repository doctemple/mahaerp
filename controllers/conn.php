<?php 
$_EXT = get_loaded_extensions();

if(in_array("pgsql",$_EXT)){
  $_PGSQL = TRUE;

    $conn = @pg_connect('host='._SYS['host'].' port='._SYS['port'].' dbname='._SYS['dbname'].' user='._SYS['username'].' password='._SYS['password']);
    DEFINE('_CON',$conn);

}else{
  $_PGSQL = FALSE;
}