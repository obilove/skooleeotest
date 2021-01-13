<?php
include_once("header.php");
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 ">
            <form class="mr-5 ml-5 pt-3 pr-5 pl-5 pb-5" style="box-shadow:2px 4px 2px 4px rgba(0,0,0,0.18)">

                <div class="form-group mt-5">
                    <label for="firstname">First Name:</label>
                    <label for="email" style="padding-left:6rem">Last Name:</label>
                    <div style="display:flex">
                        <input type="text" class="form-control mr-3" id="email" style="width:50%;" />

                        <input type="text" class="form-control" id="email" style="width:50%;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" />
                </div>
                <div class="form-group">
                    <label for="email">Phone Number:</label>
                    <input type="email" class="form-control" id="email" placeholder="+234" />
                </div>

                <div class="form-group">
                    <label for="email">Product of Interest:</label>
                    <select class="form-control">
                        <option>select option</option>
                    </select>
                </div>

                <div class="form-group ">
                    <label for="firstname">Company Name:</label>
                    <label for="email" style="padding-left:4rem">Company Size:</label>
                    <div style="display:flex">
                        <input type="text" class="form-control mr-3" id="email" style="width:50%;" />
                        <div style="width:50%;">
                            <select class="form-control mr-5">
                                <option>select option</option>
                            </select>
                        </div>


                    </div>
                </div>

                <div class="form-group mt-2">
                    <label for="exampleFormControlTextarea1">How can our expert help you</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>




                <!-- <div class=" form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" />
                </div> -->

                <button type="submit" class="btn btn-default"
                    style="width:100%; background-color:purple; border-radius:20px; color:white;">Contact Us</button>
            </form>
            <div>
            </div>
        </div>


        <div class="col-md-6 pt-5  pl-5">

            <h3>Request a call from an expert</h3>
            <p>Welcome to the official website of Organization of Women in International Trade</p>
            <h3>Our officers around Africa</h3>
            <div class="row pt-4">
                <div class="col-md-4 ">
                    <h5>Nigeria</h5>
                    <p>No 1b Community Road
                        off Allen Avenue,
                        Lagos State</p>
                    <p>08093487813</p>
                </div>
                <div class="col-md-4">
                    <h5>Ghanna</h5>
                    <p>No 19b Community
                        off Allen Avenue,
                        Lagos State</p>
                    <p>08093487813</p>
                </div>
                <div class="col-md-4">
                    <h5>South Africa</h5>
                    <p>No 29b Community Road
                        off Allen Avenue,
                        Lagos State</p>
                    <p>08093487813</p>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-md-4 ">
                    <h5>Egypt</h5>
                    <p>No 1b Community Road
                        off Allen Avenue,
                        Lagos State</p>
                    <p>08093487813</p>
                </div>
                <div class="col-md-4">
                    <h5>Kenya</h5>
                    <p>No 19b Community
                        off Allen Avenue,
                        Lagos State</p>
                    <p>08093487813</p>
                </div>
                <div class="col-md-4">
                    <h5>Tunisha</h5>
                    <p>No 29b Community Road
                        off Allen Avenue, Ikeja,
                        Lagos State</p>
                    <p>08093487813</p>
                </div>
            </div>



            <div class="row pt-4">
                <div class="col-md-4">
                    <h5>Mali</h5>
                    <p>No 1b Community Road
                        off Allen Avenue,
                        Lagos State</p>
                    <p>08093487813</p>
                </div>
                <div class="col-md-4">
                    <h5>Tanzania</h5>
                    <p>No 19b Community
                        off Allen Avenue,
                        Lagos State</p>
                    <p>08093487813</p>
                </div>
                <div class="col-md-4">
                    <h5>Togo</h5>
                    <p>No 29b Community Road
                        off Allen Avenue, Ikeja,
                        Lagos State</p>
                    <p>08093487813</p>
                </div>
            </div>


        </div>
    </div>


    <?php 
include_once("footer.php");
?>