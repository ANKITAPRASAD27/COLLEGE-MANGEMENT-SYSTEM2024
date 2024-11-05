<?php
session_start();
include('conn.php');
if(isset($_POST['submit']))

{
    $email=$_POST['un'];
    $pwd=$_POST['pass'];
    $sql="SELECT * FROM student_login WHERE STUDENTEMAIL='$email' and PASSWORD='$pwd'";
      $q=mysqli_query($conn,$sql);
      $total=mysqli_num_rows($q);
      // echo $total;
      if($total==1)
      {
        // echo"ok";
          // // FETCH ID
          $fetch_id="SELECT ID FROM student_login WHERE STUDENTEMAIL='$email'";
          $query=mysqli_query($conn,$fetch_id);
          $student_login_id=mysqli_fetch_array($query);
          foreach($student_login_id as $result)
          {
            // echo $result;
            
            $_SESSION['student_id']=$result;
          }
          // echo  $student_login_id;





       
        echo "<script>alert('LOGIN SUCCESSFULLY')</script>";

        // header('location:student_home.php');
        
      }
      else{
        echo"unsuccesfully ";
        
        header('location:vu_university.php');

        
      }

}
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
 
<div class="container-fluid">
            <!-- navbar -->
   <nav class="navbar navbar-expand-sm navbar-dark navbarhead">
     <div class="container-fluid">
      <!-- <h4>WELCOME</h4> -->
      <?php
      echo" WELCOME " .$_SESSION['student_id'];
      $student_idProfile=$_SESSION['student_id'];
      $sql="SELECT * FROM student_login WHERE ID=' $student_idProfile'";
      $q=mysqli_query($conn,$sql);
      $result=mysqli_fetch_assoc($q);
      echo "STUDENT EMAIL : ".$result['STUDENTEMAIL'];
      echo"br";

      echo "STUDENT PASSWORD : ".$result['PASSWORD'];

      ?>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
 <div class="collapse navbar-collapse navhead-links" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="student_home.php">DASHBOARD</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" class="change-link" onclick="openPopup()">CHANGE PASSWORD</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="student_logout.php">LOGOUT</a>
                      </li> 
                     
                    </ul>
                  </div>
                </div>
</nav>

<!-- my images slider -->
 <div class="imgslider"></div>
<!-- CARDpart-->
<div class="container-fluid  mt-3  cards">
    <!-- card1 -->
   
    <div class="card" style="width:400px">
     <h2>STUDENT DETAIL'S</h2>
      <div class="card-body">
        <h4 class="card-title"></h4>
        <p class="card-text">"Success in engineering isn’t about knowing all the answers but about embracing challenges, thinking critically, and learning from every failure. The future belongs to those who innovate today."</p>
        <a href="student_detail_basic.php" class="btn btn-primary">CLICK ME</a>
      </div>
    </div>

    <!-- card2 -->
    
    <div class="card" style="width:400px">
      <h2>MENTOR</h2>
      <div class="card-body">
       
        <p class="card-text">"Success in engineering isn’t about knowing all the answers but about embracing challenges, thinking critically, and learning from every failure. The future belongs to those who innovate today."</p>
        <a href="#" class="btn btn-primary">CLICK ME</a>
      </div>
    </div>

    <!-- card3 -->
   
    <div class="card" style="width:400px">
     <H2>RESULT</H2>
      <div class="card-body">
       
        <p class="card-text">"Success in engineering isn’t about knowing all the answers but about embracing challenges, thinking critically, and learning from every failure. The future belongs to those who innovate today."</p>
        <a href="#" class="btn btn-primary">CLICK ME</a>
      </div>
    </div>

    <!-- card4 -->

    <div class="card" style="width:400px">
     <h2>ONLINE EXAM</h2>
      <div class="card-body">
        
        <p class="card-text">"Success in engineering isn’t about knowing all the answers but about embracing challenges, thinking critically, and learning from every failure. The future belongs to those who innovate today."</p>
        <a href="#" class="btn btn-primary">CLICK ME</a>
      </div>
    </div>
    
</div>





<!-- pop up msg -->
  <!-- <div class="popup" id="popup">
    <img src="./IMAGES/asset 61.png" alt="">
    <h2>THANK U</h2>
    <P>WELCOME</P>
    <button type="button" onclick="closePopup()">ok</button>
  </div>
  -->
  <div class="container-fluid  mt-3 bg-dark footer">

    <h3 style="color: aliceblue;text-align: center;">vidhyavati unversity@gmail.com</h3>

  </div> 

</div>
<!-- student popup form -->
<div class="popup-form" id="popup-form">
    <form action="" method="POST">
      <h3>CHANGE  PASSWORD</h3>
      <label for=""><i class="fa-regular fa-user" style="margin-right: 10px;"></i>EMAIL</label>
     
      <input type="text" name="un" class="input-area">
      
      <label for=""><i class="fa-regular fa-key" style="margin-right: 10px;"></i>OLD PASSWORD</label>
      
      <input type="text" name="oldpass" class="input-area">

      <label for=""><i class="fa-regular fa-key" style="margin-right: 10px;"></i>NEW PASSWORD</label>
      
      <input type="text" name="newpass" class="input-area">
      <a href="#">forget password ?</a>
      <div class="button">
        
      <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
      <button type="button" class="btn btn-danger" onclick="closePopup()">CANCLE</button>
    </div>
  </form>


   <script src="bootstrap.min.js"></script>
   <script>
    let pop = document.getElementById("popup-form");
    function openPopup()
    {
          pop.classList.add("open-Popup");
    }
    function closePopup()
    {
          pop.classList.remove("open-Popup");
    }
    
    
   
   </script>

</body>
</html>


<?php
include('conn.php');
if(isset($_POST['update']))
{
    $email=$_POST['un'];
    $oldpass=$_POST['oldpass'];
    $newpass=$_POST['newpass'];

    $sql="UPDATE student_login set PASSWORD='$newpass' WHERE STUDENTEMAIL='$email'";
    $query=mysqli_query($conn,$sql);
    if($query)
    {
        echo"<script>alert('yes upadte')</script>";
    }
    else
    {
        echo"no";
    }


}

?>