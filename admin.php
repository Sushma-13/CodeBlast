<html>
    <head><title>Admin Portal</title>
        <link rel="stylesheet" href="styles.css">

    </head>
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
echo"Hey ";
echo $_SESSION['username'] ."<br>";
echo "<h1 style='text-align:center;'> Prepare your quiz here</h1> ";
    echo "<a href='logout.php' class='button1' style='float:right;'>LOGOUT</a>";
//print_r($_SESSION);
echo "<br>";
?>
<!-------------------------------------------------------->

    <div style="border:1px solid white;width:450px;padding-left:50px;margin-left:400px;" >
<h1>Input Questions</h1>
<form action=admin.php method="post">
    <table>
        <tr>
            <td> QUESTION:</td> <td><input type="text" name="question"></td></br>
    </tr>
    <tr>
<td>Option 1:</td><td><input type="text" name="option1"></br></td></tr>
<td>Option 2:</td><td><input type="text" name="option2"></br></td></tr>
<td>Option 3:</td><td><input type="text" name="option3"></br></td></tr>
<td>Option 4:</td><td><input type="text" name="option4"></br></td></tr>
<td>Answer:</td><td><input type="text" name="answer"></br></td></tr>
<tr>
<td><input class="button1" type="submit" name="Submit" ></td></br></tr>
</table>
</form>
</div>
<?php
if(isset($_POST['question'])||isset($_POST['option1'])||isset($_POST['option2'])||isset($_POST['option3'])||isset($_POST['option4'])){
$question=$_POST['question'];
$option1=$_POST['option1'];
$option2=$_POST['option2'];
$option3=$_POST['option3'];
$option4=$_POST['option4'];
$answer=$_POST['answer'];
$qi="insert into questions(question,option1,option2,option3,option4,answer) values('$question','$option1','$option2','$option3','$option4','$answer' ) ";
mysqli_query($con,$qi);
}
?>
<!--------------------------------------------------------->
<?php
$q="select * from questions";
$result= mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>=1){
    while($row=mysqli_fetch_assoc($result)){
        echo $row['id'].")  ".$row['question']."<br>"; 
        echo "a)  ".$row['option1']."<br>";
        echo "b)  ".$row['option2']."<br>";
        echo "c)  ".$row['option3']."<br>";
        echo "d)  ".$row['option4']."<br>";
        echo "Answer: ".$row['answer']."<br><br><br>";
    }
}
?><br>
</html>

