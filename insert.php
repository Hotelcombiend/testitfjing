<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070141_databaseitf', 'WPFlhu83', 'test', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['Name'];
$height = $_POST['Height'];
$weight = $_POST['Weight'];
$bmi = $weight / (($height / 100) ** 2)


$sql = "INSERT INTO test (name , height , weight, bmi) VALUES ('$name', '$height', '$weight', '$bmi')";

if (mysqli_query($conn, $sql)) {
  echo "<script type='text/javascript'>";
    //echo "New record created successfully";
    echo "window.location = 'show.php'; ";
  echo "</script>";

  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
