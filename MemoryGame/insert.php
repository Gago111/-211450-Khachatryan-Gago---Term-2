<?php

$con = mysqli_connect('localhost', 'root', 'admin50');

if(!$con)
{
echo 'Not connected to server';
}

if(!mysqli_select_db($con,'players'))
{
echo 'Database not selected';
}

$player1 = $_POST['player1'];
$player2 = $_POST['player2'];

$sql = "INSERT INTO players (player1,player2) VALUES ('$player1','$player2')";

if (!mysqli_query($con,$sql))
{
echo 'There was an error';
}
else
{
echo "Players created";
}

header("refresh:0.5; url=memory.html");

 ?>
