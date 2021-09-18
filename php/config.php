<?php 
$host='localhost';
$user='root';
$pass='root';
$db='chat';
$conn= mysqli_connect($host,$user,$pass,$db);
//get image
function get_img($name_img,$ext_img){
    if(!empty($name_img)){
        return $name_img.'.'.$ext_img;
    }else{
        return "icons8-cat-profile-96.png";
    }
}