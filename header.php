<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width  initial-scale=1" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="front/css/all.css">
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/37ae0e907a.js" crossorigin="anonymous"></script>
    <title>test</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php"
                    style="color: purple; font-weight: bolder; font-size: 20px">Oneburner</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php">page one</a>

                                <!-- <div class="dropdown-divider"></div> -->
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="enterprise.php">Pricing <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pricing.php">Enterprise</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link disabled" href="enterprise.php">Support</a>
                        </li>

                    </ul>
                    <div class="form-inline my-2 my-lg-0 ">
                        <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" /> -->
                        <a class="nav-link disabled" href="#">Contact Sales</a>



                        <button class="btn btn-outline-success my-2 my-sm-0 btnbtn" type="submit">
                            Try For Free
                        </button>
                    </div>



                    <div class="col-md-2">

                        <button type="button" class="" data-toggle="modal" data-target="#exampleModal"
                            data-whatever="@getbootstrap" style="background-color:#F8F9FA; border:none;">login</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>oneburner</p>
                                            </div>
                                            <div class="col-md-8">


                                                <button class="btn btn-outline-success my-2 my-sm-0 btnb" type="submit"
                                                    style="font-size:10px !important; ">
                                                    Try For Free >
                                                </button>


                                            </div>
                                        </div>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3 style="text-align:center">Sign in</h3>
                                        <p style="text-align:center">Welcome Back</p>
                                        <form>
                                            <div class="form-group">
                                                <label for="email">Email address:</label>
                                                <input type="email" class="form-control" id="email" />
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Password:</label>
                                                <input type="email" class="form-control" id="email" placeholder="" />
                                            </div>
                                            <button type="submit" class="btn btn-default"
                                                style="width:40%; margin-left:10rem; margin-right:10rem; background-color:purple; border-radius:20px; color:white;">Log
                                                in
                                            </button>


                                        </form>
                                        <p style="align-items:center; margin-left:12rem;">Forgot
                                            Password</p>



                                        <div class="row pl-5 pr-5">
                                            <p class="pl-3 pr-2">Sign in here with:</p>
                                            <span class="pl-3 pr-2" style="border-radius:5px ; "> <i
                                                    class="fa fa-comment-alt " style="font-size: 30px;  "></i></span>
                                            <span class="pl-3 pr-2" style="border-radius:5px ; "> <i
                                                    class="fa fa-mail-bulk" style="font-size: 30px;  "></i></span>
                                            <span class="pl-3 pr-2" style="border-radius:5px ; "> <i
                                                    class="fa fa-phone-square-alt" style="font-size: 30px; "></i></span>

                                        </div>
                                    </div>
                                    <p class="pl-3 pr-2">&copy 2021 Oneburner.com. All Rights Reserverd.</p>

                                </div>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send message</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </div>
    </nav>
    </div>
    </div>