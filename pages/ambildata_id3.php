<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sig";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM bulog where id_bulog=".$id;
$result = $conn->query($sql);

if($result){
 $posts = array();
      if(mysqli_num_rows($result))
      {
             while($post = mysqli_fetch_assoc($result)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));
      echo $data;                     
}
$conn->close();
?>