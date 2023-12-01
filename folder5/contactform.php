<!DOCTYPE html>
    <html>
        <head>
            <title>Form Contact Us</title>
            <style>
                *{
                  margin:0px;
                  padding:0;
                  box-sizing: border-box;  
                }
                .logo p{
    font-size: 30px;
    font-weight: bold;
    float:left;
    color:white;
    letter-spacing: 1.5px;
    cursor: pointer;
    margin-left:20px;

}
nav{
    width: 100%;
    height: 75px;
    line-height: 75px;
    padding: 0px,100px;
    position: fixed;
    background-color: black;


}
nav ul{
    list-style: none;
    margin-left: 400px;
}
nav ul li{
    display: inline-flex;
    margin-left: 80px;
}
nav ul li a{
    text-decoration: none;
    font-size: 18px;
    padding: 0px, 30px;
    text-transform: uppercase;
    margin-left: 50px;
    color: white;
}
                ::placeholder {
                 color:black;
                 opacity: 1; 
                }
            .container{
                justify-content: center;
                display: flex;
                align-items: center;
                background-image:url('slider4.jpg');
                background-attachment:fixed;
                min-height: 100vh;
                background-size: cover;
                
            }
            .container form{
                width: 50%;
                border-radius: 15px;
                background:rgba(255,255,255,0.1);
                padding: 25px;
                 
            }
            .container form h1{
                color: white;
                text-align: center;
            }
            .container form input{
                width: 40%;
                height: 40px;
                outline:none;
                border: none;
                background: none;
                
                font-size: 15px;
                border-bottom: 1px solid #ffff;
                margin: 10px 30px;
            } 
            .container form textarea{
                width: 100%;
                border: none;
                outline: none;
                background: none;
                border-bottom: 2px solid #ffff;
                
            }
            .container form #button{
                border:none;
                border-radius:5px;
                background: white ;
                font-size: 15px;
                margin-top: 35px;
                margin-left: 200px;
            }

            .footer{
    
    width:100%;
    display: inline-flex;
    margin-top: 60px;
    background-color: #878787;
    padding:40px 0px 30px 0px;

}
.footer .foot-1{ 
     width:40%;
     
}

.footer .foot-1 img{
    width: 80%;
    padding-left: 40px; 
    padding-top: 40px;
}
.footer .foot-1 p{
    text-align: center;
}
.foot-2{
    width: 30%;
    padding-left: 100px;
    margin-top: 60px;
}
.foot-3{
    width: 30%;
    padding-left: 100px;
    margin-top: 60px;
    
 }
.copyright {
    background-color: #878787;
    line-height: 50px;
    text-align: center;
    
}
                
            
        </style>
        </head>
        <body>
            <nav>
                <div class="logo">
                    <p>Navbar</p>
                </div>
                <ul>
                    <li><a href="client.html">client</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="contact.html"> Contact</a></li>
                    <li><a href="service.html">Services</a> </li>
            
                </ul>
            </nav>
            <div class="container">
                <form action="validation.php" method="POST">
                <h1>Contact Us Form</h1>
                <input type="text" id="First Name" name="firstname" placeholder="First Name" required>
                <input type="text" id="Last Name" name="lastname" placeholder="Last Name" required>
                <input type="text" id="email" name="email"placeholder="Email" required>
                <input type="text" id="mobile" name="mobile"placeholder="Mobile" required>
                <h4>Type Your Here.....</h4>
                <textarea rows="3" name="comment" required></textarea>
                <input type="submit" name="submit" value="send" id="button">
           
        </form>
    </div>
    

</body>

</html>
        
    