<?php
$server="localhost";
$user="root";
$password="";
$db="vidhyavati_university";//after create databse
$conn=mysqli_connect($server,$user,$password,$db);
// if(!$conn)
// {
//    echo"failed";
// }
// else{
//     echo "successful";
// }
// create database
// $sql="CREATE DATABASE vidhyavati_university";
// create tbale
// $sql="CREATE TABLE student_login(ID int not null AUTO_INCREMENT,STUDENTEMAIL VARCHAR(20),PASSWORD VARCHAR(10), primary key(ID))";
// insert data
$sql="  INSERT INTO student_login(STUDENTEMAIL,PASSWORD)VALUES('ankitaprasad123@gmail.com','12345678')";
$q=mysqli_query($conn,$sql);
if(!$q)
{
    echo"failed";
}
else{
    echo "successful";
}
