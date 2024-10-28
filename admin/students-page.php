<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css./bootstrap.min.css">
</head>
<body>


<div class="container mt-5 ">
  <h2>WELCOME</h2>
  <p>All Student data Is Here</p>            
  <table class="table table-striped mt-5">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>ROLL</th>
        <th>BATCH</th>
        <th>YEAR</th>
        <th>STUDENT-EMAIL</th>
        <th>PASSWORD</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
        include('conn.php');
       $sql="SELECT d.ID,d.NAME,d.ROLL,d.BATCH,d.YEAR,
       l.STUDENTEMAIL,l.PASSWORD FROM student_detail_basic d LEFT JOIN student_login l ON d.STUDENTEMAIL_ID = l.ID";

    //    $sql="SELECT * FROM student_login l INNER JOIN student_detail_basic d ON l.ID=d.STUDENTEMAIL_ID ";

        $query=mysqli_query($conn,$sql);
                foreach($query as $row)
                {
                    echo " <tr>";

                        echo " <td>  $row[ID] </td>";
                        echo " <td>  $row[NAME] </td>";
                        echo " <td>  $row[ROLL] </td>";
                        echo " <td>  $row[BATCH] </td>";
                        echo " <td>  $row[YEAR] </td>";
                        echo " <td>  $row[STUDENTEMAIL] </td>";
                        echo " <td>  $row[PASSWORD] </td>";


                    
                        echo" </tr>";
                
                }
?>

    

      </tr>
      
    </tbody>
  </table>
</div>



</body>
</html>