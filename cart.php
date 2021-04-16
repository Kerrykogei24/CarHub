<!DOCTYPE html>
<html>
    <?php require 'search_form.php'; ;
    if(!isset($_SESSION['email']))
        header('location:login.php');
    if(!empty($_GET['id'])){
        $user_id = $_SESSION['user_id'];
       
        $item_id = $_GET['id'];
        $result = mysqli_query($con,"SELECT * FROM users_items WHERE user_id='".$_SESSION['user_id']."' AND product_id='".$item_id."';");
        if(mysqli_num_rows($result)>0)
        {
            $row = mysqli_fetch_array($result);
            $row['quantity']=$row['quantity']+1;
            mysqli_query($con,"UPDATE users_items SET quantity ='".$row['quantity']."' WHERE user_id='$user_id' AND product_id='$item_id'") or die(mysqli_error($con));
        }
        else{
        mysqli_query($con,"INSERT INTO users_items (user_id, product_id, quantity) VALUES('$user_id','$item_id','1') ;") or die(mysqli_error($con));}
    }
        ?>
    <head>
    <?php
include 'include/common.php';

?>
        <title>CarHub</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        
    </head>
    <body>
    <?php include 'include/common.php'?>
        <?php 

        $i=1;
        $sum=0;
        $user_id = $_SESSION['user_id'];
        $query=mysqli_query($con,"SELECT * FROM users_items, products WHERE users_items.product_id=products.id AND users_items.user_id='$user_id' AND status = 'added to cart'; ") or die(mysqli_error($con));
        if(mysqli_num_rows($query)==0)
        {?>
        <div class="kip" style = " background-image:url(admin/Image/back2.jpeg);   background-repeat:no-repeat;
                background-size:cover; 
                height:100vh; 
                background-position:center; 
                background-attachment:fixed;">
        <div class="container-fluid">
            <div class="col-sm-offset-2 col-sm-8 verticalCenter">
            <br><br><br>
                <div class="jumbotron " >
                    <center>
                        <h3>CART EMPTY!</h3>
                        <p>Start Buying now! Amazing offers and deals are waiting for you.</p>
                        <a href="index.php"><button class="btn btn-danger">BUY NOW</button></a>
                        <p class="text-info">Go back to <a href="profile.php">profile</a></p>
                    </center>
                    
                </div>
            </div>
            </div>
        </div>
        <?php }
        else{ ?>
        <div class="kip" style = " background-image:url(admin/Image/back2.jpeg);   background-repeat:no-repeat;
                background-size:cover; 
                height:100vh; 
                background-position:center; 
                background-attachment:fixed;">
        <br><br><br><br><br><br><br><br><br><br><br>
        <div class="container" >
            
            <div class="col-md-8 col-md-offset-2">
                <table class=" table table-bordered table-responsive table-striped" >
                    <thead style="background-color:rgba(23,15,34,0.8); color:#fff;">
                        <tr >
                            <th  >   S.No   </th>
                            <th >   Item Name   </th>
                            <th  >   Price   </th>
                            <th  >   Quantity   </th>
                            <th >   Delete   </th>
                            <th  >   Confirm  </th>
                         
                        </tr>
                    </thead>
                    <tbody style="background-color:rgba(23,15,34,0.8);">
                        <?php while($row=mysqli_fetch_array($query)){ ?>
                        <tr>
                            <td scope="row"><?php echo $i ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                           <?php echo "<td><a href='cart-remove.php?id=".$row['product_id']."' class='remove-item-link btn btn-danger'>Remove</a></td>" ; ?>
                           <?php echo "<td><a href='cart-remove.php?id=".$row['product_id']."' class='remove-item-link btn btn-success'>Confirm</a></td>" ; ?>
                        </tr>
                        <?php
                        $sum=$sum+$row['price']*$row['quantity'];
                        $i=$i+1;
                        $id=$row['id']+",";
                        $id = rtrim($id,",");
                        } 
                        $_SESSION['item_id']=$id;
                        echo"<tr>
                            <td></td>
                            <td>Total Amount</td>
                            <td> $sum </td>
                            <td><form action='PaytmKit/pgRedirect.php' method='post'>
        
<!-- Please Enter ORDER_ID must required value -->
<input id='ORDER_ID' type='hidden' tabindex='1'  name='ORDER_ID'  value='ORDS" . rand(10000,99999999)."'>
<!-- CUST_ID Enter must-->
<input id='CUST_ID' type='hidden' tabindex='2' name='CUST_ID' value='CUST001'>
<!-- simple INDUSTRY_TYPE_ID enter with autocomplete-->
<input id='INDUSTRY_TYPE_ID' type='hidden' tabindex='4' name='INDUSTRY_TYPE_ID' value='Retail'>
<!-- Enter your channel Id here-->
<input id='CHANNEL_ID' type='hidden' tabindex='4' name='CHANNEL_ID' value='WEB'>
<!-- simple TXN_AMOUNT value Enter -->
<input title='TXN_AMOUNT' type='hidden' tabindex='10' name='TXN_AMOUNT' value='".$sum."'>
<input value='BUY NOW' type='submit' class='btn btn-primary'>
    </form> </td>
                        </tr> ";
                        
                            if(isset($_GET['error']))
                                echo htmlspecialchars($_GET['error']); ?>
                    </tbody>
                    <?php 
                        
                       $_COOKIE["id"]=$id;
                       echo "cookie with value ".$_COOKIE["id"];
                    ?>
                </table>
            </div>
            
        </div> 
    </div>
         <?php              
        }
        ?>
          
    </body>
    <style>
    .kip{
        background-image:url(admin/Image/back2.jpeg); 
                background-repeat:no-repeat;
                background-size:cover; 
                height:100vh; 
                background-position:center; 
                background-attachment:fixed;
    }
    .jumbotron{

        background:rgba(23,15,34,0.8);
        color:#fff;
    }
    </style>
</html>