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
            transform: translate(-50%, -25%);             
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
                transform: translate(-50%, -10%);
            }
        }     
        @media screen and (min-height: 1024px) {
            .login-card {
                transform:  translate(-50%, -50%);
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
            <div class= "card login-card mb-5">
                <div class="card-header bg-info">
                    <h4 class="text-light" style="text-align: center;">Sign Up as a Tutor</h4>
                </div>
                <div class="card-body">   
                    <ul class="nav nav-tabs nav-justified">
                        <li class="nav-item">
                            <a href="#trainer" class="nav-link active" id="tab1" onclick="toggleForm1()">I'm an Individual</a>
                        </li>
                        <li class="nav-item">
                            <a href="#institute" class="nav-link" id="tab2" onclick="toggleForm2()">I run an Institute</a>
                        </li>                       
                    </ul>                                     
                    <div class="tab-content">
                        <div class="tab-pane container active pt-3 pb-3 border border-top-0 rounded-bottom" id="trainer">
                            <form action="#" class="needs-validation" novalidate>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter your name" id="uname" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Invalid Name.</div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter your email" id="email" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Invalid Email.</div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">+91</span>
                                        </div>
                                        <input type="tel" class="form-control rounded-right" placeholder="Enter your phone number" id="phone-num" required pattern="[1-9]{1}[0-9]{9}">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Invalid Phone Number.</div>                                        
                                    </div>                                    
                                </div>                                                                   
                                <div class="form-group">                                                                        
                                    <input list="genders" class="form-control" placeholder="Select Gender" id="gender" required>
                                    <datalist id="genders">
                                        <option value="Male"></option>
                                        <option value="Female"></option>
                                    </datalist>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please select your gender.</div>                                       
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter one or more categories that you teach." id="topic" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill this field.</div>
                                </div>                                                           
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter pincode or Locality" id="pin" required>
                                    <div class="valid-feedback">Pincode/Locality matched.</div>
                                    <div class="invalid-feedback">Picode/Locality not found.</div>
                                </div>                                                           
                                <center><button type="submit" class="btn btn-primary">Sign Up</button></center>                           
                            </form>                            
                        </div>
                        <!--form for institute-->
                        <div class="tab-pane container pt-3 pb-3 border border-top-0 rounded-bottom" id="institute">
                            <form action="#" class="needs-validation" novalidate>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter your Institute's name" id="institute-name" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Invalid Institute Name.</div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Owner's name / Contact person name" id="uname" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Invalid Name.</div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter your email" id="email" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Invalid Email.</div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">+91</span>
                                        </div>
                                        <input type="tel" class="form-control rounded-right" placeholder="Enter your phone number" id="phone-num" required pattern="[1-9]{1}[0-9]{9}">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Invalid Phone Number.</div>                                        
                                    </div>                                    
                                </div>                                                                                                   
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter one or more categories that you teach." id="topic" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill this field.</div>
                                </div>                                                           
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter pincode or Locality" id="pin" required>
                                    <div class="valid-feedback">Pincode/Locality matched.</div>
                                    <div class="invalid-feedback">Picode/Locality not found.</div>
                                </div>                                                           
                                <center><button type="submit" class="btn btn-primary">Sign Up</button></center>                           
                            </form>                            
                        </div>
                    </div>
                    <script>

                        var tab1 = document.getElementById("tab1");
                        var tab2 = document.getElementById("tab2");
                        var trainer_form = document.getElementById("trainer");
                        var institute_form = document.getElementById("institute");

                        function toggleForm1() {

                            if(!tab1.classList.contains("active"))
                            {
                                tab1.classList.add("active");
                                tab2.classList.remove("active");
                                trainer_form.classList.add("active");
                                institute_form.classList.remove("active");
                            }
                        }

                        function toggleForm2() {

                            if(!tab2.classList.contains("active"))
                            {
                                tab1.classList.remove("active");
                                tab2.classList.add("active");
                                trainer_form.classList.remove("active");
                                institute_form.classList.add("active");
                            }
                        }
                    </script>
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
                    <div class="row mt-2">
                        <div class="col-sm-5 disp"><hr></div>
                        <div class="col-sm-2" style="text-align:center;">OR</div>
                        <div class="col-sm-5 disp"><hr></div>
                    </div>
                    <div class="mb-3">
                        <h6 style="text-align: center">Sign Up as:</h6>
                    </div>
                    <div class="row mb-2" style="display: flex; justify-content: center;">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-linkedin"></a> 
                    </div>
                </div>
            </div>
        </div>
        <!--/login card-->
    </body>
</html>