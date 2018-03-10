<?php

session_start();
// For local hosting
require('db_conn.php');

if(!$conn)
{
	$result = 500;
	header("Location: result.php?err=$result"); 
}
else
{
	$sql = "Select * from blogs";
	$result = mysqli_query($conn,$sql);
	if(!$result)
	{
		$result = 500;
		header("Location: result.php?err=$result"); 
	}
	else
	{
		if(mysqli_num_rows($result)==0)
		{
			echo("No Blogs Have been Added Yet.");
		}
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
    
    
     <style type="text/css">
        input {
            width: 100%;
            border-color: 1px solid white!important;
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
        #blogs_area{
          background-color: #dee2e6;
          padding: 5%;
        }
        #form_area
        select{
          width:100%;
          padding:5px;
        }
        textarea{
          width:100%;
        }
        img{
          justify-content: center;
        }
        #dp{
          justify-content: center;
          padding:10px;
        }
        #attr{
          width:50%;
          text-align: left;
          word-wrap: break-word;
          padding-left: 10px;
          padding-right : 10px;
        }
        #blog_data{
          font-size: 15px;
          text-align: left;
          word-wrap: break-word;
          padding-left: 25px;
          padding-right : 25px;
          padding-bottom: 5px
        }
        #info{
          padding:5px;
        }
        .blog_cards{
        	margin:10px;
        	padding:10px;
        	/*background-color:#cbd0d6;*/
        	color:white;
        	border : 1px solid white;
        	border-radius: 5px
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
    <div class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">BLOGS</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                    <div id="message_for_clients">
				
				</div>
                     
                        <div class="row set-row-pad">
           
               
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                  
                </div>
                            	<?php
      			if(mysqli_num_rows($result)>0)
      			{
      				while($data = mysqli_fetch_array($result))
					{	
						$title = $data['blog_title'];
                     //   $category = $data['blog_category'];
						$roll_no = $data['roll_no'];
						$author = $data['blog_author'];
						$date = $data['blog_timestamp'];
						$content = $data['blog_content'];
						echo("<div class='blog_cards'> <div class='row'>");
						echo("<div id='blog_data' class='col-md-3'><b>Title</b></div>");
						echo("<div id='blog_data' class='col-md-9'><b>$title</b></div>");
						echo('</div>');

            echo("<div class='row'>");
           // echo("<div id='blog_data' class='col-md-3'><b>Category</b></div>");
          //  echo("<div id='blog_data' class='col-md-9'>$category</div>");
            echo('</div>');

						echo("<div class='row'>");
						echo("<div id='blog_data' class='col-md-3'><b>Author</b></div>");
						echo("<div id='blog_data' class='col-md-9'>$author ($roll_no)</div>");
						echo('</div>');

						echo("<div class='row'>");
						echo("<div id='blog_data' class='col-md-3'><b>Date</b></div>");
						echo("<div id='blog_data' class='col-md-9'>$date</div>");
						echo('</div>');

						echo("<div class='row'>");
						echo("<div id='blog_data' class='col-md-3'><b>Content</b></div>");
						echo("<div id='blog_data' class='col-md-9'>$content</div>");
						echo('</div></div>');
					}
      		
      			}


      			if(isset($_SESSION['rn']))
      		{
      			echo("<div class='row'>
      					<div class='col-md-4'>
      					</div>
      					<div class='col-md-4'>
      					<form action='add_blogs' name='add_blogs_redirect' method='post'>
                			<input id='blue-btn' type='submit' name='add_blogs' value='Add New Blog'>
              			</form>
              			</div>
              			<div class='col-md-4'>
              			</div>
              		</div>");
      		}
      		?>




                   
     
              
              
                
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