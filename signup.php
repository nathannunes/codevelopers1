<?php

session_start();

if(isset($_SESSION['rn']) && isset($_SESSION['eid']))
{
    header("Location: index.php"); 
}

?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
         <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Coder's Club</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
  <!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
        
        <script>
            function validateForm() {
                var roll_no = document.forms["signup_form"]["roll_no"].value;
                console.log(roll_no);
                var password = document.forms["signup_form"]["password"].value;
                console.log(password);
                var conf_password = document.forms["signup_form"]["conf_password"].value;
                console.log(conf_password);

                //roll_no validation
                if ((roll_no < 501201) || (roll_no > 501699)) {
                    alert("Please Enter a Valid Roll Number");
                    return (false);
                }

                //email validation
                if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(signup_form.email.value))) {
                    alert("PLease enter a valid Email ID.");
                    return (false);
                }

                //password validation
                if (password === conf_password) {
                    return (true);
                } else {
                    alert("The passwords entered by you dont match.")
                    return (false);
                }
            }

        </script>
        <!--=======================CSS==========================-->
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap.css">
        <!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous"> -->

        <!--------------- CUSTOM CSS -------------->
        <link href="styles/css/signup.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!------------ NORMALIZE CSS -------------->
        <link href="styles/css/normalize.css" rel="stylesheet" type="text/css">
         <style type="text/css">
        input {
            width: 100%;
            border-color: 1px solid black !important;
        }

        .button {
            width: 100%;
        }

        h2{
            font-weight: 800;
            padding-top : 5px;
        }
        h3 {
            text-align: center;
            padding-top: 5%;
        }

        #logout {
            right: 0;
        }
        textarea {
            resize: none;
        }
        #blue-btn{
            background: none repeat scroll 0 0 #0cbbfc;
            border:1px solid #0cbbfc;
            border-radius:5px;
            color: white;
            font-weight: 400;
            padding: 0.8em 0.9em;
            display: block;
            margin:0.8em 0em;
        }
        #find_us{
            padding-left:40px;
        }
        .other_links{
            padding: 1px;
        }
        #others{
            padding-left: 20%;
        }
        small{
            color:white;
        }
        #form-div{
            background-color: #dee2e6;
            padding: 5%;
        }
        #form_area{
        	background-color: #dee2e6;
            padding: 5%;
        }
        select{
        	width:100%;
        	padding:5px;
        }
        textarea{
        	width:100%;
        }


    </style>

    </head>

    <body>
        <div class="home">
           <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img class="logo-custom" src="assets/img/logo180-50.png" alt=""  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="index.php">HOME</a></li>
                     <li><a href="project_request.php">PROJECT REQUEST</a></li>
                    <li><a href="blogs.php">BLOGS</a> </li>
                     <li><a href="find_resources.php">RESOURCES</a></li>
                   <!-- <li><a href="#faculty-sec">ABOUT US</a></li> -->
                    <li><a href="about_us.php">ABOUT US</a></li>
                     <li><a href="report_bugs.php">REPORT BUGS</a></li>
                    
                </ul>
            </div>
               <?php
            if(isset($_SESSION['rn']))
            {
                print("<ul class='navbar-nav'>
                            <li class='nav-item'>
                                <a class='nav-link' href='profile'>Profile</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='logout'>Logout</a>
                            </li>
                        </ul>");
            }
        ?>
           
        </div>
    </div>
            
           
              <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" data-scroll-reveal="enter from the bottom after 0.3s">
                                <h3>SIGN UP</h3>
                    
                           <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s">
           
               
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                   <form id="signup_form" name="signup_form" action="signup_validation.php" method="post" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label>Roll Number</label>
                                    <input id="rollno" class="form-control" type="text" name="roll_no" placeholder="Roll Number" required="true">
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                                    <input id="firstname"  class="form-control" type="text" name="first_name" placeholder="First Name" required="true">
                        </div>
                         <div class="form-group">
                            <label>Last Name</label>
                                    <input id="lastname"  class="form-control" type="text" name="last_name" placeholder="Last Name" required="true">
                        </div>
                         <div class="form-group">
                             <label>Gender</label>
                                    <select name='gender'  class="form-control" id='gender' required='true'>
                                        <option value=''disabled='true' size='30'>---Select your GENDER---</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select> 
                        </div>
                         <div class="form-group">
                             <label>Role</label>
                            <select name='role' class="form-control" id='role' required='true'>
                                        <option value=''disabled='true' size='30'>---Select your Role---</option>
                                        <option value="developer">Developer</option>
                                        <option value="tester">Tester</option>
                                    </select> 
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                                    <input id="email" class="form-control" type="email" name="email" placeholder="Email" required="true">
                        </div>
                       
                        <div class="form-group">
                             <label>Password</label>
                                    <input id="password" class="form-control" type="password" name="password" placeholder="Password" required="true" minlength="8">
          
                        </div>
                       
                       <div class="form-group">
                        <label>Confirm Password</label>
                                    <input id="cnf-password" class="form-control" type="password" name="conf_password" placeholder="Confirm Password" required="true" minlength="8">
                       </div>
                        <div class="form-group">
                             <input type="submit" class="btn btn-info btn-block btn-lg" name="signup" value="Sign Up"> 
                        </div>

                    </form>
                </div>
                        </div>
                </div>
                  </div>
            </div>
            
            
                  
                         
                         
                         

            <!--end of container-fluid-->
            <!-----------FOOTER------------>
       
     <!-- CONTACT SECTION END-->
     <!-- CONTACT SECTION END-->
    <div id="footer">
            <div class="container">
             <div class="row set-row-pad"  >
    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Other Links</strong></h2>
        <hr />
                    <div >
                        <h4><a href="support_us.php">Support Us</a> <br></h4>
                        <h4> <a href="#">Leaderboard</a><br></h4>
                        <h4><a href="report_bugs">Report a Bug</a><br></h4>
                        <h4><a href="#">FAQs</a><br></h4>
                    </div>


                </div>
                 <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Social Conectivity </strong></h2>
        <hr />
                    <div >
                        <a href="#">  <img src="assets/img/Social/facebook.png" alt="" /> </a>
                     <a href="https://plus.google.com/u/2/110531617173128497831"> <img src="assets/img/Social/google-plus.png" alt="" /></a>
                     <a href="https://twitter.com/FCRITcodersclub"> <img src="assets/img/Social/twitter.png" alt="" /></a>
                    </div>
                    </div>


                </div>
                 </div>
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
        <!-- Bootstrap core JavaScript
        ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js " integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4 " crossorigin="anonymous "></script>

        </div>
    </body>

    </html>
