<?php
	session_start();
	if(!isset($_POST['create_feedback']))
	{
		$result = 403;
	  	header("Location: result?res=$result");
	}
	else
	{		
		include("db_conn.php");
		if(!$conn)
		{
			$result = 500;
			//print("Error db_conn");
	  		header("Location: result?res=$result");
		}
		else
		{	
			$user_email = $_SESSION['eid'];
			$feed_star = $_POST['star'];
			$feed_msg = $_POST['message'];

			$sql1 = "INSERT INTO feedback(email,rating,feedback_text) values ('$user_email','$feed_star','$feed_msg')";
			//print_r($sql1);
			$sql1_res = mysqli_query($conn,$sql1);
            //print($sql1_res);
			if(!$sql1_res)
			{
				$result = 500;
				//print("Error in Query Result");
	  			header("Location: result?res=$result");
			}
			else
			{
				$result = 200;
			    $com = "feed submission successful";
			    //print("submission successful");
			   header("Location: result?res=$result&com=$com");
			}

		}


	}
?>