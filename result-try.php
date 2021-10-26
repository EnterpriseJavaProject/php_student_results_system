<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>


    </head>
    <body>



    <style>
table{
  width:100%;
  table-layout: fixed;
  border-collapse: collapse;
}

th{
  /* padding: 20px 15px; */
  font-weight: 500;
  font-size: 14px;
  color: black;
  text-transform: uppercase;
}
td {
  border: 2px solid #726E6D;
  padding: 15px;
  color:black;
  text-align:center;
}


</style>



        <div class="main-wrapper">
            <div class="content-wrapper">
                <div class="content-container">

         
                    <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-12">
                                    

                             <center>   <img src="images/aiti.png" alt="" width="350" height="80"> </center>

                               <!--   <h2 class="title" align="center">Result Management System</h2>  -->

                                </div>
                            </div>
                            <!-- /.row -->
                          
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section" id="exampl">
                            <div class="container-fluid">

                                <div class="row">
                              
                             

                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5 align="center"> GHANA-INDIA KOFI ANNAN CENTRE OF EXCELLENCE IN ICT(AITI-KACE)
<br>
TRANSCRIPT OF ACADEMIC RECORD
                                                   
                                                    </h5>

                                                    <hr />
<?php
// code Student Data
$rollid=$_POST['rollid'];
$classid=$_POST['class'];
$_SESSION['rollid']=$rollid;
$_SESSION['classid']=$classid;
$qery = "SELECT   admission_table.StudentName,admission_table.StudentEmail, admission_table.Gender, admission_table.DOB, admission_table.RollId,admission_table.RegDate,admission_table.StudentId,admission_table.Status,courses.courses_name,courses.course_level from admission_table join courses on courses.id=admission_table.ClassId where admission_table.RollId=:rollid and admission_table.ClassId=:classid ";
$stmt = $dbh->prepare($qery);
$stmt->bindParam(':rollid',$rollid,PDO::PARAM_STR);
$stmt->bindParam(':classid',$classid,PDO::PARAM_STR);
$stmt->execute();
$resultss=$stmt->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($stmt->rowCount() > 0)
{
foreach($resultss as $row)
{   ?>


<table cellpadding="0" cellspacing="0" border="0"> 
    <thead>
        <tr style="text-align: center">
            <th style="text-align: center"><p><b>Student Name :</b> <?php echo htmlentities($row->StudentName);?></th>
            <th style="text-align: center"> <p><b>Student Id :</b> <?php echo htmlentities($row->RollId);?></th> 
            <th style="text-align: center"><p><b>Date of Birth :</b> <?php echo htmlentities($row->DOB);?></th>    
        </tr>
    </thead>


    <thead>
        <tr style="text-align: center">
            <th style="text-align: center"><p><b>Course:</b> <?php echo htmlentities($row->courses_name);?>(<?php echo htmlentities($row->course_level);?>)</th>
            <th style="text-align: center"><p><b>Gender:</b> <?php echo htmlentities($row->Gender);?></th>
            <th style="text-align: center"><p><b>Contact :</b> 0206459845</th> 

        </tr>
    </thead>



    <thead>
        <tr style="text-align: center">
        <th style="text-align: center"><p><b>Certification Date:</b> 11/11/2022 </th>
            <th style="text-align: center"><p><b>Course Start Date:</b> 20/02/2021 </th>
            <th style="text-align: center"><p><b>Course End Date:</b> 28/09/2021 </th>  
        </tr>
    </thead>



</table>

<?php }

    ?>

    
                                            </div>
                                            <div class="panel-body p-20">







                                                <table class="table table-hover table-bordered" border="1" width="100%">
                                                <thead>
                                                        <tr style="text-align: center">
                                                            <!-- <th style="text-align: center"><b>#</b></th> -->
                                                            <th colspan="2" rowspan="2" style="text-align: center"><b> Modules</b></th>  
                                                             <th  style="text-align: center"><b>Assignment</b></th>
                                                             <th  style="text-align: center"><b>Exams</b></th>
                                                            <th  style="text-align: center"><b>Project</b></th>  
                                                             <th  style="text-align: center"><b>Marks</b></th>
                                                             <th  style="text-align: center"><b>Grade</b></th>
                                                        </tr>
                                               </thead>
  


                                                	
                                                	<tbody>
<?php                                              
// Code for result

 $query ="select t.StudentName,t.RollId,t.ClassId,t.marks,SubjectId,modules.modulename from (select sts.StudentName,sts.RollId,sts.ClassId,tr.marks,SubjectId from admission_table as sts join  results_table as tr on tr.StudentId=sts.StudentId) as t join modules on modules.id=t.SubjectId where (t.RollId=:rollid and t.ClassId=:classid)";
$query= $dbh -> prepare($query);
$query->bindParam(':rollid',$rollid,PDO::PARAM_STR);
$query->bindParam(':classid',$classid,PDO::PARAM_STR);
$query-> execute();  
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($countrow=$query->rowCount()>0)
{ 
foreach($results as $result){

    ?>

                                                		<tr>
<!-- <th scope="row" style="text-align: center"><?php echo htmlentities($cnt);?></th> -->
<td colspan="2" style="text-align: center"><?php echo htmlentities($result->modulename);?></td>

<th scope="row" style="text-align: center">15</th>
<td style="text-align: center">23</td>
<td style="text-align: center">37</td>





<td style="text-align: center"><?php echo htmlentities($totalmarks=$result->marks);?></td>

      <!-- GRADING SYSTEM -->
<td style="text-align: center"> 

 <?php 


 $marks_grade = $result->marks;
if($marks_grade >= 0 && $marks_grade <= 39){
    echo ("F9");
}else if($marks_grade >= 40 && $marks_grade <= 49){
    echo ("C");
}else if($marks_grade >= 50 && $marks_grade <= 59){
    echo ("B");
}else if($marks_grade >= 60 && $marks_grade <= 69){
    echo ("B+");
}else if($marks_grade >= 70 && $marks_grade <= 79){
    echo ("A");
}else if($marks_grade >= 80 && $marks_grade <= 89){
    echo ("A+");
}else if($marks_grade >= 90 && $marks_grade <= 100){
    echo ("A+");
}

?>

</td>

                                                		</tr>
<?php 
$totlcount+=$totalmarks;
$cnt++;}
?>
<tr>
<th scope="row" colspan="5" style="text-align: center">Total Marks</th>

<td style="text-align: center"><b><?php echo htmlentities($totlcount); ?></b> out of <b><?php echo htmlentities($outof=($cnt-1)*100); ?></b></td>
 <td><b>RESULTS STATUS</b></td>                                                  
</tr>


<tr>
<th scope="row" colspan="5" style="text-align: center">Percentage Pass Score  = <b> 50% </b></th>     
   
<?php

 $perscore = round($totlcount*(100)/$outof,1);



?>


<td style="text-align: center"><b><?php echo  htmlentities($perscore); ?> %</b></td>



<td>

<?php

if($perscore >= 0 && $perscore <= 49){
    echo ("FAIL");
}


else if($perscore >= 50 && $perscore <= 69){
    echo ("PASS");

}

else if($perscore >= 70 && $perscore <= 100){
    echo ("PASS");
}
?>


</td>

</tr>


                              


 <?php } else { ?>     
<div class="alert alert-warning left-icon-alert" role="alert">
                                            <strong>Notice!</strong> Your result not declare yet
 <?php }
?>
                                        </div>
 <?php 
 } else
 {?>

<div class="alert alert-danger left-icon-alert" role="alert">
strong>Oh snap!</strong>
<?php
echo htmlentities("Invalid Student Id");
 }
?>
                                        </div>



                                                	</tbody>
                                                </table>
<center><i class="fa fa-print fa-2x" aria-hidden="true" style="cursor:pointer" titlt="print screen" alt="print screen" onclick="window.print();" ></i></center>

<br><br><br><br><br>

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <i style="position: absolute; bottom:5%;">
            
            <img src="images/sign.jpeg" width="150" height="50"> <br/>

            <span style="font-size: 16px; text-align: left;">Academic Secretary</span>
            
            </i>

            
            <i style="position: absolute; bottom:5%; right: 4%;">
           		<span style="font-size: 16px; float: right;">
           		
       			<img src="images/sign.jpeg" width="150" height="50"> <br/>

         
       			Director of Studies
       			
       			</span>
            </i>

    		
          </div>


 <!-- Page Heading -->
<!-- 
            <i style="position: absolute; bottom:5%;">
            
            <img src="images/sign.jpeg" width="150" height="50"> <br/>
            
    <hr>
            <span style="font-size: 16px; text-align: left;">Academic Secretary</span>
            
            </i>

            

            <i style="position: absolute; bottom:5%; right: 7%;">
           		<span style="font-size: 16px; float: right;">
           		
       			<img src="images/sign.jpeg" width="150" height="50"> <br/>

                   <hr>

       			Director of Studies
       			
       			</span>
            </i> -->

 
   









                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

                                    <div class="form-group">
                                                           
                                                            <div class="col-sm-6">
                                                               <a href="index.php">Back to Home</a>
                                                            </div>
                                                        </div>

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
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {

            });


            function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>


        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->

    </body>
</html>

