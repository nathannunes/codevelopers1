<?php

session_start();

if(isset($_SESSION['rn']) && isset($_SESSION['eid']))
{	
	// For local hosting
	require('db_conn.php');

	if(!$conn)
	{
		$result = 500;
    	header("Location: result.php?res=$result"); 
	}
	else
	{
		$roll_no = $_SESSION['rn'];
		$name = $_SESSION['uname'];
		$email = $_SESSION['eid'];
		$sql = "select contact, profession from profiles where roll_no = '$roll_no'";
		//echo($sql);
		$result = mysqli_query($conn,$sql);

		if(!$result)
		{
			$result = 500;
    		header("Location: result.php?res=$result"); 
		}
		else
		{
			$row = mysqli_fetch_array($result);
			$contact = $row['contact'];
			$profession = $row['profession'];
			//print_r($row);
		}
		
	}
}
else
{
	$name = "";
	$email = "";
	$contact = "";
	$profession = "";
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

    <!-- CSS
================================================== -->
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
    
     <div id="faculty-sec" >
    <div class="container-fluid set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">PROJECT REQUEST</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                    <div id="message_for_clients">
					<p>
						Do you have an idea you wish to implement ? Or want us to develop a solution for you business ? We're here to help you out !
					</p>
					<p>
						Provide your details in the form below and we will get back to you as soon as possible.<br>
					</p>
				</div>
                     
                        <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >
           
               
                 <div class="col-lg-12 col-md-12 col-sm-12 ">
                     
                   <form id="project_request_form" method="POST" action="pr_submit.php">
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" required="true" placeholder="Enter Your Name" value="<?=$name?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" required="true" name="email" placeholder="Enter Your Email" value="<?=$email?>">
                        </div>
                         <div class="form-group">
                            <input class="form-control" type="text" name="contact" required="true" placeholder="Enter Your Contact" value="<?=$contact?>">
                        </div>
                         <div class="form-group">
                            <input class="form-control" type="text" name="profession" required="true" placeholder="Enter Your Profession" value="<?=$profession?>">
                        </div>
                         <div class="form-group">
                            <input class="form-control" type="text" name="organization" required="true" placeholder="Enter Your Organization Name">
                        </div>
                        <div class="form-group">
                            <label>Project Type </label>
        					<select required="true" name="project_type">
        		              <option value="" disabled selected="selected">Select Project Type</option>
                                <li><option value="software">Software</option></li>  
        		              <option value="hardware">Hardware</option>
        		              <option value="iot">IOT (Internet of Things)</option>
        		              <option value="other">Other</option>
        	            	</select>
                        </div>
                        
                        <div class="form-group">
                          <label>Project Description</label>
        					<textarea class="form-control" id="proj_descr" rows="5" cols="32" form='project_request_form' name="proj_descr" required="true" maxlength="500"></textarea>
                        </div>
                        <div class="form-group">
                            <input id='blue-btn' name="pr_submit" type="submit" name="submit" value="Submit Request">
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
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
        <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
        <script src="styles/bootstrap/js/bootstrap.min.js"></script>



</body>
</html>