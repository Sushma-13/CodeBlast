<html>
    <head><title>Test</title></head>
    <link rel="stylesheet" href="styles.css">
    <body>
<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
$con=mysqli_connect('localhost','root');
if($con){
    //echo "connection successfull";
}
else{
    echo "not connected";
}
mysqli_select_db($con,'sessionpractical');
echo"<header><h1 style='text-align:center; font-size:40px;'>CodeBlast</h1><div class='test-header'>Welcome ";
echo $_SESSION['username'] ."";
echo "<a class='button1' href='logout.php' style='float:right; '>LOGOUT</a>";
    echo"</div></header>";
        
        
        
//--------------------------------------------
//print_r($_SESSION);
echo "<br>";
$username=$_SESSION['username'];
$password=$_SESSION['userpass'];
/*$q="select * from signin where name='$username' and password='$password' ";
$result= mysqli_query($con,$q);
$num=mysqli_num_rows($result);
}*/

       /* $sql="select max(id) as size from questions";
        $result1= mysqli_query($con,$sql);
        $row1=mysqli_fetch_assoc($result1);
        $size=$row1['size'];
        $i=1;
        */
        //---------------------------------------------------
$q="select id,question,option1,option2,option3,option4 from questions    ";
$result= mysqli_query($con,$q);
$num=mysqli_num_rows($result);
echo "<div class='test-div'>
<form action='result.php' method='post'>";
if($num>=1){
    while($row=mysqli_fetch_assoc($result)){
        echo $row['id'].")  ".$row['question']."<br>";
       ?>
        
         <input type='radio' name="quizcheck[<?php echo $row["id"];?>]" value='A'><?php echo $row["option1"] ?><br>
         <input type='radio' name="quizcheck[<?php echo $row["id"];?>]" value='B'><?php echo $row["option2"] ?><br>
         <input type='radio' name="quizcheck[<?php echo $row["id"];?>]" value='C'><?php echo $row["option3"] ?><br>
         <input type='radio' name="quizcheck[<?php echo $row["id"];?>]" value='D'><?php echo $row["option4"] ?>
            </div><br>
        <?php
    }
}
            

echo "<input class='button1' type='submit' value='Submit'>";
echo "</form>";
        
?><br>
        
        </body>
</html>