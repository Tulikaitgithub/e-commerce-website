<!DOCTYPE html>
<html>
<head>
    <title>Dashbord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>        
        <meta charset="UTF-8">
        <meta http-equi="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="e.css" rel="stylesheet" type="text/css">
        
</head>
<body><nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="#">Beauty.G</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
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
                  <button class="btn btn-outline-success me-3" type="submit">Search</button>  
                </form>
                <div class="cart">
                  <i class="fa-solid fa-cart-shopping"></i>
                </div>
              </div>
            </div>
          </nav>
           
  
  
    <div id="mySidepanel" class="sidepanel">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
      <a href="dashbord page.html">Box data</a>
        <a href="about.html">Box form</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="contact form.html">Contact</a>
      </div>
      <button class="openbtn" onclick="openNav()">☰ Navbar</button>  
      

<form action="add-box-form.php" method="POST" enctype="multipart/form-data">

                
    <label for="image">image</label>
    <input type="file" class="form-control" id="image" name="image" accept="image/*">

    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" >
    
    
    <label for="pragraph">category</label>
    <input type="text" name="category" class="form-control" id="category" >
    
    <label for="pragraph">Sub-category</label>
    <input type="text" name="sub_category" class="form-control" id="sub_category" >
  
    <label for="pragraph">Price</label>
    <input type="text" name="price" class="form-control" id="price" >
    </div>



<br>

<label class="status">Status</label>
<select name="status">
<option value="1">Publish</option>
<option value="0">Unpublish</option>
</select>

<button type="submit" name="submit" class="btn btn-primary  ">Submit</button>
<button  class="btn btn-default" >Cancel</button>

</form>







  <script src="e.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</body>
</html>