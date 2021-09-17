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
                <img src="../src/3PWMlhY.jpg" alt="">
                <!---img END-->
                <!---name your friend-->
                <p>Abbas alkaabi</p>
                <!---name your friend-END-->
            </header>
            <!--header- END-->
            <!--
                section
                show messenger
                --->
            <section>
            <p class="friend">hi</p>
            <p class="you">how are you</p>
            </section>
            <!---section END-->
            <!--footer--->
            <footer>
                <!---form-->
                <form class="chat-form">
                    <!---input send-->
                    <div class="input">
                        <textarea name="context"  class="context" ></textarea>
                    </div>
                    <!---input send-END-->
                    <button class="send"><img src="../src/icons8-send-64.png" alt="send"></button>
                    <input type="hidden" name="id-friend" value="<?php echo $_GET['id'];?>">
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