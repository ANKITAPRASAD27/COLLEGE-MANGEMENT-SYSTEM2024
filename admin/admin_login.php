<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="session_start.php" method="post">
            <h3>ADMIN LOGIN</h3>
            <input type="text" value="ENTER ADMIN" name="admin">
            <input type="text" value="ENTER PASSWORD" name="pass">
            <button type="submit"name="submit">SUBMIT</button>
        </form>
    </div>
</body>
</html>

 <?php
// include('conn.php');

// if(isset($_POST['submit']))
// {
//     $admin=$_POST['admin'];
//     $password=$_POST['pass'];
//     // $sql="select * from admin_login where admin_name='$admin' && password='$admin_password'";
//     $sql="SELECT * FROM admin_login WHERE admin_name='$admin' && password='$password' ";
//     $query=mysqli_query($conn,$sql);
//     $data=mysqli_num_rows($query);
//     // echo $data;
//     if($data==1)
//     {
//         // echo"<script>alert('login successfully')</script>";
//         header('location:admin_dashboard.php');
//     }
//     else
//     {
//         echo"<script>alert('login unsuccessfully')</script>";
//     }


// }

?> -->