<div class="row">
            <div class="col-md-6">
                <div class="jumbotron">
                    <div class="well well-sm">
                        <form class="form-horizontal" method="post">
                            <fieldset>
                                <legend class="text-center header">Contact us</legend>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <textarea class="form-control" id="message" name="message" placeholder="Send your message to us. We will get back to you." rows="7"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>

                    <br>

                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="jumbotron">
                        <div class="panel panel-default">
                            <div class="text-center header">Our Office</div>
                            <div class="panel-body text-center">
                                <h4>Address</h4>
                                <div>
                                    Miotoni Rd, Karen <br /> Nairobi, Kenya <br /> +(254) 713669630
                                    <br />acaciaveterinaryclinic@gmail.com
                                    <br />
                                </div>
                                <hr />
                                <div> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10880.224249649205!2d36.702387184879335!3d-1.3062747550362468!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1bc21dee22bd%3A0x8088e90de4c2538f!2sAcacia%20Veterinary%20Clinic!5e0!3m2!1sen!2ske!4v1616063495909!5m2!1sen!2ske"
                                        width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy"><img src="images/logo/map.png" alt=""></iframe>
                                </div>

                                <!-- <div id="map1" class="map"> -->
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>




        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

        <script type="text/javascript">
            jQuery(function($) {
                function init_map1() {
                    var myLocation = new google.maps.LatLng(-1.310089, 36.7032881);
                    var mapOptions = {
                        center: myLocation,
                        zoom: 16
                    };
                    var marker = new google.maps.Marker({
                        position: myLocation,
                        title: "Property Location"
                    });
                    var map = new google.maps.Map(document.getElementById("map1"),
                        mapOptions);
                    marker.setMap(map);
                }
                init_map1();
            });
        </script>