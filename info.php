<?php


$con=mysqli_connect('localhost','root');
if($con){
	echo "Connection successfully";

}
else{
	echo "Connection is not successfully connected";
}
mysqli_select_db($con,'youtubeuserdata');


$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['user'];
$comment = $_POST['comment'];


$query="insert into userinfodata(user,email,mobile,comment)
values('$user','$email','$mobile','$comment')";
mysqli_query($con,$query);

echo "$query";

header('Location:index.php');
?>