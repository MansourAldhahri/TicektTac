<!DOCTYPE html>
<html>

<head>
    <title>Sell your event</title>
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
    <p>Sell your event</p>
    <p><i>Enter your information and we will contact with you later</i></p>

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
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone">
        </div>
        <div class="box">
            <label for="Company">Company:</label>
            <input type="text" id="Company" name="Company">
        </div>
        <div class="box">
            <label for="Subject">Subject:</label>
            <input type="text" id="Subject" name="Subject">
        </div>
        <div class="box">
            <label for="Message">Message:</label>
            <input type="text" id="Message" name="Message">
        </div>
        <div class="button">
            <p>Send</p>
        </div>
    </div>
</body>
<?php include '../includes/footer.php'; ?>
</html>