<!DOCTYPE html>
<html>
    <head>
        <title>detailed product table</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>        
        <meta charset="UTF-8">
        <meta http-equi="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="e.css" rel="stylesheet" type="text/css">
    </head>
<body>

   <?php include 'connect.php';
   $query = "SELECT * FROM boxd";
   $result=mysqli_query($mysqli,$query);

   ?>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>image</th>
                      <th>Title</th>
                      <th>Category</th>
                      <th>Sub_category</th>
                      <th>Price</th>
                      <th>Date Time</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    <?php 
                    $i=1;
                      foreach ($result as $row) {
                    
                    
                        echo '<tr>';
                        echo  '<td><p><b>'.$i.'</b></p></td>'; 
                        echo  '<td><img src="upload/'.$row["image"].'" height="80px"></td>';
                        echo  '<td><h4>'.$row["title"].'</h4></td>';
                        echo  '<td><p>'.$row["category"].'</p></td>';
                        echo  '<td><p>'.$row["sub_category"].'</p></td>';
                        echo  '<td><p>'.$row["price"].'</p></td>';
                        echo  '<td><p>'.$row["datetime"].'</p></td>'; 
                        echo '<td>';

                        

                      if($row["status"] == 1){
                        echo "Publish";

                      }else if($row["status"] == 0){
                        echo "Unpublish";
                      }

                      echo '</td>';

                      echo '<td>';

                        
                        if($row["status"] == 1){
                          echo '<a href="update_blog.php?status=1&id='.$row["id"].'">
                          <button class="btn btn-warning">Unpublish</button></a>';
                        }else if($row["status"] == 0){
                          echo '<a href="update_blog.php?status=0&id='.$row["id"].'">
                           <button class="btn btn-success">Publish</button></a>';
                        }
                          echo'<a href="delete_blog.php?id='.$row["id"].'">
                          <button class="btn btn-danger">Delete</button></a>';
                          echo '</td>';
                          echo '</tr>';
                          $i++;
                    }
                    ?>

                  </thead>
                </table>





  <script src="e.js" type="text/javascript"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>