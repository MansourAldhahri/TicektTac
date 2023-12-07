<!DOCTYPE html>
<html>

<head>
    <title>SignIn</title>
        <!--name:Mansour Ahmed Aldhahri
        ID:2036538
        SECTION: CS1
        
    -->
    <!--name:Musab Hassan Alsobhi
        ID:2035566
        SECTION: CS1
       
    -->

    
    <link rel="stylesheet" type="text/css" href="../CSS/global.css">
</head>

<body>
<?php include '../includes/header.php'; ?>
<?php include '../includes/links.php'; ?>
    <p><b><i>Here we are!</i></b></p>
    <p>Sign in to continue to book your event</p>

    <div class="cover-page">

        <div class="box">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="box">
            <label for="pass">password:</label>
            <input type="password" id="pass" name="password">
        </div>

        <div class="button">
            <p>Send</p>
        </div>
        <p>You havn't account yet?</p>
        <div class="buttonb">
            <a href="sign_up.php">
                <p>Sign up</p>
            </a>
        </div>

    </div>
</body>
<?php include '../includes/footer.php'; ?>
</html>