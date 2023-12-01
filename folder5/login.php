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
    <!-- <h2>Modal Login Form</h2> -->
    <!--Step 1 : Adding HTML-->
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
 
    <div id="id01" class="modal">
 
        <form class="modal-content animate" action="logind.php" method="POST">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <span><i class="fa-regular fa-user"></i> </span>
            </div>
            
            <div class="container">
            <!-- <form action="logind.php" method="POST"> -->
                <label><b>email</b></label>
                <input type="text" placeholder="Enter email" id="email" name="email" required><br><br>
 
                <label><b>Password</b></label>
                <input type="Password" placeholder="Enter Password" id="password"  name="password" required>
 
                <button type="submit" name="login">Login</button>
                <input type="checkbox" checked="checked"> Remember me
            <!-- </form> -->
            </div>
 
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
         </form> 
    </div>
 
    <script>
        var modal = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
<script src="e.js" type="text/javascript"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>