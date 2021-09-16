<?php 
include_once 'php/config.php';
session_start();
//check if your login
if(!$_SESSION['id']){
    header("location: index");
}
//get data from db
$sq_users=mysqli_query($conn,"SELECT * FROM users");
$users_data= mysqli_fetch_all($sq_users,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>home</title>
</head>
<body>
    <!---container-->
    <div class="container">
        <!---list your friends-->
        <div class="list-container">
            <!--header-->
            <header>
                <!--img-->
                <img src="./src/3PWMlhY.jpg" alt="">
                <!--img-END-->
                <!--name p-->
                <p>Abbas alkaabi</p>
                <!--name p-->
                <span>log out</span>
            </header>
            <!--header-END-->
            <!--section-->
            <section>
                <?php 
                if(!empty($users_data)){
                    // if here users
                ?>
            <!---ul friend -->
                <ul>
                    <?php 
                    // start forech users
                    foreach ($users_data as $friend){
                    ?>
                    <!---friend-->
                    <li>
                    <a href="">
                        <img src="./php/image-user/<?php echo $friend['name_img'].'.'.$friend['ext_img']?>" alt="">
                        <p><?php echo htmlspecialchars($friend['name']);?></p>
                        <input type="hidden" name="id-friend" value="<?php echo $friend['id'];?>">
                    </a>
                    </li>
                    <!---friend-->
                    <?php 
                    //end forech users
                    }
                    ?>
                </ul>
            <!---ul friend -->
                <?php
                // end if here users 
                }
                ?>
            </section>
        </div>
        <!---list your friends-END-->
    </div>
    <!---container-END-->
    <script src="./js/home.js"></script>
</body>
</html>