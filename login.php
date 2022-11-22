<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="your_style.css">
    <title>cloudbricstockworld</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
    <center>
        <section class="contact-section">

            <div class="row">
                <h2>CloudbricStockWorld</h2>

                <div class="contact-form">
                    <h1>Login to your account
                    </h1>
                    <p>Securely login to your CloubricStockWorld</p>

                    <?php if (isset($_GET["err"])){ ?>
                        <div style="color: red"><?php echo $_GET["err"];?></div>
                    <?php } ?>

                    <form action="inc/_login.php" method="post">
                        <label for="email">Username</label>
                        <input type="text" placeholder="Enter your email or mobile" name="email" required>
                        <br />

                        <label for="psw">Password</label>
                        <input type="password" id="psw" name="psw" placeholder="your password" required />
                        <div class="button-login">
                            <input name="log_in" type="submit" value="Submit" />
                        </div>

                    </form>
                    <div class="container signin">
                        <p>I don't have an account? <a href="signup.php">Register</a>.</p>
                    </div>
                </div>

            </div>
        </section>
    </center>
</body>
</html>