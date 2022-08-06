<?php 
$conn = pg_connect('host='._SYS['host'].' port='._SYS['port'].' dbname='._SYS['dbname'].' user='._SYS['username'].' password='._SYS['password']);

if (!$conn) {
    echo "<marquee>Not connected to db</marquee> \n";
}

?>