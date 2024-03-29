<?php
  require_once('./includes/logic/config.php');
  require_once('./includes/logic/server.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>MIU Student`s Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!-- bootstrap css  -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- bootstrap icons  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
    />
    <!-- customized css  -->
    <link href="./assets/css/login-one.css" rel="stylesheet" />
  </head>

  <body>
    <div class="wrapper">
      <div class="containers">
        <div class="col-left">
          <div class="login-text">
            <h5><img src="./assets/image/user.jpeg" alt="Logo" /></h5>
            <h2 class="">Metropolitan</h2>
            <h3 class="">International</h3>
            <h4 class="mb-3">University</h4>
            <a target="_blank" class="btn" href="https://miu.ac.ug/">Read More</a>
            <br>
          </div>
        </div>
        <div class="col-right">
          <div class="login-form">
            <h5>Login</h5>
            <form method="post" action="login-one.php">
              <p>
                <span class="error"><?php echo $misMatchErr; ?></span>
                <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>" />
                <span class="error"><?php echo $emailErr; ?></span>
              </p>
              <p>
                <input type="password" placeholder="Password" name="password" />
                <span class="error"><?php echo $passwordErr; ?></span>
              </p>
              <p>
                <input class="btn" type="submit" name="login" value="Login" />
              </p>
              <p>
                <a href="#">Forget password?</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- javascript  -->
    <script src="./assets/js/script.js"></script>
  </body>
</html>
