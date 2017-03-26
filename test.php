<?php


$con=mysqli_connect("localhost","testy","1234","feedbox");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="
  SELECT users.usern, feeds.content, feeds.date
  FROM feeds 
  JOIN users ON feeds.userid == users.id
  ORDER BY feeds.date
  ";
$result=mysqli_query($con,$sql);

// Fetch all
mysqli_fetch_all($result,MYSQLI_ASSOC);

// Free result set
mysqli_free_result($result);

mysqli_close($con);
?>


