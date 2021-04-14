<!DOCTYPE html>
<html>
    <head>
        <title>CarHub</title>
    </head>
    <body>
        <?php 
        error_reporting(E_ALL);
        include 'search_form.php';
        $item_id = $_GET['id'];
        
        $query = "SELECT * FROM products WHERE id='$item_id';";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $row = mysqli_fetch_array($result);
        
        ?>
        <div class="container-fluid" style= "background-color:#C9E7E7; background-repeat:no-repeat;
                background-size:cover; 
                height:100vh; 
                background-position:center; 
                background-attachment:fixed;">
            <div class="col-sm-6">
                <div class="row">
                    <div class="thumbnail"><?php echo"<img src='admin/Image/".$row['image']."' class='img-thumbnail'  >"; ?> </div>
                        <div class="col-sm-6 text-center"><?php echo "<a href='cart.php?id=".$row['id']."'><input type='submit' value='Buy Now' class='btn btn-primary btn-block'/></a>"; ?></div>
                    
                    <!-- copied-->

    

                
               
            </div>
            </div>
            <div class="col-sm-offset-2 col-sm-4">
                <div class="row">
                <br><br><br><br>
                    <?php  echo "<h3>".$row['brand']." ".$row['name']."</h3>";
            
                           echo "<h4>Price Ksh : ".$row['price']." </h4>";
                    ?>
                  
                </div>
            </div>
        </div>
    </body>
</html>