<nav class="navbar navbar-expand-sm" style = "background-color: #35A7FF">
  <ul class="navbar-nav">
    <?php
        if(!isset($_SESSION['email']) && !isset($_SESSION['password']))
        {
          echo "<li class='nav-item'>
                    <a class='nav-link' style = 'color: white' href='/sign-up/signup-frontend.php'>Sign up</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style = 'color: white' href='/login/login-frontend.php'>Log in</a>
                </li>";
        }
        if(isset($_SESSION['email']) && isset($_SESSION['password']))
        {
            echo "<li class='nav-item'>
                  <a class='nav-link' style = 'color: white' href='/sign-out/sign-out.php'>Sign out</a>
                  </li>";
        }
    ?>
  </ul>
</nav> 