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
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-4">
                <br><br><br><br>

                <div class="thumbnail"><?php echo"<img src='admin/Image/".$row['image']."' class='img-thumbnail'  >"; ?>
                </div>
                <?php  echo "<h3>".$row['brand']." ".$row['name']."</h3>";
            
            echo "<h4>Price Ksh : ".$row['price']." </h4>";
     ?>
                <div class="col-sm-6 text-center">
                    <?php echo "<a href='cart.php?id=".$row['id']."'><input type='submit' value='Buy Now' class='btn btn-primary btn-block'/></a>"; ?>
                </div>

                <!-- copied-->


            </div>

            <div class=" col-md-8">
                <h1 class='text-center' style="color:blue;">DESCRIPTIONS</h1>
                <p style=color:black;font-size:20px;">The 2021 RS5 coupe is refreshed in several ways. Its front end now
                    wears a flatter and wider grille that sit below new slits that recall the classic Audi Sport
                    Quattro. It also has wider wheel arches, new accents on the rear diffuser, and larger exhaust pipes.
                    Last year's infotainment system, which featured an 8.3-inch center display and a rotary controller
                    on the center console, has been replaced with a 10.1-inch touchscreen mounted high in the middle of
                    the dash</p>

                <div class="row" style=" padding-top:20px;">

                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">

                            <img class="card-img-top"
                                src="https://i.pinimg.com/originals/4e/f6/eb/4ef6eb5d48754bfc360e15807d395a4e.jpg"
                                alt="">
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.pinimg.com/originals/9d/76/88/9d76880f3408e98e85575a93d3d434b0.jpg"
                                alt="">
                        </div>
                    </div>
                    <br>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.pinimg.com/originals/4e/f6/eb/4ef6eb5d48754bfc360e15807d395a4e.jpg"
                                alt="">
                        </div>
                    </div>
                    <br>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.pinimg.com/originals/40/25/a6/4025a6a7fa4e2edbdbf448c09fb9ccdd.jpg"
                                alt="">
                        </div>
                    </div>
                    <br>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.redd.it/4fb471ois5o11.jpg" alt="">
                        </div>
                    </div>
                    <br>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.autoguide.com/blog/wp-content/uploads/2018/07/2018-Audi-RS5-review-photo-Benjamin-Hunting-AutoGuide00081.jpg"
                                alt="">
                        </div>
                    </div>

                </div>





            </div>
        </div>
</body>

</html>