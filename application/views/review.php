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
        /*for rating*/
        .highlight {
            color: orange;
        }
        a.link-color {

            color: #6c757d;
        }                
        .checked {
            color: orange;
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
        <!-- review section-->        
        <div class="container bg-light">
           <div class="mx-auto p-3 w-75 h-100">
                <h5 class="mb-5">Submit your Review</h5> 
                <div class="d-flex form-group">
                    <img src="https://s3-ap-southeast-1.amazonaws.com/tv-prod/member/photo/1058653-medium130ap.jpg" alt="profile pic" class="rounded mr-2" style="width: 70px; height: 70px;">
                    <div>
                        <h6>Prabhat Singh</h6>
                        <span class="fa fa-map-marker text-secondary"> Sector 1 Greater Noida, Noida</span>
                    </div>
                </div>                
                <div class="form-group">
                    <p class="m-0">Your Rating<span class="text-danger ml-1">*</span></p>
                    <a class="link-color"><span class="fa fa-star"></span></a>
                    <a class="link-color"><span class="fa fa-star"></span></a>
                    <a class="link-color"><span class="fa fa-star"></span></a>
                    <a class="link-color"><span class="fa fa-star"></span></a>
                    <a class="link-color"><span class="fa fa-star"></span></a>
                </div>
                <!-- script for rating star-->
                <script>
                    
                    var stars = document.getElementClassName("fa-star");                                        

                    stars.addEventListener("click", checkStar);
                    function checkStar() {

                        for(i=0; i<stars.length; i++) {

                            stars[i].classList.add("checked");
                        }
                    }
                </script>
                <!--end script for rating star-->
                <form action="#" class="needs-validation">
                    <div class="form-group">
                        <label for="category">Category<span class="text-danger ml-1">*</span></label>                                               
                        <select name="category" class="form-control" required>
                            <option value="" selected disabled>Please Select</option>
                            <optgroup label="Category">        
                                <option value="BTech Tuition" style="padding-left: 10px;">BTech Tuition</option>                                
                                <option value="Java Training Classes" style="padding-left: 10px;">Java Training Classes"</option>                                
                                <option value=".Net Training" style="padding-left: 10px;">.Net Training</option>                                
                                <option value="Angular.JS Training" style="padding-left: 10px;">Angular.JS Training</option>                                
                                <option value="PHP Classes" style="padding-left: 10px;">PHP Classes</option>                                
                                <option value="Mobile App Development Training" style="padding-left: 10px;">Mobile App Development Training</option>                                
                                <option value="SQL Server Training" style="padding-left: 10px;">SQL Server Training</option>                                
                                <option value="Web Development Classes" style="padding-left: 10px;">Web Development Classes</option>                                
                                <option value="Python Training classes" style="padding-left: 10px;">Python Training classes</option>                                
                                <option value="C++ Language Classes" style="padding-left: 10px;">C++ Language Classes</option>                                
                            </optgroup>
                            <optgroup label="  Course/Workshop  ">				                   
				                   	 <option value="Web Development" style="padding: 10px;">"Web Development</option>				                   
				                   	 <option value="Advanced PHP Training" style="padding: 10px;">Advanced PHP Training</option>				                   
				                   	 <option value="ASP.NETs" style="padding: 10px;">ASP.NETs</option>				                   
				                   	 <option value="C# .NET" style="padding: 10px;">C# .NET</option>				                   
				                   	 <option value="Java Trainings" style="padding: 10px;">Java Trainings</option>				                   
				                   	 <option value="PHP" style="padding: 10px;">PHP</option>				                   
				                   	 <option value=".Net Training" style="padding: 10px;">.Net Training</option>				                   
				                   	 <option value="SQL Server" style="padding: 10px;">SQL Server</option>				                   
				                   	 <option value="Angular.JS" style="padding: 10px;">Angular.JS</option>				                   
			                  </optgroup>
                        </select>                        
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please select a option from the list.</div>
                    </div>
                    <div class="form-group">
                        <label for="experience" class="d-block"> Describe your experience<span class="text-danger ml-1">*</span><span class="text-secondary float-right">0 of minimum 100 characters</span></label>
                        <textarea name="experience" rows="10" placeholder="Your review should contain atleast 100 characters" class="form-control" required></textarea>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please describe your experience in atleast 100 words.</div>
                    </div>
                    <button type="submit" class="btn btn-primary form-group">Continue</button>
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
        <!-- end review section -->
        
    </body>
</html>