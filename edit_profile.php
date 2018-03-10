<?php

session_start();
if(!isset($_SESSION['rn']) && !isset($_SESSION['eid']))
{
  $result = 403;
  header("Location: result.php?res=$result");  
}
else
{
  // For local hosting
  require('db_conn.php');

  // For live hosting
  //require(' /storage/ssd2/792/4272792/public_html/db_conn.php'); 
  
  if(!$conn)
  {
    $result = 500;
    header("Location: result.php?res=$result"); 
  }
  else
  {
    $roll_no = $_SESSION['rn'];
    $email = $_SESSION['eid'];

    $sql="SELECT gender,profession,contact,dob,hobbies,languages_known,previous_works,github,linkedin FROM  profiles  where  roll_no='$roll_no'";
      //echo($sql);
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
      $result = 500;
      header("Location: result.php?res=$result"); 
    }
    else
    {
      $row=mysqli_fetch_array($result);
      $name = $_SESSION['uname'];
      $gender = $row['gender'];
      $contact = $row['contact'];
      $dob = $row['dob'];
      $profession = $row['profession'];
      $hobbies = $row['hobbies'];
      $languages = $row['languages_known'];
      $previous_works = $row['previous_works'];
      $github = $row['github'];
      $linkedin = $row['linkedin'];
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Profile</title>
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
<center>
<h2>Profile</h2>
</center>
    
           <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" data-scroll-reveal="enter from the bottom after 0.3s">
                                <h3>EDIT PROFIE</h3>
                    <div class="row">
                           <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s">
           
               
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                   <form action="save_profile_changes.php" id="edit_profile" method="post" name="profile" enctype="multipart/form-data">

                        <div class="form-group">
                            
                        </div>
                       
                          <div class="form-group">
                              <img src="images/default.png" alt="dp" type="file" accept  width="150px" ><br>

                                <label>Upload Display Picture</label>
                                <input type="file" accept='image/*' name="profile_pic"><br>
                        </div>
                       
                          <div class="form-group">
                             <label for="roll-no">Roll No.</label>
    <input type="text" id="roll_no" name="roll_no" value='<?=$roll_no?>' disabled="true"><br>
                        </div>
                       
                          <div class="form-group">
                            <label  for="name">Name</label>
    <input type="text" id="name" name="name"  value='<?=$name?>' disabled="true"><br>
                        </div>
                       
                          <div class="form-group">
                            <label  for="email">Email</label>
    <input type="email" id="email" name="email"  value='<?=$email?>' disabled="true"><br>
                        </div>
                       
                          <div class="form-group">
                            <label  for="email">Gender</label>
    <input type="text" id="gender" name="gender" value='<?=$gender?>' disabled="true"><br>
                        </div>
                       
                       
                          <div class="form-group">
                            <label class="control-label lead" for="contact-no">Date Of Birth</label>
    <input type="date" id="dob" placeholder="DD-MM-YY" name="dob" value='<?=$dob?>'><br>
                        </div>
                       
                          <div class="form-group">
                            <label  for="email">Profession</label>
    <input type="text" id="profession" name="profession" value='<?=$profession?>'><br> 
                        </div>
                       
                          <div class="form-group">
                            <label  for="contact-no">Contact No.</label>
    <input type="text" id="contact_no" placeholder="Enter Mobile No." name="contact_no" value='<?=$contact?>'><br>
                        </div>
                       
                          <div class="form-group">
                            <label  for="languages">Languages Know</label>
    <textarea name="languages" id="languages"  cols="30" rows="1" placeholder="Enter know language"  value='<?=$languages?>'>
      <?=$languages?>
    </textarea><br>
                        </div>
                       
                          <div class="form-group">
                            <label  for="project">Previous Works(Any Projects)</label>
    <textarea name="previous_works" id="previous_works" cols="30" rows="1" placeholder="Any project you worked on"  value='<?=$previous_works?>'>
      <?=$previous_works?>
    </textarea><br>
                        </div>
                       
                          <div class="form-group">
                            <label  for="hobbies">Hobbies</label>
    <textarea name="hobbies" id="hobbies" cols="30" rows="1"  placeholder="Enter hobbies"   value='<?=$hobbies?>'>
      <?=$hobbies?>
    </textarea><br>
                        </div>
                       
                          <div class="form-group">
                            <label  for="account-detail">Account detail:</label><br>
    <label>GitHub</label> 
    <input id="github_acc" type="text" name="github_acc" placeholder="Enter GitHub Username" value='<?=$github?>'>
    <br>  
                        </div>
                       
                       
                        <div class="form-group">
<label>Linkdein</label> 
    <input id="link_dis" type="text" name="linkedin_acc" placeholder="Enter LinkedIn Username" value='<?=$linkedin?>' >
    <br>  
                        </div>
                       
                       
                        
                        <div class="form-group">
                           <input type="submit" name="save_profile_changes"  value="Save Changes"><br>
                        </div>

                    </form>
                </div>

                   
     
              
              
                
               </div>
                       
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
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
     <!-- CONTACT SECTION END-->
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