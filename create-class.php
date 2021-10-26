<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{
if(isset($_POST['submit']))
{
$courses_name=$_POST['courses_name'];
$coursenamenumeric=$_POST['coursenamenumeric']; 
$course_level=$_POST['course_level'];
$sql="INSERT INTO  courses(courses_name,coursenamenumeric,course_level) VALUES(:courses_name,:coursenamenumeric,:course_level)";
$query = $dbh->prepare($sql);
$query->bindParam(':courses_name',$courses_name,PDO::PARAM_STR);
$query->bindParam(':coursenamenumeric',$coursenamenumeric,PDO::PARAM_STR);
$query->bindParam(':course_level',$course_level,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Course Created successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Admin Create Course</title>
        <link rel="stylesheet" href="css/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
         <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            <?php include('includes/topbar.php');?>   
          <!-----End Top bar>
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

<!-- ========== LEFT SIDEBAR ========== -->
<?php include('includes/leftbar.php');?>                   
 <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Create Student Course</h2>
                                </div>
                                
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            							<li><a href="#">Courses</a></li>
            							<li class="active">Create Course</li>
            						</ul>
                                </div>
                               
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                             

                              

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Create Student Course</h5>
                                                </div>
                                            </div>
           <?php if($msg){?>
<div class="alert alert-success left-icon-alert" role="alert">
 <strong>Well done!</strong><?php echo htmlentities($msg); ?>
 </div><?php } 
else if($error){?>
    <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
                                        </div>
                                        <?php } ?>
  
                                            <div class="panel-body">

                                                <form method="post">
                                                    <!-- <div class="form-group has-success">
                                                        <label for="success" class="control-label">Course Name</label>
                                                		<div class="">
                                                			<input type="text" name="courses_name" class="form-control" required="required" id="success">
                                                            <span class="help-block">Eg- Certificate In Software Development, International Computer Driving Licence,Cisco Certified Network Associate etc</span>
                                                		</div>

                                                	</div> -->

                                                    <div class="form-group has-success">
          <label for="success" class="control-label">Course Name</label>
     <select name="courses_name" class="form-control" id="default" required="required">
<option value="">Select Course</option>

        <option value="Certificate in Software Development">Certificate in Software Development</option>
        <option value="Cisco Certified Network Associate">Cisco Certified Network Associate</option>
        <option value="Cisco Certified Network Professionals">Cisco Certified Network Professionals</option>
		<option value="International Computer Driving Licence">International Computer Driving Licence</option>
		<option value="Cyber Security">Cyber Security</option>
		<option value="Network Information Security">Network Information Security</option>
		<option value="Certified Information System Auditor">Certified Information System Auditor</option>
		<option value="Big Data Analytics">Big Data Analytics</option>
		<option value="Web Technologies">Web Technologies</option>
		<option value="Java Programming">Java Programming</option>
		<option value="Computing Infrastructure Systems & Security">Computing Infrastructure Systems & Security</option>

 </select>
                                                    </div>





                                                       <div class="form-group has-success">
                                                        <label for="success" class="control-label">Course Name in Numeric</label>
                                                        <div class="">
                                                            <input type="number" name="coursenamenumeric" required="required" class="form-control" id="success">
                                                            <span class="help-block">Eg- 1,2,4,5 etc</span>
                                                        </div>
                                                    </div>
                                                     <div class="form-group has-success">
                                                        <label for="success" class="control-label">Course Level</label>
                                                        <div class="">
                                                            <input type="text" name="course_level" class="form-control" required="required" id="success">
                                                            <span class="help-block">Eg- CSD1.3,ICDL7.3,CCNA8.2,CISA2.1,NIS3.3 etc</span>
                                                        </div>
                                                    </div>
  <div class="form-group has-success">

                                                        <div class="">
                                                           <button type="submit" name="submit" class="btn btn-success btn-labeled">Submit<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    </div>


                                                    
                                                </form>

                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-8 col-md-offset-2 -->
                                </div>
                                <!-- /.row -->

                               
                               

                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>



        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
<?php  } ?>
