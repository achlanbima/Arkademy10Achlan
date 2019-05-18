<?php
$con = mysqli_connect("localhost","root","","arkademy_achlan");


function query($query){
  global $con;
  $result = mysqli_query($con, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }

  return $rows;
}

function insertUser($data){
  global $con;
  $name = $data['name'];

  $query = "INSERT INTO users VALUES ('','$name')";

  mysqli_query($con, $query);

  return mysqli_affected_rows($con);
}

function insertSkill($data){
  global $con;
  $name = $data['name'];
  $user_id = $data['user_id'];

  $query = "INSERT INTO skills VALUES ('','$name','$user_id')";

  mysqli_query($con, $query);

  return mysqli_affected_rows($con);
}

?>