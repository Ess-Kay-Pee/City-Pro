<!DOCTYPE html>
<html>
    <head>
        <title>CityPro | login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap 4 -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
        <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>                      
        <!--FontAwesome icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
        .btn-back, .back {
            background: linear-gradient(97deg,#f5a623,#f76b1c);
        }
        .btn-back:hover {
            background: linear-gradient(97deg,#f76b1c,#f5a623);
        }       
        .login-card {                        
            position: absolute; 
            left: 50%; 
            top: 50%; 
            transform: translate(-50%, -40%);             
            width: 40%;
        }
        .disp {
            display: block;
        }
        .space {
            display: inline;
        }
        .align {
            float: right;
        }
        /*Social Icon*/
        .fa {
            padding: 20px;
            font-size: 30px;
            width: 70px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        .fa-google {
            background: #dd4b39;
            color: white;
        }

        .fa-linkedin {
            background: #007bb5;
            color: white;
        }
        @media screen and (max-width: 1024px) {
            .login-card {
                width: 80%;
            }
        }
        @media screen and (max-width: 450px) {
            .disp {
                display: none;
            }
            .space {
                display: block;
            }
            .align {                
                float: none;
            }            
            .fa {
                font-size: 20px;
                width: 55px;
            }
        }   
        @media screen and (max-width: 320px) {
            .login-card {                
                transform: translate(-50%, -30%);
            }
        }     
    </style>
    <body class="back">
        <!--facebook javascript SDK-->
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0"></script>
        <!--/facebook javascript SDK-->
        <!--navigation bar BEGIN-->  
        <nav class="navbar navbar-expand-md bg-light navbar-white fixed-top">
            <a href="<?php echo base_url();?>index.php/home" class="navbar-brand" style="display:flex; flex-direction: row;">
                <div>
                    <img src="<?php echo base_url();?>images/logo.png" alt="Logo" style="height: 50px;" class="mr-2">    
                </div>
                <div>
                    <h4 class="mb-0">CityPro</h4>                
                    <h6><small class="text-black-50">Discover|Learn|Grow</small></h6>
                </div>                
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" onclick="toggleMenu();">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?php echo base_url();?>index.php/home/learning" class="nav-link btn btn-back text-light">Post Your learning needs</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url();?>index.php/home/login" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url();?>index.php/home/signup" class="nav-link">Sign up as a Tutor</a>
                    </li>
                </ul>
            </div>
        </nav><br><br><br>       
        <script>                        
            function toggleMenu() { 
                
                var menu = document.getElementById("menu");
                menu.classList.toggle("collapse");               
                menu.style.textAlign = "center";
            }
        </script> 
        <!--navigation bar END-->  
        <!--login card-->      
        <div class="container-fluid" style="postion: relative;">
            <div class= "card login-card">
                <div class="card-header bg-info">
                    <h4 class="text-light" style="text-align: center;">Login into your account</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-2" style="display: flex; justify-content: center;">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-linkedin"></a> 
                    </div>
                    <div class="row">
                        <div class="col-sm-5 disp"><hr></div>
                        <div class="col-sm-2 mb-2" style="text-align:center;">OR</div>
                        <div class="col-sm-5 disp"><hr></div>
                    </div>
                    <div>
                        <form action="#" class="needs-validation" novalidate>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter email" id="email" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Invalid.</div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Enter password" id="pwd" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Invalid.</div>
                            </div>
                            <div class="form-group form-check space">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember" required> Remember me
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                                </label>                                                            
                            </div>                                   
                            <a href="<?php echo base_url();?>index.php/home/forgot" class="align">Forgot Password?</a>
                            <center><button type="submit" class="btn btn-primary mb-2">Submit</button></center>
                            <center>
                                <span>
                                    New User ? <a href="<?php echo base_url();?>index.php/home/signupchoice">Sign Up Now ! </a>It's <span class="text-danger">FREE!</span>
                                </span>
                            </center>
                        </form>
                        <script>
                            // Disable form submissions if there are invalid fields
                            (function() {
                            'use strict';
                            window.addEventListener('load', function() {
                                // Get the forms we want to add validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                                });
                            }, false);
                            })();
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <!--/login card-->
    </body>
</html>