<?php 
include_once 'config.php';
session_start();
$fullname=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
//image
$img_name=$_FILES['image']['name'];// get name image
$img_ext = pathinfo($img_name,PATHINFO_EXTENSION);// get file extension
$img_ext_allowed=array("jpeg","gif","png","jpg");
$tmp_name=$_FILES['image']['tmp_name'];// get where image

function check_user($User,$conn){
    $username_q = mysqli_query($conn,"SELECT * FROM users WHERE username = '{$User}'");
    if(mysqli_num_rows($username_q) > 0){
        // username is already sign in 
        return false;
    }else{
        return true;
    }
}
//check input is not empty
if(!empty($fullname) && !empty($username) && !empty($password)){
//if input not empty
    //check fullname is big than five characters
    if(strlen($fullname) >=5){
        // if the name is big than five characters
        //check password is big than 8 characters
        if(strlen($password) >=8){
            // if the password is big than (8) characters
            //check user name not uesd before
            if(check_user($username,$conn)){
                if(in_array($img_ext,$img_ext_allowed) === true){
                    // if image here 
                        $img_name_new=$username.time();
                        if(move_uploaded_file($tmp_name,"image-user/".$img_name_new.'.'.$img_ext)){
                            // move image to our floder
                            $insert_data=mysqli_query($conn,"INSERT INTO users (name,username,password,name_img,ext_img) VALUES ('$fullname','$username','$password','$img_name_new','$img_ext')");
                            if($insert_data){
                                // we will get id 
                                $login= mysqli_query($conn,"SELECT * FROM users WHERE username ='{$username}' AND password = '{$password}'");
                                if(mysqli_num_rows($login) > 0){
                                    // get Unique_id
                                while($obj = mysqli_fetch_object($login)){
                            
                                $id= $obj -> id; //hendle Unique_id
                                }
                                $_SESSION['id']=$id; 
                                if($_SESSION['id']){
                                echo 'successful';
                                }
                            }
                        }
                    }//end move image to our floder
                    }
                    else{
                        // if not image here
                        $insert_data=mysqli_query($conn,"INSERT INTO users (name,username,password) VALUES ('$fullname','$username','$password')");
                        if($insert_data){
                            // we will get id 
                            $login= mysqli_query($conn,"SELECT * FROM users WHERE username ='{$username}' AND password = '{$password}'");
                            if(mysqli_num_rows($login) > 0){
                                // get Unique_id
                            while($obj = mysqli_fetch_object($login)){
                        
                            $id= $obj -> id; //hendle Unique_id
                            }
                            $_SESSION['id']=$id; 
                            if($_SESSION['id']){
                            echo 'successful';
                            }
                        }
                    }
                    }
            }else{
                echo $username."already exist!";
            }
            
        }else{
            // if the password is not big than (8) characters
            echo "Password is short";
        }
    }else{
        // if the name is not big than five characters
        echo "Name is short";
    }
    
}else{
//if input empty
    echo "input is empty";
}
?>