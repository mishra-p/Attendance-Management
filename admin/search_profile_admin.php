<?php
  session_start();
  if(empty($_SESSION["admin_usr"]))
  {
    header("location:index.php");
    exit(0);
  }
  include "../connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="http://www.clubdesign.at/floatlabels.js"></script>
  <title>Student Profile</title>
</head>
<style>
	.fit{
		width:100%;
	}
	.username_font{
		font-size: 180%;
	}
	.font{
		font-size: 140%;
		font-family: sans-serif;
		text-align: left;
		font-weight: bold; 	
	}
	.answer_font{
		font-size: 140%;
		font-family: sans-serif;
		text-align: left;
	}
	.subfont{
		text-align: left;

	}
</style>
<body>
<div class="container">
	<div class="row">
	
       <div class="col-md-12 ">

			<div class="panel panel-default">
			  <div class="panel-heading"><h4 style="text-align: center;">Student Profile</h4></div>
			   <div class="panel-body">
			    <div class="box box-info">
			      <div class="box-body">
			      	<div class="row">
			        <div class="col-sm-12">
			           <div  align="center"> <img alt="User Pic" height="25%" width="25%" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">               
                        </div>              
			            <br>
			            </div>
			            </div>
			            <div align="center" class="row">
				            <div class="col-sm-12">
				            	<h4 style="color:#00b1b1;" class="username_font">
				            		<?php
				            		if(isset($_REQUEST['submit']))
				            		{
				            			$sid=$_POST['search'];
				            			$_SESSION['stu_id']=$sid;
				            		$sql="SELECT sname from student WHERE sid='$sid'";
				            		$result=$conn->query($sql);
							          if($result->num_rows===1)
							          {
							              $row = mysqli_fetch_assoc($result);
							              echo $row["sname"];
							          } 
							         }
				            	?>
				            	</h4>
				            </div>   
			            </div>
			            <div class="clearfix"></div>
			            <!--Student details-->
			            <div class="row" align="center">
			            <hr style="margin:5px 0 5px 0;">
			            <!--Student ID-->
			            <div align="center" class="row">
				            <div class="col-sm-6">
				            	<div class="col-sm-4">
				            	</div>
				            	<div class="col-sm-8">
				            	<h4 class="tital font">STUDENT ID : </h4>
				            	</div>
				            </div>   
				            <div class="col-sm-6">
				            	<div class="col-sm-4">
				            	</div>
				            	<div class="col-sm-8">
				            	<h4 class="tital answer_font">
				            		<?php echo $_SESSION["stu_id"];?>
				            	</h4>
				            	</div>
				            </div>   
			            </div>
						<div class="clearfix"></div>
						<div class="bot-border"></div>
						<!--Branch-->
			            <div align="center" class="row">
				            <div class="col-sm-6">
				            	<div class="col-sm-4">
				            	</div>
				            	<div class="col-sm-8">
				            	<h4 class="tital font">BRANCH : </h4>
				            	</div>
				            </div>   
				            <div class="col-sm-6">
				            	<div class="col-sm-4">
				            	</div>
				            	<div class="col-sm-8">
				            	<h4 class="tital answer_font" style="text-transform: uppercase;">
				            	<?php
				            		$id=$_SESSION["stu_id"];
				            		$sql="SELECT branch from student WHERE sid='$id'";
				            		$result=$conn->query($sql);
							          if($result->num_rows===1)
							          {
							            $row = mysqli_fetch_assoc($result);
							              echo $row["branch"];
							          } 
				            	?>
				            	</h4>
				            	</div>
				            </div>   
			            </div>
						<div class="clearfix"></div>
						<div class="bot-border"></div>
						<!--Student ID-->
			            <div align="center" class="row">
				            <div class="col-sm-6">
				            	<div class="col-sm-4">
				            	</div>
				            	<div class="col-sm-8">
				            	<h4 class="tital font">SEMESTER : </h4>
				            	</div>
				            </div>   
				            <div class="col-sm-6">
				            	<div class="col-sm-4">
				            	</div>
				            	<div class="col-sm-8">
				            	<h4 class="tital answer_font">
				            	<?php
				            		$id=$_SESSION["stu_id"];
				            		$sql="SELECT semester from student WHERE sid='$id'";
				            		$result=$conn->query($sql);
							          if($result->num_rows===1)
							          {
							            $row = mysqli_fetch_assoc($result);
							              echo $row["semester"];
							          } 
				            	?>
				            	</h4>
				            	</div>
				            </div>   
			            </div>
						<div class="clearfix"></div>
						<div class="bot-border"></div>
						<!--Student ID-->
			            <div align="center" class="row">
				            <div class="col-sm-6">
				            	<div class="col-sm-4">
				            	</div>
				            	<div class="col-sm-8">
				            	<h4 class="tital font">EMAIL ID : </h4>
				            	</div>
				            </div>   
				            <div class="col-sm-6">
				            	<div class="col-sm-4">
				            	</div>
				            	<div class="col-sm-8">
				            	<h4 class="tital answer_font">
				            	<?php
				            		$id=$_SESSION["stu_id"];
				            		$sql="SELECT email from student_details WHERE sid='$id'";
				            		$result=$conn->query($sql);
							          if($result->num_rows===1)
							          {
							            $row = mysqli_fetch_assoc($result);
							            
							              echo $row["email"];
							            
							          } 
				            	?>
				            	</h4>
				            	</div>
				            </div>   
			            </div>
						<div class="clearfix"></div>
						<div class="bot-border"></div>
						<!--Contsct number-->
			            <div align="center" class="row">
				            <div class="col-sm-6">
				            	<div class="col-sm-4">
				            	</div>
				            	<div class="col-sm-8">
				            	<h4 class="tital font">CONTACT NUMBER : </h4>
				            	</div>
				            </div>   
				            <div class="col-sm-6">
				            	<div class="col-sm-4">
				            	</div>
				            	<div class="col-sm-8">
				            	<h4 class="tital answer_font">
				            	<?php
				            		$id=$_SESSION["stu_id"];
				            		$sql="SELECT phone_no from student_details WHERE sid='$id'";
				            		$result=$conn->query($sql);
							          if($result->num_rows===1)
							          {
							            $row = mysqli_fetch_assoc($result);
							            
							              echo $row["phone_no"];
							            
							          } 
				            	?>
				            	</h4>
				            	</div>
				            </div>   
			            </div>
						<div class="clearfix"></div>
						<div class="bot-border"></div>
						<!--DAte of Birth-->
			            <div align="center" class="row">
				            <div class="col-sm-6">
				            	<div class="col-sm-4">
				            	</div>
				            	<div class="col-sm-8">
				            	<h4 class="tital font">DATE OF BIRTH : </h4>
				            	</div>
				            </div>   
				            <div class="col-sm-6">
				            	<div class="col-sm-4">
				            	</div>
				            	<div class="col-sm-8">
				            	<h4 class="tital answer_font">
				            		<?php
				            		$id=$_SESSION["stu_id"];
				            		$sql="SELECT dob from student_details WHERE sid='$id'";
				            		$result=$conn->query($sql);
							          if($result->num_rows===1)
							          {
							            $row = mysqli_fetch_assoc($result);
							            
							              echo $row["dob"];
							            
							          } 
				            	?>
				            	</h4>
				            	</div>
				            </div>   
			            </div>
						<div class="clearfix"></div>
						<div class="bot-border"></div>
						<?php $conn->close();?>
					</div>
							<!-- /.box-body -->
					</div>
								 <!-- /.box -->

				</div>
			</div> 
		</div>
	</div>  
    </div>
	</div>
</body>
</html>