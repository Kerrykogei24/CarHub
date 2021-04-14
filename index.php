<!DOCTYPE html>
<html>
    <head>
         <?php
include 'include\common.php';

?>
    <title>CarHub</title>



    </head>
    <body>
        <?php include 'search_form.php';?>
        <div class="home">
       <div class="container-fluid" style="">
            <div class="landing" style="text-align: center; ">
            <br><br><br><br> <br><br>
            <div class="jumbotron">
                <h1>Welcome to CarHub !</h1>
                <p> We have the best car sale and offers, we have all in one place.</p>
                </div>
            </div>
        </div></div>
        <br><br>
        <div class="container-fluid">
        <div class="about">
     

        <div class="row">
        <div class="col-md-6">
        <div class="aboutp">
       
        <div class="jumbotron">
        <h1 style="font-size:40px;" >ABOUT</h1>
       <br>
        <P>This a website that dedicated in bringing best services and best car deals in Kenya. We provide both brand new and second hand cars with all in good conditions. </P>
        <br>
        </div></div>
        </div>
        <div class="col-md-5">
        <img src="admin/Image/abt.jpeg" alt="car"  width="600px";>
        </div>

        </div>
        </div>
        </div>
        <div class='container-fluid'>
        <br><br>
        <h1 class="text-center">PRODUCTS</h1>
        <br>

            <?php      
                          
            require_once 'include/Check-if-added.php';  
    
        $query=mysqli_query($con, "SELECT * FROM products ; ") ;
        while ($row = mysqli_fetch_array($query)) { ?>
      
            <div class="col-sm-3">
    
                    <div class="thumbna">
                 
        <?php echo"<img src='admin/Image/".$row['image']."' class='img-thumbnail' >"; ?>
                        <div class="caption">
                            
                            <?php echo "<a href='product_detail.php?id=".$row['id']."'><h2>".$row['brand']." ".$row['name']."</h2></a>"; ?>
                            <p>Price: Ksh <?php echo $row['price'] ;  ?> </p>
                        </div>
                    </div>
                
     
            </div>
          
            <style>
            .home .jumbotron{
                margin-left:150px;
                margin-right:150px;
                background:rgba(23,15,34,0.8);
                color:#fff;
            }
            .aboutp{
                text-align:center;
                font-size: 30px;
                font-style:url(/include/fonts/glyphicons-halflings-regular.eot);
            }
            .aboutp p{
                font-size:20px;
                line-height:40px;
                color:black;
            }
            .home{
                background-image:url(admin/Image/back2.jpeg); 
                background-repeat:no-repeat;
                background-size:cover; 
                height:100vh; 
                background-position:center; 
                background-attachment:fixed;
  

            }
            h1{
                color:#555;
                font-size:30px;
            }
       
  

            </style>
         
                <?php } ?>


    </body>
   
</html>