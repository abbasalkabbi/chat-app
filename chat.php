<?php 
include_once 'php/config.php';
session_start();
//check if your login
if(!$_SESSION['id']){
    header("location: index");
}
$id=$_GET['id'];
$friend=mysqli_query($conn,"SELECT * FROM users WHERE id=$id");
while($obj = mysqli_fetch_object($friend)){
                        
    $name= $obj -> name; //hendle name
    $username= $obj -> username; //hendle username
    $name_img= $obj -> name_img; //hendle name_img
    $ext_img= $obj -> ext_img; //hendle ext_img
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/chat.css">
    <title>Document</title>
</head>
<body>
    <!--container--->
    <div class="container">
        <!---chat -->
        <div class="chat">
            <!--header-->
            <header>
                <!---img- your friend-->
                <img src="../php/image-user/<?php echo get_img($name_img,$ext_img);?>" alt="">
                <!---img END-->
                <!---name your friend-->
                <p><?php echo htmlspecialchars($name)?></p>
                <!---name your friend-END-->
            </header>
            <!--header- END-->
            <!--
                section
                show messenger
                --->
            <section>
            <div class="friend">
            <p>hi</p>
            </div>
            <div class="you">
            <p>how are you</p>
            </div>
            </section>
            <!---section END-->
            <!--footer--->
            <footer>
                <!---form-->
                <form class="chat-form">
                    <!---input send-->
                    <input type="text" name="context" class="context" placeholder="write here ...">
                    <!---input send-END-->
                    <button class="send"><img src="../src/icons8-send-64.png" alt="send"></button>
                    <input type="hidden" name="id-friend" value="<?php echo $_GET['id'];?>">
                    <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>">
                </form>
                <!---form END-->
            </footer>
            <!--footer END-->
        </div>
        <!---chat END-->
    </div>
    <!--container-END-->
    <script src="../js/chat.js"></script>
</body>
</html>