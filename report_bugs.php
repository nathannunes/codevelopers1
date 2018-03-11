<?php

    session_start();
    //echo($_SESSION['eid']);
    if(isset($_SESSION['eid']) && isset($_SESSION['uname']))
    {
        $email = $_SESSION['eid'];
        $name = $_SESSION['uname'];
    }
    else
    {
        $email = "";
        $name = "";
    }

?>
<!DOCTYPE html>
<html>
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
    <style type="text/css">
        input {
            width: 100%;
            border-color: 1px solid black !important;
        }

        .button {
            width: 100%;
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
            padding-bottom: 3px;
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



    </style>

    <!-- script
================================================== -->
<!--     <script src="styles/natn/js/modernizr.js"></script>
    <script src="styles/natn/js/pace.min.js"></script>
    <script src="styles/natn/js/jquery2.js"></script>
    <script src="styles/natn/js/bootstrap.min.js"></script>
    <script src="styles/natn/js/main.js"></script> -->


    <title>Report a bug</title>
    <meta charset="utf-8">

</head>

<body>
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

        <!---------------------------------------------------
    -------------------------END NAVIGATION--------------
    ---------------------------------------------------->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" data-scroll-reveal="enter from the bottom after 0.3s">
                                <h3>REPORT BUGS</h3>
                    <div class="row">
                           <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s">
           
               
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                   <form method="POST" action="bugs_upload.php" id='bugs_form' enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="email">Email ID:</label>
                                <input id="email" class="form-control" type="email" name="email" required="true" value="<?=$email?>" size:"35" placeholder="Enter your Email ID here">
                        </div>
                        <div class="form-group">
                             <label for="email">Name:</label>
                                <input class="form-control" id="name" type="text" name="name" required="true" placeholder="Enter your name here" value="<?=$name?>">
                        </div>
                        <div class="form-group">
                             <label for="bug-info">Describe the issue:</label>
                                <textarea class="form-control" id="bug_info" rows="5" cols="32" form='bugs_form' name="bug_info" required="true"></textarea>
          
                        </div>
                       
                       <div class="form-group">
                        <label for="files">Add Screenshot :</label>
                                <input id="bug_ss" class="form-control" type="file" name="bug_ss" accept="image/*">
                       </div>
                        <div class="form-group">
                            <button type="submit" value="Submit Report" name="bugs_upload" class="btn btn-info btn-block btn-lg">SUBMIT REQUEST</button>
                        </div>

                    </form>
                </div>

                   
     
            
              
                
               </div>
                       
                </div>
            </div>
        </div>
    </div>
    <!--===========FOOTER======================-->
    <div class="container">
             <div class="row set-row-pad"  >
    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Other Links</strong></h2>
        <hr />
                    <div >
                        <h4><a href="#">Support Us</a> <br></h4>
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
     <!-- CONTACT SECTION END-->
    <div id="footer">
         
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

           <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
        <script src="styles/bootstrap/js/bootstrap.min.js"></script>
<!--         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js " integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4 " crossorigin="anonymous "></script> -->
    

</body>

</html>
