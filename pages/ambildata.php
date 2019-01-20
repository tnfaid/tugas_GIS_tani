<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_sistem";
$Q = mysqli_query("SELECT * FROM jasaweb")or die(mysqli_error());
if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
             while($post = mysqli_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));
      echo $data;                     
}

?>