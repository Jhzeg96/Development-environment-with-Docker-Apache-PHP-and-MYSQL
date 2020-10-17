<?php
require_once('../classes/user.php');
require_once('../database-connection.php');

$user = new User($connection);
$email = $_POST['email'];
$password = $_POST['password'];
 
if(!empty($email) && !empty($password))
{
    if($user->userExists($email, $password))
    {
        if(!isset($_SESSION))
        {
            session_start();
        }
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        echo json_encode(1);
    }
    else
    {
        echo json_encode("El usuario no existe");
    } 
}
else
{
    echo json_encode("Llena todos los datos");
}

?>