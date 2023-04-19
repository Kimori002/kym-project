<?php

$connection = mysqli_connect('localhost','root','','<!--database name-->');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $service = $_POST['service'];
    $vehicle = $_POST['vehicle'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

$request = " insert into book_form(name, email, phone, address, service, vehicle, arrivals, leaving) values('$name','$email','$phone','$address','$service','$vehicle','$arrivals','$leaving')";

mysqli_query($connection, $request);

header('location:book.php');
}else{
    echo 'Enter details in correct slots!!!!';
}

?>