<!DOCTYPE html>
<html>
<head>
    
    <title>Feedback</title>

    <!--name:Mansour Ahmed Aldhahri
        ID:2036538
        SECTION: CS1
        
    -->
    <!--name:Musab Hassan Alsobhi
        ID:2035566
        SECTION: CS1
     
    -->

    
    <link rel="stylesheet" type="text/css" href="../CSS/global.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Feed.css">
    <script src="validation.js"></script>

</head>

<body>


<?php include '../includes/header.php'; ?>
<?php include '../includes/links.php'; ?>

    <h2>Feedback Form</h2>
    <p>Your feedback is important to us. Would you kindly offer your feedback below?</p>

    <form action="form.php" method="post">
        
        <fieldset id="info">
            
            <legend>Your Information</legend>

            <label class="first">First Name:<span>*</span></label>
            <input type="text" id="firstName" name="firstName">

            <label class="first">Last Name:<span>*</span></label>
            <input type="text" id="lastName" name="lastName">

            <label class="first">Email:<span>*</span></label>
            <input type="text" id="email" name= "email">

            <label class="first">Phone Number:<span>*</span></label>
            <input type="tel" id="phone" name="phone">
            
        </fieldset>

        
        <fieldset>
            
            <legend>Express your thoughts</legend>

            <label class="second">How satisfied are you with our service?</label>
            
            <div class="option-group">
            <label for="rate5">5- Very satisfied</label>
            <input type="radio" id="rating5" name="rating" value="5" checked>
            </div>

            <div class="option-group">
            <label for="rate4">4- Satisfied</label>
            <input type="radio" id="rating4" name="rating" value="4">
            </div>

            <div class="option-group">
            <label class="rate3">3- Normal</label>
            <input type="radio" id="rating3" name="rating" value="3">
            </div>
           
            <div class="option-group">
            <label class="rate2">2- Unsatisfied</label>
            <input type="radio" id="rating2" name="rating" value="2">
            </div>

            <div class="option-group">
            <label class="rate1">1- Very unsatisfied</label>
            <input type="radio" id="rating1" name="rating" value="1">
            </div>
            
            <label class="third">What did you like the most?</label>
            
            <div class="checkbox-group">
                <input type="checkbox" id="Content" name="Content" value="Content">
                <label for="Content">Content</label>
            </div>
            
            <div class="checkbox-group">
                <input type="checkbox" id="Design" name="Design" value="Design">
                <label for="Design">Design</label>
            </div>
            
            <div class="checkbox-group">
                <input type="checkbox" id="Performance" name="Performance" value="Performance">
                <label for="Performance">Performance</label>
            </div>
        

            <label class="third">What to do you think should we improve?</label>
            <select id="improvement" name="improvement">
                <option value="Perfect">All Perfect</option>
                <option value="Buying">Buying Tickets</option>
                <option value="Navigation">Navigation</option>
                <option value="Get_more_events">Get More Events</option>
                <option value="Other">Other</option>
            </select>

            <label class="third">Comments:</label>
            <textarea id="comments" name="comments" rows="4"></textarea>
        </fieldset>

        
        
        <input type="submit" value="Submit">
    </form>
    
</body>


<?php include '../includes/footer.php'; ?>
</html>