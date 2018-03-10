<?php

session_start();
if(!isset($_SESSION['rn']) && !isset($_SESSION['eid']))
{
    $roll_no = $_SESSION['rn'];
    $email = $_SESSION['eid'];
}


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
    
    
    
     <div id="faculty-sec" >
    <div class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">ABOUT US</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      Here at coders club we believe coding to be one of the basic necessities in today’s digital world. It is our vision to learn and help others learn the art of coding, to create a virtual world of our own from scratch. We look forward to creating projects that people or companies have in their mind, transforming dreams into reality.This is what we are all about.
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->

           <div class="row" >
           
               
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="faculty-div">
                     <!--<img src="assets/img/faculty/1.jpg"  class="img-rounded" />-->
                   <h3 >HARSHIT RAI</h3>
                        <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">
                                  <strong>   Read More..</strong> 
                                    </a>
                                </h4>
                            </div>
                         <hr />
                            <div id="collapse1" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Harshit is the leading force behind the development of this website. An exemplary Coder and a motivator, he has achieved many awards including the first prize for last year CSI-IT where his team won the first prize for creating the ‘Agnel Online’ website along with Nathan. He has proficiency in all basic programming languages especially python and is a Certified Ethical Hacker. 
                       </p>
                                </div>
                            </div>
                       
                   
                </div>
                   </div>
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="faculty-div">
                     <!--<img src="assets/img/faculty/1.jpg"  class="img-rounded" />-->
                   <h3 >NATHAN NUNES</h3>
                        <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                                  <strong>   Read More..</strong> 
                                    </a>
                                </h4>
                            </div>
                         <hr />
                            <div id="collapse2" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Nathan loves to play basketball, football and to try different coding methods. His achievements include getting placed first in cyber Olympiad, top 20 in college level coding competition and placed first for creating agnel online website alongside with Harshit and a fellow student.
                       </p>
                                </div>
                            </div>
                       
                   
                </div>
                   </div>
             <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="faculty-div">
                     <!--<img src="assets/img/faculty/1.jpg"  class="img-rounded" />-->
                   <h4>PUSHKAR POKHARKAR</h4>
                        <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
                                  <strong>   Read More..</strong> 
                                    </a>
                                </h4>
                            </div>
                         <hr />
                            <div id="collapse3" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Pushkar has a deep interest in data science, cryptic techniques and web designing. He loves to read, Drive and play cricket. He has achieved a diploma in android application development and certifications for PHP and asp mvc.
                       </p>
                                </div>
                            </div>
                       
                   
                </div>
                   </div>
                 
               </div>
             </div>
    </div>
    
         <div class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                   <!--  <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line"></h1> -->
                     <p data-scroll-reveal="enter from the bottom after 0.3s" >
                      
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row" >
           
               
                <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="faculty-div">
                     <!--<img src="assets/img/faculty/1.jpg"  class="img-rounded" />-->
                   <h3 >FELIX SEKAR</h3>
                        <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed">
                                  <strong>   Read More..</strong> 
                                    </a>
                                </h4>
                            </div>
                         <hr />
                            <div id="collapse4" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p>BHAI NE ABHI TAK KUCH LIKHA NAHI HAI
                       </p>
                                </div>
                            </div>
                       
                   
                </div>
                   </div>
                    <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="faculty-div">
                     <!--<img src="assets/img/faculty/1.jpg"  class="img-rounded" />-->
                   <h3 >RANJAY BOSE</h3>
                        <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed">
                                  <strong>   Read More..</strong> 
                                    </a>
                                </h4>
                            </div>
                         <hr />
                            <div id="collapse5" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Ranjay has a keen interest in solving every day problems using technology and is an avid propagator of science.His other interests include analysing government policies and watching indie movies.
                       </p>
                                </div>
                            </div>
                       
                   
                </div>
                   </div>
                <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="faculty-div">
                     <!--<img src="assets/img/faculty/1.jpg"  class="img-rounded" />-->
                   <h3 >POOJA MORE</h3>
                        <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="collapsed">
                                  <strong>   Read More..</strong> 
                                    </a>
                                </h4>
                            </div>
                         <hr />
                            <div id="collapse6" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Pooja is interested in game development, web designing, photography and gaming. Her achievements include being the sports GS at diploma level, gold and silver medallist national and international karate tournament and has won various coding and technical poster presentation competition at Inter College Level.
                       </p>
                                </div>
                            </div>
                       
                   
                </div>
                   </div>
                 
                 
               </div>
             </div>
   <!-- FEATURES SECTION END-->
    <div id="faculty-sec">
     <div class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
        
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->

           <div class="row" >
           
               
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="faculty-div">
                     <!--<img src="assets/img/faculty/1.jpg"  class="img-rounded" />-->
                   <h3 >JOSLYN PERIERA</h3>
                        <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" class="collapsed">
                                  <strong>   Read More..</strong> 
                                    </a>
                                </h4>
                            </div>
                         <hr />
                            <div id="collapse7" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Joslyn loves football, rap music and reading. Needless to say he loves coding as well, and has knowledge on Cross-platform mobile application development along with other basic languages And especially loves PHP. He won the first prize for last years CSI IT decryption competition.
                       </p>
                                </div>
                            </div>
                       
                   
                </div>
                   </div>
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="faculty-div">
                     <!--<img src="assets/img/faculty/1.jpg"  class="img-rounded" />-->
                   <h3 >PURVESH JAIN</h3>
                        <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse8" class="collapsed">
                                  <strong>   Read More..</strong> 
                                    </a>
                                </h4>
                            </div>
                         <hr />
                            <div id="collapse8" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Purvesh loves watching TV series as much as he does to code, his favourite being PHP coding and has proficiency in basic coding languages and also loves playing volleyball and doing research on Technology and politics in free time.
                       </p>
                                </div>
                            </div>
                       
                   
                </div>
                   </div>
             <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="faculty-div">
                     <!--<img src="assets/img/faculty/1.jpg"  class="img-rounded" />-->
                   <h4>Abey Alex George</h4>
                        <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse9" class="collapsed">
                                  <strong>   Read More..</strong> 
                                    </a>
                                </h4>
                            </div>
                         <hr />
                            <div id="collapse9" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Abey's interest lies in website development, machine learning and artificial intelligence. He is an ace Athlete who loves listening to music and watching war movies. Is also a diehard fan of Marvel universe. ‘Hail Hydra’.
                       </p>
                                </div>
                            </div>
                       
                   
                </div>
                   </div>
                 
               </div>
             </div>
    </div>
    <!-- END OF ABOUT US-->
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
</body>
</html>
