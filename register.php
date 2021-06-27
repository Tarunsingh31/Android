<?php



$con = mysqli_connect("localhost","u470644487_Ranarinku","Ranarinku1322","u470644487_Ranarinku");


$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

//
//

$sql = "INSERT INTO register "(name,email,password)VALUES('$name', '$email' , '$password')";

$result = mysqli_query($con,$sql);

if($result){

echo "registered succefully";

}

else{

echo "some error";

}



















?>
