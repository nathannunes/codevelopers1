<?php

session_start();
if(!isset($_SESSION['rn']) && !isset($_SESSION['eid']))
{
  $result = 403;
  header("Location: result?res=$result"); 
}
else
{
  // For local hosting
  require('db_conn.php');
  
  if(!$conn)
  {
      $result = 500;
      header("Location: result?res=$result"); 
  }
  else
  {
    $roll_no = $_SESSION['rn'];
    $email = $_SESSION['eid'];

    $sql="SELECT  *  FROM  profiles  where  roll_no=$roll_no";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $first_name = $row['first_name'];
    //echo("$first_name");
    $last_name = $row['last_name'];
    $name = $first_name.' '.$last_name;
    $gender = $row['gender'];
    $role = $row['role'];
    $contact = $row['contact'];
    $profession = $row['profession'];
    if($row['dob'] == '0000-00-00')
    {
      $dob = NULL;
    }
    else
    {
      $dob = $row['dob'];
    }
    $hobbies = $row['hobbies'];
    $languages = $row['languages_known'];
    $previous_works = $row['previous_works'];
    $github = $row['github'];
    $linkedin = $row['linkedin'];
  }

 
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
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-8" id="form_area">
        <div class="row">
          <div class="col-lg-4">
                <form action="edit_profile" name="profile" method="post">
                  <input id="blue-btn" type="submit" name="edit_profile" value="Edit Profile">
                </form>
          </div>
          <div class="col-lg-4" id="dp">
            <center>
            <?php
              if(isset($row['profile_pic']))
              {
                  $profile_pic = $row['profile_pic'];
                  echo '<img class="img-responsive rounded" src="data:image/png;base64,' . base64_encode($profile_pic) . '" height=150px width=150px/><br>';
              }
              else
              {
                  echo "<img class='img-responsive rounded' src='images/default.png' height='150' width='150px'><br>";
              }
            ?>
          </center>
          </div>
          <div class="col-lg-4">
              <form action="change_pwd" name="change_pwd_form" method="post">
                <input id="blue-btn" type="submit" name="change_pwd" value="Change Password">
              </form>
          </div>
        </div>
          <div >
            <h4 style="text-align: center">General</h4>
          </div>
        <div class="row" id="info">
          <div id="attr">Roll No</div>
          <div id="user_info"><b><?=$roll_no?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">Name</div>
          <div id="user_info"><b><?=$name?></b></div>
        </div>
        <div class="row" id="info" id="info">
          <div id="attr">Gender</div>
          <div id="user_info"><b><?=$gender?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">Email ID</div>
          <div id="user_info"><b><?=$email?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">Role</div>
          <div id="user_info"><b><?=$role?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">Contact No</div>
          <div id="user_info"><b><?=$contact?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">Date of Birth</div>
          <div id="user_info"><b><?=$dob?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">Profession</div>
          <div id="user_info"><b><?=$profession?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">Hobbies</div>
          <div id="user_info"><b><?=$hobbies?></b></div>
        </div>
        <div class="row" id="info">
            <div id="attr">Programming Languages Known</div>
            <div id="user_info"><b><?=$languages?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">Previous Works (Any Projects)</div>
          <div id="user_info"><b><?=$previous_works?></b></div>
        </div>
          <div >
            <h4 style="text-align: center">Other Accounts</h4>
          </div>
        <div class="row" id="info">
          <div id="attr">GitHub Account</div>
          <div id="user_info"><b><?=$github?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">LinkedIn</div>
          <div id="user_info"><b><?=$linkedin?></b></div>
        </div>
        <br>
      </div>
      <div class="col-md-2">
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
    <!--===========END OF FOOTER======================-->


        <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
        <script src="styles/bootstrap/js/bootstrap.min.js"></script>
        
              
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