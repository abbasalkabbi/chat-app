<?php 
session_start();
include_once 'config.php';
$context=$_POST['context'];
$id_friend=$_POST['id-friend'];
$id=$_SESSION['id'];
if(!empty($context)){
    $chat=mysqli_query($conn,"INSERT INTO `chat_messge` (`id`, `id_author`, `id_friend`, `context`) VALUES (NULL, '$id', '$id_friend', '$context')");
    
}

?>