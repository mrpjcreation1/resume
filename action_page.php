<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "login_page";


$con = mysqli_connect($server,$username,$password,$db);

if(!$con){
   die("failed". mysqli_connect_error());
}
// else {
//     echo "connected";
// }

if (isset($_POST["submit"]))
   {

$name =$_POST['name'];
// echo $email;exit;
$class = $_POST['class'];

$age = $_POST['age'];




$sql = "INSERT INTO `login1` (`name`, `class`, `age`) VALUES ('$name','$class','$age');";

// echo $sql;
  if($con->query($sql) == true){
    echo "<h1>
    ~i~
    </h1>
    ";
    $insert = true;
 }else{
     echo "<h1>error</h1>";
 }


   }

$con->close();

?>