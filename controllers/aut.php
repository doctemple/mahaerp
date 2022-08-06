<?php
include("../core/config.php");
include_once('conn.php');
$message_ok=false;
$message_error='The system is not available';
if(isset($_POST['username'],$_POST['password'])):
    if($_POST['username']!=""):
        if($_POST['password']!=""):
            $username=$_POST['username'];
            $password=md5($_POST['password']);

            $sql = "Select * from user_tbl where fld_username='$username' and fld_password='$password'";
            $res=pg_query($conn,($sql));

            if(pg_num_rows($res)>0):
                $message_ok=true;
                $user_list=pg_fetch_array($res);
                $_SESSION['aut']=true;
                $_SESSION['uid']=$user_list[0];
                $_SESSION['u']=$user_list[1];
                $message_error='logged now';
            else:
                $message_error='Login falied,please check your login account again\n';

            endif;
        else:
            $message_error='Wrong password.';
        endif;
    else:
        $message_error='username not existed.';
    endif;
else:
    $message_error='All fields are required.';
endif;
$json=array('data' => $message_ok, 'message' =>$message_error);
echo json_encode($json);

?>