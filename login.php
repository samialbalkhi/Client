<?php

include 'validation.php';
include "database.php";

$validation = new validation();
if (isset($_POST['login'])) {

    $data=[
        'fat' => $_POST['fat'],
        'gender' =>$_POST['gender'],
        'lastName' => $_POST['lastname'],
        'phone' => $_POST['phone'],
        'date' => $_POST['DateofBirth'],
        'length' => $_POST['length'],
        'fname' => $_POST['farstname'],
        'address' => $_POST['homeadress'],
    ];

 if(  $validation->fatvalidation($data['fat'])
    &&
    $validation->genderValidate($data['gender'])
    &&
    $validation->lengthvalidate($data['length'])
    &&
    $validation->barthevalidation($data['date'])
    &&
    $validation->phonevalidation($data['phone'])
     ){

      $qurey="INSERT INTO users (fat,gender,lastname,phone,DateofBirth,length,farstname,homeadress)VALUES
      ('$data[fat])','$data[gender]','$data[lastName]','$data[phone]','$data[date]','$data[length]','$data[fname]','$data[address]')";
    if ($connection->query($qurey) == true) {
        echo "user insted";
    } else {
        echo "error";
    }
 }else{
    echo 'validation fails';
 }
   
}
