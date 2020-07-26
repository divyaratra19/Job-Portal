<?php
$connection= mysqli_connect('localhost','root','');
$db=mysqli_select_db($connection,'forum');
if(!$connection)
{
    echo "Connection error";
}

if(isset($_POST['email']))
{
    $email= $_POST['email'];
    $sql = "INSERT INTO maildata (mail) VALUES ('$email')";

if (!mysqli_query($connection, $sql)) {
  echo "Email couldn't be recorded!";
}
    else
    header("Location:index.html"); 
}
mysqli_close($connection);

?>