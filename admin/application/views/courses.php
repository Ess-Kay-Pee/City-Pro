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
            <div class= "card w-50 mx-auto">
                <div class="card-header bg-info">
                    <h4 class="text-light" style="text-align: center;">What do you want to learn?</h4>
                </div>
                <div class="card-body">
                    <form action="#" onsubmit="validate(this)" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                            <div class="valid-feedback">Valid</div>
                            <div class="invalid-feedback">Invalid</div>
                        </div>
                        <div class="form-group">
                            <label for="courses">Courses</label>                            
                            <input type="text" class="form-control" id="courses" name="courses" placeholder="Choose your course" required>                                                                        
                        </div>                        
                    </form>                         
                    <script>
                        function validate(x) {
                            
                            var inp = x.getElementsByTagName("input");                            
                            x.classList.add("was-validated");
                            
                            for(i=0; i<inp.length; i++) {

                                if(!inp[i].checkValiidty()) {
                                    
                                    alert("validation failed false");
                                    returnToPreviousPage();
                                    return false;
                                }

                                alert("validations passed");
                                return true;
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
        <!--/login card-->
    </body>
</html>