<?php
session_start();
include('conn.php');

if(isset($_POST['submit']))
{
    $admin=$_POST['admin'];
    $password=$_POST['pass'];
    // $sql="select * from admin_login where admin_name='$admin' && password='$admin_password'";
    $sql="SELECT * FROM admin_login WHERE admin_name='$admin' && password='$password' ";
    $query=mysqli_query($conn,$sql);
    $datatotal=mysqli_num_rows($query);
    // echo $data;
    if($datatotal==1)
    {
            $_SESSION['admin_name']= $admin;
            header('location:admin_dashboard.php');

    }
    else
    {
        echo"<script>alert('login unsuccessfully')</script>";
    }


}

?>