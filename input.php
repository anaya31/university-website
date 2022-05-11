<?php
$server="localhost";
$username="root";
$password="";
$dbname="mytable";
$conn=mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['submit'])){
    if(!empty($_POST['name']) || !empty($_POST['email']) ||!empty($_POST['Subject']) || !empty($_POST['messagee']) ){
$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['Subject'];
$mess=$_POST['message'];

$query="INSERT INTO table1(name,email,subject,message) VALUES('$name','$email','$sub','$mess')";
$run=mysqli_query($conn,$query) or die(mysqli_error());
}
else{
    echo "All fields required!";
}
}

?>