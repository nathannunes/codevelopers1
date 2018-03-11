<?php
    session_start();
    require('db_conn.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Coder's Club</title>
    
    <style type="text/css">
     #blue-btn{
            background: none repeat scroll 0 0 #0cbbfc;
            border:1px solid #0cbbfc;
            border-radius:5px;
            color: white;
            font-weight: 400;
            padding: 0.8em 0.9em;
            display: block;
            margin:0.8em 0em;
        
    </style>
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
<body >
   
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
      <!--NAVBAR SECTION END-->
       <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me">
                        <!-- Slider 01 -->
                        <li>
                             <h1>CODER'S CLUB</h1>
                           <h3>WE HELP USERS UNDERSTAND AND TAKE CONTROL OF THEIR TECHNOLOGY</h3>
                             
                           
                        </li>
                        <!-- End Slider 01 -->
                        
                        <!-- Slider 02 -->
                        <li>
                            <h1>WEB DEVELOPMENT</h1>
                           <h3>WE CREATE WEBSITES FOR ALL TYPES OF BUSINESSES</h3>
                          
                        </li>
                        <!-- End Slider 02 -->
                        
                        <!-- Slider 03 -->
                        <li>
                            <h1>INNOVATIVE</H1>
                           <h3>AT CODER'S CLUB INNOVATION MEETS SKILLS</h3>
                            
                        </li>
                        <!-- End Slider 03 -->
                    </ul>
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>
       <!--HOME SECTION END-->   
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> WELCOME TO CODER'S CLUB<i class="fa fa-circle-o-notch"></i> </h2>
                   </div>
               </div>
             </div>
        
    </div>
    <!--HOME SECTION TAG LINE END-->   
         <div id="resources-sec" class="container-fluid" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <p data-scroll-reveal="enter from the bottom after 0.3s" >
                      
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row" >
           
               
                 <div class="col-lg-6  col-md-6 col-sm-6" data-scroll-reveal="enter from the bottom after 0.4s">
                     
                     <div class="about-div">
                      <i class='fa fa-paper-plane-o fa-4x icon-round-border' ></i>
                    <?php
        				if(!isset($_SESSION['rn']))
        				{
        					echo("

        						  <div class='col-lg-12 col-md-12 col-sm-12' data-scroll-reveal='enter from the bottom after 0.5s>
                                  
                  <form id='loginForm' method='POST' action='login_validation'>
                        <div class='form-group'>
                           <label for='email'>Email-ID</label>
			                                <input class='form-control' type='text' name='email' size='35' required='true'>
                        </div>
                        <div class='form-group'>
                            <label for='password' style='padding-top:5px'>Password</label>
	            		                    <input class='form-control' type='password' name='password' size='35' required='true'>
                        </div>
                       
                        <div class='form-group'>
                            <input type='submit'  id='blue-btn' name='login_validation' value='Login' class='btn btn-lg'> 
	            		                   <a href='signup.php' class='btn btn-warning' id='signup_link'>Sign up</a> 
                        </div>

                    </form>
                </div>

        						");
        				}
        				else
        				{
	                        $name = $_SESSION['uname'];
	                        echo("<div class='post_login'>
	                            <h1 style='margin-left:10px'>Welcome, <br> <b>$name</b></h1>
	                            <h3>Something Interesting coming for you in this section...</h3>
	                        </div>");
        				}
        			?>
                     </div>
                   </div>
                 
                 <div class="col-lg-6  col-md-6 col-sm-6" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="about-div">
                     <i class="fa fa-magic fa-4x icon-round-border" ></i>
                   <h3 >GOT ANY COOL IDEAS?</h3>
                 <hr />
                       <hr />
		                    <p><h4>Submit your ideas or project requirements and we'll get back to you !</h4></p>
               <a href="project_request.php" id="blue-btn"><center>SUBMIT</center></a>
                </div>
                   </div>
                 
                 
               </div>
             </div>
   <!-- FEATURES SECTION END-->
    <div id="faculty-sec" >
    <div class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     
                 </div>

             </div>
             <!--/.HEADER LINE END-->

           <div class="row" >
           
               
                 <div class="col-lg-6  col-md-6 col-sm-6" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="faculty-div">
                     <!--<img src="assets/img/faculty/1.jpg"  class="img-rounded" />-->
                   <h3 >ANNOUNCEMENTS</h3> <br>
                         <h5>Click on each announcement to know more about it.</h5><hr/>
                       <?php 
                            $query= " SELECT * FROM announcements ORDER BY id DESC";
                            $result= mysqli_query($conn,$query);
                            while( $announce = mysqli_fetch_array($result)){
                                $date = $announce['date'];
                                $title = $announce['title'];
                                $content = $announce['content'];
                                echo("

                                    <a id='announcement_links' data-toggle='modal' data-target='#$title'>
                                        <div class='row' id='announce_row'>
                                            <div class='col-5' style='text-align:left'>
                                                &emsp; $date 
                                            </div>
                                            <div class='col-7'> <b>
                                                $title </b>
                                            </div> 
                                        </div>
                                    </a>

                                    <div class='modal fade' id='$title' tabindex='-1' role='dialog' aria-labelledby='announcementsModal' aria-hidden='true'>
                                        <div class='modal-dialog' role='document'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title' id='announcementTitle'>
                                                        $title
                                                    </h5>
                                                </div>
                                                <div class='modal-body'>
                                                    $content
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                "); 
                            }
                        ?> 

                           
                       
                   
                </div>
                   </div>
                
               <div class="col-lg-6  col-md-6 col-sm-6" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="faculty-div">
                   <!--  <img src="assets/img/faculty/3.jpg" class="img-rounded" /> -->
                   <h3 >OUR TWITTER FEED</h3>
                 <hr />
                  <a class="twitter-timeline" data-lang="en" data-width="100%" data-height="400" href="https://twitter.com/FCRITcodersclub" data-chrome="nofooter noborders transparent scrollbar"></a> 
                         <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                   </div>
                 
               </div>
             </div>
        </div>
    <!-- FACULTY SECTION END-->
      <div id="course-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">FIND US AT</h1>
                    
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row set-row-pad" >
           <div class="col-lg-12 col-md-12 col-sm-12 " data-scroll-reveal="enter from the bottom after 0.4s" >
                 
		            		<iframe width="100%" height="400" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJq8XY4MrG5zsR2KIsZh1I9Ls&key=AIzaSyCS9ABZV-9Z6I4IqbZ0NGnKapD60xjMmiE" allowfullscreen></iframe>
           </div>
             
                 
               </div>
             </div>
      <!-- COURSES SECTION END-->
  
    
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
</body>
</html>
