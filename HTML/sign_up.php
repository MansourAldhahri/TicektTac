<!DOCTYPE html>
<html>

<head>
    <title>SignUp</title>
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
    <p>Sign up to and book your event</p>

    <div class="cover-page">
        <div class="box">
            <label for="Fullname">Fullname:</label>
            <input type="text" id="Fullname" name="Fullname">
        </div>
        <div class="box">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="box">
            <label for="pass">password:</label>
            <input type="password" id="pass" name="password">
        </div>
        <div class="box">
            <label for="pass">confirm password:</label>
            <input type="password" id="pass" name="password">
        </div>

        <div class="button">
            <p>create your account</p>
        </div>


    </div>
</body>
<?php include '../includes/footer.php'; ?>
</html>