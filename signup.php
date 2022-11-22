<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="your_style.css">
    <title>cloudbricstockworld</title>
</head>
<!--------------font awesome file link------->

<link rel="stylesheet" href="css/all.min.css" />
<link rel="stylesheet" href="css/fontawesome.min.css" />
<!---------------------Bootstrap css-------------------->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" href="WOW-master/css/libs/animate.css" />

<script src="WOW-master/dist/wow.min.js"></script>

<!-----------------------------custom css--------------->
<link rel="stylesheet" href="style.css" />

<body>
    <center>
        <section class="contact-section">
            <div class="row">
                <h2>CloubricStockWorld</h2>

                <div class="contact-form">
                    <h1>Create a Secure Account</h1>
                    <p>
                        Welcome to CloubricStockWorld the future of Savings & Investments
                    </p>
                    
                    <?php if (isset($_GET["err"])){ ?>
                        <div style="color: red"><?php echo $_GET["err"];?></div>
                    <?php } ?>

                    <form action="inc/_signup.php" method="POST">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" placeholder="Your name.."/>
                        <br />

                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Your email.."/>
                        <br />

                        <label for="mobile">Mobile</label>
                        <input type="mobile" name="mobile" placeholder="Your mobile.."/>
                        <br />

                        <label for="mobile">Password</label>
                        <input type="password" name="password" placeholder="Enter your password"/>
                        <br />

                        <label for="mobile">Confirm Password</label>
                        <input type="password" name="confirm_password" placeholder="Re-enter password"/>
                        <br />

                        <label for="message">Message</label>
                        <textarea name="message" placeholder="Write something.." style="height: 150px"></textarea>

                        <div class="button-login">
                            <button name="sign_up" type="submit">Submit</button>
                        </div>

                        <div class="container signin">
                            <p>Already have an account? <a href="login.php">Login</a>.</p>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </center>