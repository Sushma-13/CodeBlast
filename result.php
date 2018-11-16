<?php
session_start();
$con=mysqli_connect('localhost','root');
if($con){
    //echo "connection successfull";
}
else{
    echo "not connected";
}
mysqli_select_db($con,'sessionpractical');
//----------------------------------------------------
?>
<html>
    <head><title>Result</title>
    <link rel="stylesheet" href="styles.css">
    </head>
    <body>
<?php
$marks=0;
if(isset($_SESSION['submit'])){
$selected=$_POST['quizcheck'];
//print_r($selected);
$i=1;
foreach($_POST['quizcheck'] as  $value){
	$q = "SELECT * FROM questions where id=".$i.";";
	$result= mysqli_query($con,$q);
	$row=mysqli_fetch_assoc($result);
	if($row["answer"]==$value){
		$marks=$marks+1;
	}
    $i++;
}
}
        $q = "Update signin set result=".$marks." where name='".$_SESSION["username"]."'  and password='".$_SESSION["userpass"]."'   ;";
//echo $q;
mysqli_query($con,$q);
        


?>
        <a class='button1' href='logout.php' style='float:right; '>LOGOUT</a>
 <div style="border: 2px solid white;margin-top: 130px;margin-left: 500px;width:340px;text-align:center;"><br><p>You Scored <?php echo"$marks"; ?> </p>
        <p>Thank You for giving the test.</p>
        <p>Please wait for the results of the next round.</p>
        </div>
    </body>
</html>