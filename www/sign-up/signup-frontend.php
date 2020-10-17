<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Website</title>
</head>
<body> 
    <?php include "../navbar.php" ?>
    <div class="d-flex align-items-center justify-content-center" style="height: 450px;">
        <div class="bd-highlight col-example">
            <div class = "container">
                <h2>Sign up</h2>
                <div class = "row ">
                    <div class = "col-xl-12">
                        <form id = "signup-form" method="post">
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" name = "email" class="form-control" placeholder="Enter email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" name = "password" class="form-control" placeholder="Enter password" id="password">
                            </div>
                            <button type="submit" class="btn" style = "background-color: #6BF178; color: white">Sign up</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#signup-form').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: 'signup.php',
                    data: $(this).serialize(),
                    success: function(response)
                    {
                        var jsonResponse = JSON.parse(response);

                        if(jsonResponse == 1)
                        {
                          alert("Gracias por registrarte, puedes entrar");
                          location.href = '../login/login-frontend.php';
                        }
                        else
                        {
                          alert(jsonResponse);  
                        }
                    }
              });
            });
        });
  </script>
</body>
</html>