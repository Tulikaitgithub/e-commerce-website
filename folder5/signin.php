<!DOCTYPE html>
<html>
    <head>
        <title>login form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>        
        <meta charset="UTF-8">
        <meta http-equi="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="e.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div class="container">
            <form action="sign.php" method="POST" >

            <label for="fname"><b>First name:</b></label>
        
            
            <input type="text" id="fname" name="firstname" placeholder="Your first name.."><br><br><br>

            <label for="lname"><b>Last Name:</b></label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br><br><br>
            <label for="email"><b>Email:</b></label>
            <input type="text" placeholder="Enter Email....." name="email" id="email" ><br><br><br>
            <label for="mobile no."><b>Mobile no.:</b></label>
            <input type="text" name="mobileno" placeholder="Enter mobile no....."><br><br><br>
            <label for="country"><b>Country:</b></label>
            <select id="country" name="country"><br><br>
            <option value="australia">Australia</option>
            <option value="india">India</option>
            <option value="usa">USA</option>
            </select><br><br><br>
            <label for="psw-repeat"><b>Password:</b></label>
            <input type="password" placeholder="Password" name="password" required><br><br><br>
            <div class="sub">
            <input type="submit" name="submit" value="submit">
            </div>
            </form>
            </div>
            
            <script src="e.js" type="text/javascript"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>