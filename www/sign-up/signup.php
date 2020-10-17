<?php
require_once('../classes/user.php');
require_once('../database-connection.php');

$user = new User($connection);
$email = $_POST['email'];
$password = $_POST['password'];

if(!empty($email) && !empty($password))
{
    if($user->signUpUser($email, $password))
    {
        echo json_encode(1);
    }
    else
    {
        echo json_encode("An error ocurred, try again");
    }
}
else
{
    echo json_encode("Fill all the data");
}

?>