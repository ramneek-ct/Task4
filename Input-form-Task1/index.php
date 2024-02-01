<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Input Form </title>
        <link rel="stylesheet" href="assets/css/style.css">
        
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="assets/js/index.js"></script>
    </head>
    <body>
        <div class="main-container">
        <h4>Basic Information:</h4>
        <form method="post" action="#">
            <label for="firstname">Enter First Name:</label>
            <input type="text" id="firstname" name="firstname"><br><br>
            <label for="lastname">Enter Last Name:</label>
            <input type="text" id="lastname" name="lastname"><br><br>
            <label for="phone">Enter Mobile Number:</label>
            <input type="text" id="phone" name="phone"><br><br>
            <input type="submit" class="submit-button" value="Submit"> 
        </form>
        </div>
    
    </body>
</html>
