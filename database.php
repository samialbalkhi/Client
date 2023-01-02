<?php
const hostName='localhost';
const userName='root';
const password='';
const dbname="employees";

// Create connection
//$conn = new mysqli($servername, $username, $password);

$connection=new mysqli(hostName,'root','',dbname);
// if($connection->connect_error){
//     echo "error connection ";
// }else{
//     echo 'connection success';
// }
?>