<!DOCTYPE html>
<html>
    <head>
        <title>CityPro | Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap 4 -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
        <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>                            
        <!--FontAwesome icons-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
    <style>
        .btn-back, .back {
            background: linear-gradient(97deg,#f5a623,#f76b1c);
        }
        .btn-back:hover {
            background: linear-gradient(97deg,#f76b1c,#f5a623);
        }
        .back-img {            
            background-image: url("<?php echo base_url()?>images/index-back.jpg");            
            background-size: cover;            
            background-repeat: no-repeat;            
            height: 490px;    
            padding-bottom: 30px;
            position: relative;
            padding: 0;
        }       
        .inp-len {
            width: 70%;            
        }       
        @media screen and (max-width: 450px) {

            .inp-len {
                width: 100%;
            }
        }
    </style>
    <body class="back">        
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
        <!--find section-->        
        <div class="container-fluid back-img">
            <div style="postion: absolute; background-color: rgba(0,0,0,0.6); widtn: 100%; height: 100%;"></div>  
            <div class="container" style="position: absolute; top: 35%;">
                <h2 class="text-white">Find Tutors, Trainers & Institutes near you or Online</h2>
                <form action="#" class="mb-3">
                    <div class="form-group">
                        <div class="input-group inp-len">
                            <input type="text" class="form-control form-control-lg" placeholder="Enter categories e.g. Maths, Java, French" required>                            
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-lg" type="submit">Find <span class="fas fa-arrow-right"></span></button>
                            </div>                        
                        </div>                        
                    </div>
                </form>
                <h4 class="text-white">6.5 Lakh+ Verified Tutors & Institutes | 25 Lakh+ Students | 1 Lakh+ Reviews</h4>
            </div>      
        </div>
        <!--/find section-->
    </body>
</html>