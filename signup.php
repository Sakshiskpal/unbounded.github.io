<?php
include_once 'php/signup.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>signup</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <h2><span class="bold">Un</span>bounded</h2>
            </div>
        </div>
        <div class="welcome">
            <span>Let's get started</span>
            <div class="underline"></div>
        </div>
        <div class="section">
            <div class="form form1">
                <form method="post" action="" class="labels">
                    <input type="text" placeholder="enter your name" name="name" required>
                    <input type="text" placeholder="Contact number" name="contact"required>
                    <input type="text" placeholder="City you live in" name="city" required>
                    <input type="password" placeholder="password" name="password" required>
                    <input type="submit" value="submit" class="btn" name="submit">
                    <p>Aready an account ? <a href="login.html">login here</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>