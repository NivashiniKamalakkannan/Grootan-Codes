<?php

$con = mysqli_connect("localhost", "root", "", "web") or die(mysqli_error($con));
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$country = $_POST['country'];

if ( empty($firstname) || empty($lastname) || empty($email) || empty($phone) || empty($gender) || e
mpty($country)) {
echo "All fields are required <br/> Please enter all fields";
}
else{

$user_registration_query = "insert into signup (firstname, lastname, email, phone, gender, countr
y) values ('$firstname', '$lastname', '$email', '$phone', '$gender', '$country')";

$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error(
$con));

$select_query= "SELECT * FROM signup WHERE firstname='$firstname'";

$select_query_result=mysqli_query($con, $select_query) or die(mysqli_error($con));
$row=mysqli_fetch_array($select_query_result);

echo $row['firstname']."<br/>";
echo $row['lastname']."<br/>";
echo $row['email']."<br/>";
echo $row['phone']."<br/>";
echo $row['gender']."<br/>";
echo $row['country']."<br/>";
}
?>