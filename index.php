<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eShop</title>
    <link rel="stylesheet" href="bootstrap.css"/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="icon" href="resource/logo.svg"/>
</head>
<body class="main-body">
    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-center">

        <!--header-->

        <div class="col-12">
            <div class="row">
                <div class="col-12 logo "></div>
                <div class="col-12 ">
                    <p class="text-center title1 ">Hi Welcome to eShop</p>
                </div>
            </div>
        </div>

        <!--header end-->

        <!--content-->
        
        <div class="col-12 p-3 ">
            <div class="row">
                <div class="col-6 d-none d-lg-block background"></div>
                <div class="col-12 col-lg-6" id="signUpBox">
                    <div class="row g-2">
                        <div class="col-12 ">
                            <P class="title2">Create New Account</P>
                        </div>
                        <div class="col-6 ">
                            <label class="form-label ">First Name</label>
                            <input type="text" class="form-control "/>
                        </div>
                        <div class="col-6 ">
                            <label class="form-label ">Last Name</label>
                            <input type="text" class="form-control "/>
                        </div>
                        <div class="col-12 ">
                            <label class="form-label ">Email</label>
                            <input type="email" class="form-control "/>
                        </div>
                        <div class="col-12 ">
                            <label class="form-label ">Password</label>
                            <input type="password" class="form-control "/>
                        </div>
                        <div class="col-6 ">
                            <label class="form-label ">Mobile</label>
                            <input type="text" class="form-control "/>
                        </div>
                        <div class="col-6 ">
                            <label class="form-label ">Gender</label>
                            <select class="form-select ">
                                <?php

                                    require "connection.php";

                                $rs = Database::search("SELECT * FROM `gender`");
                                $n = $rs->num_rows;

                                for($x=0; $x<$n; $x++){
                                    $d = $rs->fetch_assoc();

                                    ?>

                                    <option value="<?php echo $d["id"]; ?>"><?php echo $d["gender_name"]; ?></option>

                                    <?php


                                }

                                ?>    
                            </select>
                        </div>
                        <div class="col-12 col-lg-6 d-grid">
                            <button class="btn btn-primary ">Sign Up</button>
                        </div>
                        <div class="col-12 col-lg-6 d-grid">
                            <button class="btn btn-dark " onclick="changeView();">Already Have an account? Sign In here</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-none" id="signInBox">
                    <div class="row g-2">
                        <div class="col-12">
                            <p class="title2">Sign In</p>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-6 text-end">
                            <a href="#" class="link-primary">Forgot Password</a>
                        </div>
                        <div class="col-12 col-lg-6 d-grid">
                            <button class="btn btn-primary">Sign In</button>
                        </div>
                        <div class="col-12 col-lg-6 d-grid">
                            <button class="btn btn-danger" onclick="changeView();">New to eShop? Join now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--content end-->    
        
        <!--footer-->

        <div class="col-12 fixed-bottom d-none d-lg-block">
            <p class="text-center">&copy; 2023 eShop.lk | All Right Reserved</p>
        </div>

        <!--footer end-->

        </div>

    </div>

    <script src="script.js"></script>
</body>
</html>