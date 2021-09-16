<?php
session_start();
include_once 'config.php';
$username=$_POST['username'];
$password=$_POST['password'];
//check input is not empty
if(!empty($username) && !empty($password)){
    $check_username=mysqli_query($conn,"SELECT * FROM users WHERE username ='{$username}'");
    //check if there username
    if(mysqli_num_rows($check_username) > 0){
        //check if input is cruect
        $login= mysqli_query($conn,"SELECT * FROM users WHERE username ='{$username}' AND password = '{$password}'");
        if(mysqli_num_rows($login) > 0){
            //if login 
            while($obj = mysqli_fetch_object($login)){
                        
                $id= $obj -> id; //hendle Unique_id
            }
            $_SESSION['id']=$id; 
                if($_SESSION['id']){
                    echo 'successful';
                }
        }else{
            //if password error
            echo "Password Error";
        }
    }else{
        echo "User Name Error";
    }
}else{
//if input is empty
    echo "input is empty";
}
?>