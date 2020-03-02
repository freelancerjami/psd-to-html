<?php
$localhost='localhost';
$dbuser='root';
$dbpassord='';
$dbdatabes='php-ajax';

$con=mysqli_connect($localhost,$dbuser,$dbpassord,$dbdatabes);
if($con){
    
    // echo 'Connection';
}else{
    echo 'Database connection failed!';
}

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


if(empty($name)&&empty($email)&&empty($password)){
	echo "Input filup the form";
}else{

$query="INSERT INTO  ajax (name,email,password) VALUES ('$name','$email','$password') ";
    $query_run=mysqli_query($con,$query);

if($query_run){
	echo "Data insert sucessfully";
}else{
	echo "Data not insert";
}

}











?>