<?php
  session_start();
  if(empty($_SESSION["teacher_log_id"]))
  {
    header("location:index.php");
    exit(0);
  }
  include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .head{
      font-weight: bold;
      text-align: center;
      padding-bottom: 4%;
      text-decoration: underline;
      font-family: aerial;
  }
    .text{
    font-size: 140%;
    font-family: aerial;
    font-weight: bold;

  }
  .border{
    border-bottom: ridge;
    border-radius: 20px;
    border-spacing:10px;
    border-color:  #4d94ff;
    border-top: ridge;
  }
  .deco{
    text-decoration: none;
    color: #fff;
  }
  .deco:hover{
    text-decoration: none;
    color: #fff;
  }
  .border:hover{
    box-shadow: 0 4px 5px 0;
  }
   @media screen and (max-width: 767px){
    .text{
       font-size: 100%;
    }
    .head{
      font-size: 150%;
      padding-bottom: 1.5%;
    }
   }
  </style>
</head>
<body>
  <div class="container-fluid">
    <?php
        $cid=$_REQUEST['cid2'];
        $_SESSION['cid']=$cid;
        $sql="SELECT cname FROM course WHERE cid='$cid'";
        $result=$conn->query($sql);
        if($result->num_rows===1)
        {
          $row=$result->fetch_assoc();
          echo "<h2 class='head'>";
          echo $row['cname'];
          echo "</h2>";
        }
    ?>
    <!--Row for query one-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">1. Students with x% of attendance</p>
      </div>
      <div class="col-sm-2">
        <a class="deco" href="report_show.php?reportid=1"><button type="button" id='1' class="btn btn-success btn-md">Generate</button></a>
      </div>
    </div>
  <!--Row for query two-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">2. Students above x% of attendance</p> 
      </div>
      <div class="col-sm-2">
        <a class="deco" href="report_show.php?reportid=2"><button type="button" id='2' class="btn btn-success btn-md">Generate</button></a>
    </div>
  </div>
  <!--Row for query three-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">3. Students below x% of attendance</p>
      </div>
      <div class="col-sm-2">
        <a class="deco" href="report_show.php?reportid=3"><button type="button" id='3' class="btn btn-success btn-md">Generate</button></a>
      </div>
    </div>
  <!--Row for query four-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">4. Students present/absent on a particular date</p>
      </div>
      <div class="col-sm-2">
        <a class="deco" href="report_show.php?reportid=4"><button type="button" id='4' class="btn btn-success btn-md">Generate</button></a>
      </div>
    </div>
  <!--Row for query five-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">5. Attendance of a particular student</p>
      </div>
      <div class="col-sm-2">
        <a class="deco" href="report_show.php?reportid=5"><button type="button" id='5' class="btn btn-success btn-md">Generate</button></a>
      </div>
    </div>
  <!--Row for query six-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">6. Average attendance of the whole class</p>
      </div>
      <div class="col-sm-2">
       <a class="deco" href="report_show.php?reportid=6"><button type="button" id='6' class="btn btn-success btn-md">Generate</button></a>
      </div>
    </div>
  <!--Row for query seven-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">7. Students absent for x consecutive classes</p>
      </div>
      <div class="col-sm-2">
        <a class="deco" href="report_show.php?reportid=7"><button type="button" id='7' class="btn btn-success btn-md">Generate</button></a>
      </div>
    </div>
  <!--Row for query eight-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">8. Percentage of attendance of all students till a particular date.
      </div>
      <div class="col-sm-2">
        <a class="deco" href="report_show.php?reportid=8"><button type="button" id='8' class="btn btn-success btn-md">Generate</button></a>
      </div>
    </div>
</body>
</html>

