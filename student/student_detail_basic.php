<?php
session_start();
include('conn.php');
echo" WELCOME " .$_SESSION['student_id'];
$student_idProfile=$_SESSION['student_id'];
      $sql="SELECT * FROM student_login WHERE ID=' $student_idProfile'";
      $q=mysqli_query($conn,$sql);
      $result=mysqli_fetch_assoc($q);
      echo "STUDENT EMAIL : ".$result['STUDENTEMAIL'];
      echo"br";

      echo "STUDENT PASSWORD : ".$result['PASSWORD'];

// $student=$_SESSION['student_id'];
// echo $student['STUDENTEMAIL'];

// $sql="SELECT * FROM student_details p  INNER JOIN student_login c ON p.STUDENTEMAIL=c.ID";
// $query=mysqli_query($conn,$sql);
// $row=mysqli_fetch_assoc($query);
// while($row)
// {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT HOME PAGE</title>
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist./css./bootstrap.min.css">
    <!-- <link rel="stylesheet" href="fontawesome-free-6.6.0-web/css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/min.css">
    <link rel="stylesheet" href="fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="student.css">
    <!-- <link rel="stylesheet" href="mq.css"> -->
</head>
<body>
        <div class="container p-5 my-5 border">
        <h2>STUDENT DETAIL'S</h2>
        <div class="card p-5 my-5 border">
                <table class="table table-striped ">
                        <thead>
                                <tr>
                                        <th>ID</th>
                                        <TH>NAME</TH>
                                        <TH>ROLL</TH>
                                        <TH>BATCH</TH>
                                        <TH>YEAR</TH>
                                        <TH>STUDENT EMAIL</TH>
                                        
                                </tr>
                        </thead>


<tbody>
<?php
// $sql="SELECT * FROM student_details p  INNER JOIN student_login c ON p.STUDENTEMAIL=c.ID";
$sql="SELECT * FROM student_detail_basic where STUDENTEMAIL_ID=$_SESSION[student_id]";
$query=mysqli_query($conn,$sql);
foreach($query as $row)
{
       echo " <tr>";

        echo " <td>  $row[ID] </td>";
        echo " <td>  $row[NAME] </td>";
        echo " <td>  $row[ROLL] </td>";
        echo " <td>  $row[BATCH] </td>";
        echo " <td>  $row[YEAR] </td>";
        echo " <td>  $row[STUDENTEMAIL_ID] </td>";
       
        echo" </tr>";
   
}
?>

 </tbody>
  </table>
</div>
                
 </div>


</body>
</html>

