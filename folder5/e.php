<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>e-commerce website</title> 
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>        
        <meta charset="UTF-8">
        <meta http-equi="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="e.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
    
      

          <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="#">Beauty.G</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-1 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Homefeed</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>

                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="#">Beauty</a></li>
                      <li><a class="dropdown-item" href="#">Hair</a></li>
                      <li><a class="dropdown-item" href="#">Lifestyle</a></li>
                      <li><a class="dropdown-item" href="#">Skin</a></li>
                      <li><a class="dropdown-item" href="#">Men</a></li>
                      <li><a class="dropdown-item" href="#">Mens</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link labled" href="#" tabindex="-1" aria-labled="true">About us</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success me-3" href="signin.php" type="submit">Signin</button>  
                </form>
                <div class="cart">
                  <i class="fa-solid fa-cart-shopping"></i>
                </div>
              </div>
            </div>
          </nav>
           

          <div id="mySidepanel" class="sidepanel">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
      <a href="dashbord page.html">Dashbord</a>
        <a href="about.html">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="contact form.html">Contact</a>
      </div>
      <button class="openbtn" onclick="openNav()">☰</button>  
       
      
      
<!-- Example single danger button -->
<div class="btn-group">
  <type class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Lipstick
  
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
<!-- Example single danger button -->
<div class="btn-group">
  <type class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Eyeliner
  
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Eyeliner</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
<!-- Example single danger button -->
<div class="btn-group">
  <type class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Face Powder
  
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
<!-- Example single danger button -->

<div class="btn-group">
  <type class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Body Lotion
  
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
 
<div class="btn-group">
  <type class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Primer
  
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
          
<div class="btn-group">
  <type class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Foundation
  
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
          
<div class="btn-group">
  <type class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Face Cream
  
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
          
<div class="btn-group">
  <type class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Maskara
  
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
          

<div class="btn-group">
  <type class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    EyeShadow
  
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
          

<div class="btn-group">
  <type class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Lip liner
  
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>

 <div class="btn-group">
  <type class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Lip loss
  
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div> 
          
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="slider6.jpg" class="d-block w-100 slider-opacity" alt="...">
        <div class="carousel-caption">
          <h1><b>BEAUTY</b> <br> <br><b>PRODUCT'S</b></h1>
          <p>“Glowing skin is a result of proper skincare.<br> It means you can wear less makeup and let skin shine through.”</p> 
        </div>
      </div>

      <div class="carousel-item">
        <img src="slider13.webp" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="slider-bg.jpg" class="d-block w-100" alt="...">
      </div>
    
    <div class="carousel-item">
      <img src="slider4.jpg" class="d-block w-100" alt="...">
    </div>
  
  <div class="carousel-item">
    <img src="slider14.jpg" class="d-block w-100" alt="...">
  </div>
  </div> 
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden" z-index="1">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden" z-index="1">Next</span>
    </button>
  </div>

<section id="header">

<div class="col-md-3">
<div class="head-1">
<form>
    <input type="text" name="search" placeholder="Search..">
    <i class="fa-solid fa-magnifying-glass"></i>
    <input type="submit" value="Submit">
  </form>

  <?php include 'connect.php';
   $query = "SELECT * FROM category WHERE status = 1 order by id DESC";
   $result=mysqli_query($mysqli,$query);
   

  echo '<form>';
  echo '<span><input type="text" name="Categories" placeholder="Categories"></span>';  
  echo '</form>';
  echo  '<ul>';
   foreach ($result as $row) { ?>
    <?php
    echo '<li>'.$row["category"].'</li>';
    ?>
    
   <?php }?>
     </ul>
    
     <form>

<input type="text" name="Tags" placeholder="Tags"></span>
  </form>


  <div class="tag">
  <ul>
    <li>#Lipstick</li>
    <li>#cream</li>
    <li>#FacePowder</li>
    <li>#Eye linear</li>
    <li>#Maskara</li>
    <li>#Cream</li>
    <li>#Liploss</li>
    <li>#Moisturizer</li>
    <li>#Sunscreen</li>
    <li>#Liplinear</li>
    <li>#Skincare</li>
    <li>#Hairfall</li>
    <li>#Natural</li>
    <li>#Nailpaint</li>
    <li>#Food</li>
    <li>#Healthcare</li>
    <li>#Dryskin</li>
    <li>#Routine</li>
    <li>#Trend</li>
    <li>#Health</li>
    <li>#Longhair</li>
  </ul> 
</div> 
</div>
</div>
<!-- 
<div class="new_box">
   <div class="all_box">
    <div class="row ">
      <div class="col-md-3 col-sm-12">
        
           <img src="cream.jpg" alt="">
        
        <h4>Face Cream </h4>
        <p>Lady fashion 11pcs</p>
        <p>Make up kit</P>
        <p>price</p>
      </div>
    </div>
   </div>
</div> -->
<?php include 'connect.php';
   $query = "SELECT * FROM boxd WHERE status = 1 order by id DESC" ;
   $result=mysqli_query($mysqli,$query);

echo '<div class="container">';
echo '<div class="row">';
foreach ($result as $row) { ?>
 <div class="col-md-3 col-sm-12 mb-5">
   <div class="t_box border">

   <?php echo '<img src="upload/'.$row["image"].'"alt="" height="200px" width="200px">';?>

      <!-- <span><i class="fa-solid fa-star"></i>4.2 | 5ml</span> -->

      <?php echo '<h5>'.$row["title"].'</h5>';
            echo '<p>'.$row["category"].'</p>';
            echo '<p>'.$row["sub_category"].'</P>';
            echo '<p>Rs. '.$row["price"].'</p>';?>
      
        </div>
      </div>
      
<?php  
 }
 ?>
      </div>
      
      </div>
      
      
   
   
      
      
<script src="e.js" type="text/javascript"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>