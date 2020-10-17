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
        echo json_encode("Ocurrio un error, vuelve a intentar");
    }
    //echo json_encode("Correctamente registrado, ya puedes logearte");
}
else
{
    echo json_encode("Llena todos los datos");
}

?>