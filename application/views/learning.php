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
                    <form action="<?php echo base_url();?>index.php/home/requestClass" method="post" onsubmit="return validate();" novalidate> 
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">  
                            <small class="text-danger invisible" id = "error_name"></small>                          
                        </div>
                        <div class="form-group">
                            <label for="phone">Mobile Number:</label>                            
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your mobile number" maxlength="10">                          
                            <small class="text-danger invisible" id = "error_phone"></small>                          
                        </div>
                        <div class="form-group">
                            <label for="email">Email Id:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">                              
                            <small class="text-danger invisible" id = "error_email"></small>                          
                        </div>
                        <div class="form-group">
                            <label for="topic">What do you want to learn?</label>
                            <input type="text" class="form-control" id="topic" name="topic" placeholder="What do you want to learn?">                              
                            <small class="text-danger invisible" id = "error_topic"></small>                          
                        </div>
                        <div class="form-group">
                            <label for="pincode">What's your location(pincode)?</label>
                            <input type="tel" class="form-control" id="pincode" name="pincode" placeholder="Enter your area's pincode" pattern="[0-9]{6}" maxlength="6">                           
                            <small class="text-danger invisible" id = "error_pincode"></small>                          
                        </div>
                        <div class="form-group">
                            <label for="classes">How would you like to attend your classes?</label>
                            <select class="form-control" id="classes" name="classes" required>
                                <option value="online" selected>I want live interactive online classes from Tutor</option>
                                <option value="my-home">Tutor should travel to my home</option>
                                <option value="tutor's-home">I can travel to tutor's home</option>
                            </select>                            
                        </div>
                        <div class="form-group">
                            <label for="class-time">When do you plan to start your classes?</label>
                            <select class="form-control" id="class-time" name="class-time" required>
                                <option value="immediately" selected>Immediately</option>
                                <option value="within-month">Within a month</option>
                                <option value="not-sure">Not sure just want to look at options</option>
                            </select>                           
                        </div>
                        <div class="form-group">
                            <label for="notes">Additional Notes(Optional):</label>
                            <textarea name="notes" id="notes" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group" style="text-align: center;">
                            <button type="submit" class="btn btn-primary btn-lg w-50">Submit</button>
                        </div>
                    </form>                         
                    <script>
                        var form = document.getElementsByTagName('form');
                        //input tags
                        var name = document.getElementById("name");
                        var phone = document.getElementById("phone");
                        var email = document.getElementById("email");
                        var topic = document.getElementById("topic");
                        var pincode = document.getElementById("pincode");
                        //values
                        var vname = name.value;
                        var vphone = phone.value;
                        var vemail = email.value;
                        var vtopic = topic.value;
                        var vpincode = pincode.value;
                        //errors
                        var ename = document.getElementById("error_name");
                        var ephone = document.getElementById("error_phone");
                        var eemail = document.getElementById("error_email");
                        var etopic = document.getElementById("error_topic");
                        var epincode = document.getElementById("error_pincode");                        

                        function validate() {                            
                            console.log(name);
                            console.log(vname);
                            //console.log(vname == '');
                            if(vname == undefined) {
                                console.log("I'm inside vname if block");
                                debugger;
                                /*name.classList.add("border border-danger");
                                ename.innerHTML = "Name cannnot be empty";
                                ename.classList.remove("invisible");
                                ename.classList.add("visible");*/
                                alert("Name field cannot be empty");
                                return false;
                            }
                            if(vphone == undefined) {

                                alert("Phone number cannot be empty");
                                return false;
                            }
                            if(vemail == undefined) {

                                alert("Email cannot be empty");
                                return false;
                            }
                            if(vtopic == undefined) {

                                alert("Please choose a topic");
                                return false;
                            }
                            else {
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