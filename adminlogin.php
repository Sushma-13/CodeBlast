<?php
session_start();

$con=mysqli_connect('localhost','root');
if($con){
    echo "connection successfull";
}
else{
    echo "not connected";
}
mysqli_select_db($con,'sessionpractical');
$name=$_POST['user'];
$pass=$_POST['password'];
if($name=="admin" && $pass=="admin"){
    $_SESSION['username']=$name;
   $_SESSION['userpass']=$pass;
    
    header('location:admin.php');
}

/*$q="select * from signin where name='$name' and password='$pass' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){ 
    $_SESSION['username']=$name;
   $_SESSION['userpass']=$pass;
    
    header('location:admin.php');
}*/
else{
    header('location:login.php');
}
?>