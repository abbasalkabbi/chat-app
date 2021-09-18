<?php 
include_once 'config.php';
$id=$_POST['id'];
$id_friend=$_POST['id-friend'];
$output="";
$sq=mysqli_query($conn,"SELECT * FROM chat_messge WHERE (id_author={$id} AND id_friend={$id_friend}) OR (id_author={$id_friend} AND id_friend={$id})");

if(mysqli_num_rows($sq) >0){
    while($row =mysqli_fetch_assoc($sq)){
        if($row['id_author']===$id){
            $output .='<div class="friend">
            <p>'.$row['context'].'</p>
            </div>';
        }else{
            $output .='<div class="you">
            <p>'.$row['context'].'</p>
            </div>';
        }
    }
    echo $output;
}


?>