<!DOCTYPE html>
<html>

<head>
    <?php
include 'include\common.php';

?>
    <title>CarHub</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" type="text/css">

</head>

<body>
    <?php include 'search_form.php';?>
    <div class="home">
        <div class="container-fluid" style="">
            <div class="landing" style="text-align: center; ">
                <br><br><br><br> <br><br>
                <div class="jumbotron">
                    <h1 >Welcome to CarHub !</h1>
                    <p> We have the best car sale and offers, we have all in one place.</p>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container-fluid">
        <div class="about">


            <div class="row">
                <div class="col-md-6">
                    <div class="aboutp">


                        <h1 style="font-size:40px;" class="text-secondary">ABOUT US</h1>
                        <br>
                        <P>This a website dedicated to bringing the best services and best car deals in Kenya. We
                            provide both brand new and second-hand cars with all in good conditions. </P>
                        <br>

                    </div>
                </div>
                <div class="col-md-5">
                    <img src="admin/Image/abt.jpeg" alt="car" width="600px" ;>
                </div>

            </div>
        </div>
    </div>
    <!-- SALE BANNER -->
    <div class="container crf-cigar-banner">
        <div class="row">
            <div class="crf-cigar-banner--container d-flex justify-content-center align-items-center"><img
                    alt="Brown Boots" class="order-sm-0 order-md-0"
                    src="https://www.renderhub.com/nnavas3d/generic-hd-pickup-truck-15/generic-hd-pickup-truck-15-02.jpg"
                    width="500px">
                <div class="crf-cigar-banner--text order-sm-2 order-md-1">
                    <div class="text-light">Couples retreat weekend</div>
                    <div class="text-secondary">Save an extra 20%</div>
                    <div class="text-primary">We have the best offer!!!</div>
                </div><img alt="Grey Boots" class="order-sm-1 order-md-2"
                    src="https://cars.usnews.com/static/images/Auto/izmo/i78657/2016_toyota_corolla_angularfront.jpg"
                    width="500px">
            </div>
        </div>
    </div>

    <div class='container-fluid'>
        <br><br>
        <h1 class="text-center" class="text-secondary">PRODUCTS</h1>
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
        .home .jumbotron {
            margin-left: 150px;
            margin-right: 150px;
            background: rgba(23, 15, 34, 0.8);
            color:#fff;
       
   
        }
        .home .jumbotron p{
            color:#fff;
        }

        .aboutp {
            text-align: center;
            font-size: 30px;
            font-style: url(/include/fonts/glyphicons-halflings-regular.eot);
        }

        .aboutp p {
            font-size: 20px;
            line-height: 40px;
            color: black;
        }

        .home {
            background-image: url(admin/Image/back2.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            background-position: center;
            background-attachment: fixed;


        }

        h1 {
            color: #555;
            font-size: 30px;
        }

        /* FULL BANNER */
        .crf-full-banner {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .crf-full-banner .row {
            position: relative;
        }

        .crf-full-banner .row:before {
            content: "";
            position: absolute;
            border: 1px solid white;
            display: block;
            top: 30px;
            bottom: 30px;
            left: 50px;
            right: 50px;
            z-index: 1;
        }

        .crf-full-banner .crf-full-banner--image {
            flex: 0 0 58.333333%;
            background-image: url('https://www.pluralsight.com/content/dam/pluralsight2/teach/author-tools/carved-rock-fitness/img-vistas.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top center;
            min-height: 400px;
        }

        .crf-full-banner .crf-full-banner--text {
            flex: 0 0 41.666667%;
            background: #364147;
            text-transform: uppercase;
            padding: 30px;
            position: relative;
        }

        .crf-full-banner .crf-full-banner--text h4 {
            font-size: 40px;
            font-weight: 700;
            color: #637f94;
            font-style: italic;
            line-height: 1;
            margin: 0;
        }

        .crf-full-banner .crf-full-banner--text h4:after {
            content: "";
            width: 100px;
            height: 1px;
            background: #faa541;
            margin: 20px auto;
            display: block;
        }

        .crf-full-banner .crf-full-banner--text>div {
            color: white;
        }

        .crf-full-banner .crf-full-banner--text>div:nth-of-type(1) {
            font-size: 60px;
            font-weight: 700;
            line-height: 1;
        }

        .crf-full-banner .crf-full-banner--text>div:nth-of-type(2) {
            font-size: 25px;
            font-weight: 200;
            letter-spacing: 3px;
        }

        .crf-full-banner .crf-full-banner--text .btn.btn-default {
            text-transform: none;
            margin-top: 50px;
            text-transform: uppercase;
            letter-spacing: 1px;
            z-index: 1;
        }

        /* CIGAR BANNER */
        .crf-cigar-banner {
            margin-top: 55px;
            margin-bottom: 55px;
        }

        .crf-cigar-banner--container {
            width: 100%;
            border-top: 1px solid #a0a0a0;
            border-bottom: 1px solid #a0a0a0;
            padding: 25px 0;
            margin-left: 15px;
            margin-right: 15px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .crf-cigar-banner--container img {
            width: 250px;
        }

        .crf-cigar-banner--text>div {
            font-size: 30px;
            font-weight: 700;
            text-transform: uppercase;
            line-height: 1;
        }

        .crf-cigar-banner--text>div:last-child {
            font-size: 16px;
            font-weight: 400;
            margin-top: 5px;
        }
        </style>

        <?php } ?>





</body>

</html>