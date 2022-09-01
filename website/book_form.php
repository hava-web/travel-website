<?php
  require_once('../constant/connection.php');
   if(isset($_POST['send']))
   {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $order_date = date("y-m-d h:i:sa");
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guest = $_POST['guest'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    $query = "INSERT INTO book_info(name,email,address,location,guest,arrivals,leaving,phone,order_date) values
    ('$name','$email','$address','$location','$guest','$arrivals','$leaving','$phone','$order_date')";

    mysqli_query($connection,$query);
    header('location:book.php');

   }
   else
   {
    echo'Something went wrong try again';
   }

?>