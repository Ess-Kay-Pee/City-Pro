<!DOCTYPE html>
<html>
    <head>
        <title>CityPro | login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap 4 -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
        <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>                      
        <!-- ICONS -->
        <!--FontAwesome icons-->        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
        <!-- Google icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- ICONS END -->
    </head>
    <style>
       .back {
            background: linear-gradient(97deg,#f5a623,#f76b1c);
        }       
        .nav-hlink {
            color: rgba(0,0,0,0.8) !important;
        }        
        .nav-content {
            padding: 5px 12px;
        }
        .nav-content:hover, .nav-active{
            background: whitesmoke;
            border-left: 8px solid cyan;
        }     
        .fa {
            margin-right: 12px;
            font-weight: bold;
            font-size: 24px;
        }                        
    </style>
    <body class="back">        
        <!--navigation bar BEGIN-->  
        <nav class="navbar navbar-expand-md bg-light navbar-white fixed-top">
            <a href="<?php echo base_url();?>index.php/home/dashboard" class="navbar-brand" style="display:flex; flex-direction: row;">
                <div>
                    <img src="<?php echo base_url();?>images/logo.png" alt="Logo" style="height: 50px;" class="mr-2">    
                </div>
                <div>
                    <h4 class="mb-0">CityPro</h4>                
                    <h6><small class="text-black-50">Discover|Learn|Grow</small></h6>
                </div>                
            </a>            
        </nav><br><br><br><br>             
        <!--navigation bar END-->    
        <div class="container d-flex">
            <div class="col-md-3">
                <div class="container bg-white" style="height: 600px;">
                    <div class="row border-bottom d-flex p-3">
                        <img src="https://c.urbanpro.com/assets/new-ui/provider-male-100X100-9559486a69ed6322fbd0b960cc0129e2.png" alt="profile pic" style="width: 70px; height: 70px;" class="mr-3 border rounded">
                        <div>
                            <h6>Sandal Patel</h6>
                        </div>
                    </div>
                    <div class="row">
                        <ul class="nav flex-column w-100">
                            <li class="nav-item nav-content nav-active" onclick="toggleShow(this)">
                                <a href="javascript:void(0);" class="nav-link nav-hlink"><span class="fa fa-newspaper-o align-top"></span>Dashboard</a>
                            </li>
                            <li class="nav-item nav-content" onclick="toggleShow(this)">
                                <a href="javascript:void(0);" class="nav-link nav-hlink"><span class="fa fa-id-card-o align-top"></span>Profile</a>                                
                            </li>
                            <li class="nav-item nav-content">
                                <a href="<?php echo base_url();?>index.php/home" class="nav-link nav-hlink"><span class="fa fa-unlock align-top"></span>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 tab-content bg-white p-4">   
                <!--dashboard section-->         
                <div class="tab-pane active" id="dashboard">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="nav-item bg-light">
                            <a href="javascript:void(0);" class="nav-link active" onclick="toggleTabs(this)">Enquiries</a>
                        </li>
                        <li class="nav-item bg-light" onclick="toggleTabs(this)">
                            <a href="javascript:void(0);"  class="nav-link" onclick="toggleTabs(this)">Students</a>
                        </li>
                        <li class="nav-item bg-light" onclick="toggleTabs(this)">
                            <a href="javascript:void(0);"  class="nav-link" onclick="toggleTabs(this)">Stand Out</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                       <div class="tab-pane active border border-top-0 rounded p-4" id="enquiries">
                            <div class="row mb-3">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-lg active" data-target="all">All</button>
                                    <button type="button" class="btn btn-primary btn-lg" data-target="new">New</button>
                                    <button type="button" class="btn btn-primary btn-lg" data-target="contacted">Contacted</button>
                                    <button type="button" class="btn btn-primary btn-lg" data-target="starred">Starred</button>
                                </div>
                            </div>
                            <div class="row border border-right-0 border-left-0 px-4 pt-2 mb-3">
                                <p class="text-secondary">1 Total, 1 Unread</p>
                            </div>                        
                            <div class="row border border-top-0 border-right-0 border-left-0 mb-3">
                                <div class="col-md-1">
                                    <h3 class="rounded-circle bg-success" style="text-align: center; width: 40px; height: 40px;">A</h3>
                                </div>
                                <div class="col-md-4">
                                    <h5>Anshu Kumari</h5>
                                    <h6 class="text-secondary">Web Development</h6>
                                    <h6>Online class</h6>
                                    <h6>Mohali SAS Nagar, Chandigarh</h6>
                                    <h6>10 of 10 Responded - Closed </h6>
                                </div>
                                <div class="col-md-7">
                                    <div class="row text-secondary">
                                        <p class="w-100" style="text-align: right;">1 hr ago</p>                                                                       
                                        <p class="w-100 text-dark" style="text-align: right; font-size: 20px;"><span class="material-icons mr-2 align-middle bg-success rounded p-1 text-white">call</span>XXXXXXXX56</p>
                                        <div class="fa fa-star-o w-100" style="text-align: right;"></div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="row border border-top-0 border-right-0 border-left-0 ">
                                <div class="col-md-1">
                                    <h3 class="rounded-circle bg-success" style="text-align: center; width: 40px; height: 40px;">A</h3>
                                </div>
                                <div class="col-md-4">
                                    <h5>Anshu Kumari</h5>
                                    <h6 class="text-secondary">Web Development</h6>
                                    <h6>Online class</h6>
                                    <h6>Mohali SAS Nagar, Chandigarh</h6>
                                    <h6>10 of 10 Responded - Closed </h6>
                                </div>
                                <div class="col-md-7">
                                    <div class="row text-secondary">
                                        <p class="w-100" style="text-align: right;">1 hr ago</p>                                                                       
                                        <p class="w-100 text-dark" style="text-align: right; font-size: 20px;"><span class="material-icons mr-2 align-middle bg-success rounded p-1 text-white">call</span>XXXXXXXX56</p>
                                        <div class="fa fa-star-o w-100" style="text-align: right;"></div>
                                    </div>                                    
                                </div>
                            </div>
                       </div>  
                       <div class="tab-pane border border-top-0 rounded p-4" id="students"></div>
                       <div class="tab-pane border border-top-0 rounded p-4" id="standout"></div>
                    </div>
                    <script>
                        var dash = document.getElementById("dashboard");
                        var dash_sec = dash.getElementsByClassName("nav-item");
                        var enquiries = document.getElementById("enquiries");
                        var students = document.getElementById("students");
                        var standout = document.getElementById("standout");                    

                        function toggleTabs(tab) {
                            
                            if(!tab.classList.contains("active") && tab.innerHTML == "Enquiries")  {
                                                                
                                tab.classList.add("active");
                                enquiries.classList.add("active");

                                for(i=0; i<dash_sec.length; i++) {
                                    
                                    if(dash_sec[i].firstElementChild.innerHTML == "Students") {
                                                                            
                                        dash_sec[i].firstElementChild.classList.remove("active");
                                        students.classList.remove("active");
                                    }
                                    if(dash_sec[i].firstElementChild.innerHTML == "Stand Out") {
                                                                                
                                        dash_sec[i].firstElementChild.classList.remove("active");
                                        standout.classList.remove("active");
                                    }
                                }
                            }
                            if(!tab.classList.contains("active") && tab.innerHTML == "Students")  {

                                tab.classList.add("active");
                                students.classList.add("active");

                                for(i=0; i<dash_sec.length; i++) {
                                    
                                    if(dash_sec[i].firstElementChild.innerHTML == "Enquiries") {
                                        
                                        dash_sec[i].firstElementChild.classList.remove("active");
                                        enquiries.classList.remove("active");
                                    }
                                    if(dash_sec[i].firstElementChild.innerHTML == "Stand Out") {
                                        
                                        dash_sec[i].firstElementChild.classList.remove("active");
                                        standout.classList.remove("active");
                                    }
                                }
                            }
                            if(!tab.classList.contains("active") && tab.innerHTML == "Stand Out")  {
                                
                                tab.classList.add("active");
                                standout.classList.add("active");

                                for(i=0; i<dash_sec.length; i++) {

                                    if(dash_sec[i].firstElementChild.innerHTML == "Students") {
                                        
                                        dash_sec[i].firstElementChild.classList.remove("active");
                                        students.classList.remove("active");
                                    }
                                    if(dash_sec[i].firstElementChild.innerHTML == "Enquiries") {
                                        
                                        dash_sec[i].firstElementChild.classList.remove("active");
                                        enquiries.classList.remove("active");
                                    }
                                }
                            }
                        }
                    </script>
                </div>
                <!--dashboard section end-->
                <!--profile section-->
                <div class="tab-pane" id="profile">
                    <div style="background-color: whitesmoke" class="px-3 py-2">
                        <h5>Profile Information</h5>
                        <small>Update your Information as it appears on CityPro Profile</small>
                    </div>
                    <div class="px-3 py-2 border border-top-0 d-flex" style="position: relative;">
                        <div class="col-md-1">
                            <div class="fa fa-id-badge" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                        <div class="col-md-10">
                            <h5>Profile Information</h5>
                            <small>Sandal Patel, patelsandal@gmail.com</small>
                        </div>
                        <div class="col-md-1" style="position: relative;">
                            <div class="fa fa-arrow-right" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                    </div>
                    <div class="px-3 py-2 border border-top-0 d-flex" style="position: relative;">
                        <div class="col-md-1">
                            <div class="fa fa-hashtag" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                        <div class="col-md-10">
                            <h5>Profile Tagline</h5>
                            <small class="text-danger">Not Available</small>
                        </div>
                        <div class="col-md-1" style="position: relative;">
                            <div class="fa fa-arrow-right" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                    </div>
                    <div class="px-3 py-2 border border-top-0 d-flex" style="position: relative;">
                        <div class="col-md-1">
                            <div class="material-icons" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">call</div>
                        </div>
                        <div class="col-md-10">
                            <h5>Phone Number</h5>
                            <small>07389086856</small>
                        </div>
                        <div class="col-md-1" style="position: relative;">
                            <div class="fa fa-arrow-right" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                    </div>
                    <div class="px-3 py-2 border border-top-0 d-flex" style="position: relative;">
                        <div class="col-md-1">
                            <div class="fa fa-map-marker" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                        <div class="col-md-10">
                            <h5>Address</h5>
                            <small>Bisrakh, Noida, India -201306</small>
                        </div>
                        <div class="col-md-1" style="position: relative;">
                            <div class="fa fa-arrow-right" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                    </div>
                    <div class="px-3 py-2 border border-top-0 d-flex" style="position: relative;">
                        <div class="col-md-1">
                            <div class="fa fa-file-photo-o" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                        <div class="col-md-10">
                            <h5>Profile Picture</h5>
                            <small class="text-danger">Not Available</small>
                        </div>
                        <div class="col-md-1" style="position: relative;">
                            <div class="fa fa-arrow-right" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                    </div>
                    <div class="px-3 py-2 border border-top-0 d-flex" style="position: relative;">
                        <div class="col-md-1">
                            <div class="material-icons" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">verified_user</div>
                        </div>
                        <div class="col-md-10">
                            <h5>CityPro Verified Badge</h5>
                            <small class="text-danger">Badge not earned</small>
                        </div>
                        <div class="col-md-1" style="position: relative;">
                            <div class="fa fa-arrow-right" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                    </div>
                    <div class="px-3 py-2 border border-top-0 d-flex" style="position: relative;">
                        <div class="col-md-1">
                            <div class="fa fa-graduation-cap" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                        <div class="col-md-10">
                            <h5>Qualification & Experience</h5>
                            <small class="text-danger">1 Degree (0 verified), 0 Certificate</small>
                        </div>
                        <div class="col-md-1" style="position: relative;">
                            <div class="fa fa-arrow-right" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                    </div>
                    <div class="px-3 py-2 border border-top-0 d-flex" style="position: relative;">
                        <div class="col-md-1">
                            <div class="fa fa-book" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                        <div class="col-md-10">
                            <h5>Tutoring Information</h5>
                            <small class="text-danger">Not Available</small>
                        </div>
                        <div class="col-md-1" style="position: relative;">
                            <div class="fa fa-arrow-right" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                    </div>
                    <div class="px-3 py-2 border border-top-0 d-flex" style="position: relative;">
                        <div class="col-md-1">
                            <div class="material-icons" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">photo_library</div>
                        </div>
                        <div class="col-md-10">
                            <h5>Gallery</h5>
                            <small>0 Intro Video, 0 Photo, 0 Video, 0 Document</small></div>
                        <div class="col-md-1" style="position: relative;">
                            <div class="fa fa-arrow-right" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                    </div>
                    <div class="px-3 py-2 border border-top-0 d-flex" style="position: relative;">
                        <div class="col-md-1">
                            <div class="fa fa-link" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                        <div class="col-md-10">
                            <h5>Customize Profile URL</h5>
                            <small>http://citypro.com/noida/sandal-patel/24540888</small></div>
                        <div class="col-md-1" style="position: relative;">
                            <div class="fa fa-arrow-right" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);"></div>
                        </div>
                    </div>                        
                </div>
                <!--profile section end-->
                <!-- logout section -->
                <!-- logout section end -->
                <script>
                    var section = document.getElementsByClassName("nav-content");                    
                    var dashboard = document.getElementById("dashboard");
                    var profile = document.getElementById("profile");

                   /* for(i=0; i<section.length; i++) {
                        
                        if(section[i].firstChild.nodeValue != "Logout") {
                            
                            section[i].addEventListener("click", function() { toggleShow(section[i]); });
                        }
                    }*/                   

                    function toggleShow(sec) {  
                        
                        if(!sec.classList.contains("nav-active") && sec.firstElementChild.lastChild.nodeValue == "Dashboard") {
                            
                            console.log("dashboard");
                            sec.classList.add("nav-active");
                            dashboard.classList.add("active");
                            
                            for(j=0; j<section.length; j++) {

                                if(section[j].firstElementChild.lastChild.nodeValue == "Profile") {

                                    section[j].classList.remove("nav-active");
                                    profile.classList.remove("active");
                                    break;
                                }
                            }
                        }
                        else if(!sec.classList.contains("nav-active") && sec.firstElementChild.lastChild.nodeValue == "Profile") {
                            console.log("profile");
                            
                            sec.classList.add("nav-active");
                            profile.classList.add("active");                         
                            
                            for(j=0; j<section.length; j++) {

                                if(section[j].firstElementChild.lastChild.nodeValue == "Dashboard") {

                                    section[j].classList.remove("nav-active");
                                    dashboard.classList.remove("active");
                                }
                            }
                        }
                    }
                </script>
            </div>
        </div>     
    </body>
</html>     