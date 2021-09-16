<?php 
session_start();
if($_SESSION['id']){
    header("location: home");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <title>signup</title>
</head>
<body>
    <form class="form  signup" >
        <!---header-->
        <header>
            <video src="src/background1.mp4" muted loop autoplay></video>
            <div class="text-box">
                <p>Chat app</p>
                <p>Sign Up</p>
            </div>
        </header>
        <!---header END-->
        <!--full name-->
        <div class="input">
            <input type="text" class="input-field" name="name" required/>
            <label class="input-label">Full Name</label>
        </div>
        <!--full name-END--->
        <!--username-->
        <div class="input">
            <input type="text" class="input-field" name="username" required/>
            <label class="input-label">User Name</label>
        </div>
        <!--username-END--->
        <!--password-->
        <div class="input">
            <input type="text" class="input-field" name="password"  required/>
            <label class="input-label">Password</label>
        </div>
        <!--password-END--->
        <!---image input-->
        <div class="input">
        <input type="file" name="image" id="" class="custom-file-input">
        </div>
        <!---image input-END-->
        <!---action-->
        <div class="action">
            <button class="action-button">Sign Up</button>
        </div>
        <!---action-END-->
        </form>
        <script src="./js/signup.js"></script>
</body>
</html>