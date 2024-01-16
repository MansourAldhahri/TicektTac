<!DOCTYPE html>
<html>

<head>
    <title>Support</title>

    <link rel="stylesheet" type="text/css" href="../CSS/global.css">
</head>

<body>
<?php include '../includes/header.php'; ?>
<?php include '../includes/links.php'; ?>
    <p>Here we are to help you</p>
    <p><i>We will catch you soon!</i></p>
    <div class="cover-page">
        <div class="box">
            <label for="Fullname">Fullname:</label><!--label for hold the name-->
            <input type="text" id="Fullname" name="Fullname"><!--input to make a user enter answer-->
        </div>
        <div class="box">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="box">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone">
        </div>

        <div class="box">
            <label for="Message">describe your problem:</label>
            <input type="text" id="Message" name="Message">
        </div>
        <div class="button">
            <p>Send</p>
        </div>

    </div>

</body>
<?php include '../includes/footer.php'; ?>

</html>
