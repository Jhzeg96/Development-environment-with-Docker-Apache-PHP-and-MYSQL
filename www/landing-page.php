<?php 
if(!isset($_SESSION))
{
    session_start();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
    include "./navbar.php";
    if(isset($_SESSION['email']) && isset($_SESSION['password']))
    {
        echo "<div class='d-flex align-items-center justify-content-center' style='height: 450px'>
                    <div class='p-2 bd-highlight col-example'><h1>Welcome to the landing page</h1></div>
              </div>";
    }
    else
    {
        echo "<div class='d-flex align-items-center justify-content-center' style='height: 450px'>
                    <div class='p-2 bd-highlight col-example'><h1>Login to see this page</h1></div>
              </div>";
    }
?>
</body>
</html>


