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
        .center {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }               
        @media screen and (max-width: 500px) {
            
            .d-flex {
                display: block !important;
            }
            .border-right {
                border: none !important;
            }   
            .center {
                top: 15%;                                
                transform: translateX(-50%);
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
        </nav><br><br><br><br>       
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
            <div class= "card center d-inline mb-5">
                <div class="card-header bg-info">
                    <h4 class="text-light" style="text-align: center;">Whatare you looking for?</h4>
                </div>
                <div class="card-body d-flex">                    
                    <div class="col border-right border-dark mb-3">
                        <img src="https://c.urbanpro.com/assets/new-ui/signupTeach-4c4678f137ac940c5c7e4b911f10be9d.png" alt="teacher pic" style="width: 230px; height: 230px;" class="mb-3 d-block mx-auto">
                        <p class="text-secondary" style="text-align: center;">I am looking to teach</p>
                        <a href="<?php echo base_url();?>index.php/home/signup" class="btn btn-info d-block">Create Profile</a>
                    </div>                      
                    <div class="col">
                        <img src="https://c.urbanpro.com/assets/new-ui/signupLearn-d80e4d468b8467cb4a9f8a49cbf18268.png" alt="teacher pic" style="width: 230px; height: 230px;" class="mb-3 d-block mx-auto">
                        <p class="text-secondary" style="text-align: center;">I am looking to teach</p>
                        <a href="<?php echo base_url();?>index.php/home/learning" class="btn btn-info d-block">Create Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <!--/login card-->
    </body>
</html>