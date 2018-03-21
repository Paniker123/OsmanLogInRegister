<?php
/* Main page with two forms: sign up and log in */
require '../sql/db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Delivery system ">
    <meta name="keyboards" content="Delivery system for the city of Makeni">
    <meta name="author" content="Osman Chernor Kamara">
    <title>Acme Web Design | About</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Sign-Up/Login Form</title>
    <?php include '../css/css.html'; ?>
</head>
<body>
<header>
    <div class="container">
        <div id="branding">
            <h2><span class="highlight">MAKENI</span> Delivery System</h2>
        </div>

        <div class="login">
            <nav>
                <ul>
                    <input type="text" name="search" placeholder="Search..">

                    <li><a href="index1.php">login</a></li>
                    <li class="current"><a href="index.php">registration</a></li>
                    </span class="positioning">
                </ul>
            </nav>
        </div>
    </div>
</header>
<section id="nav">
    <div class="container">
        <nav>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="../about.html">About</a></li>
                <li><a href="../services.html">Services</a></li>
                <li><a href="../news.html">News</a></li>
                <li><a href="../contact.html">Contact</a></li>
            </ul>
        </nav>
    </div>
</section>

<section id="showcase">
    <div class="container">
        <div class="banner">

            <img src="/img/post.jpg" width="10%">

            <h3>Best Delivery System in the sub region</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            </p>
        </div>
    </div>

</section>

<section id="newsletter">
    <div class="container">
        <h1>Subscribe to our newsletter</h1>
        <form>
            <input type="email" placeholder="Enter Email">
            <button type="submit" class="button_1">Subscribe</button>
        </form>
    </div>
</section>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';

    } elseif (isset($_POST['register'])) { //user registering

        require 'register.php';

    }
}
?>

<body>
<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
    </ul>

    <div class="tab-content">


    </div>

    <div id="signup">
        <h1>Sign Up for Free</h1>

        <form action="index.php" method="post" autocomplete="off">

            <div class="top-row">
                <div class="field-wrap">
                    <label>
                        First Name<span class="req">*</span>
                    </label>
                    <input type="text" required autocomplete="off" name='firstname'/>
                </div>

                <div class="field-wrap">
                    <label>
                        Last Name<span class="req">*</span>
                    </label>
                    <input type="text" required autocomplete="off" name='lastname'/>
                </div>
            </div>

            <div class="field-wrap">
                <label>
                    Email Address<span class="req">*</span>
                </label>
                <input type="email" required autocomplete="off" name='email'/>
            </div>

            <div class="field-wrap">
                <label>
                    Set A Password<span class="req">*</span>
                </label>
                <input type="password" required autocomplete="off" name='password'/>
            </div>

            <button type="submit" class="button button-block" name="register"/>
            Register</button>

        </form>

    </div>

</div><!-- tab-content -->

</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="../js/index.js"></script>


<footer>
    <p>Acme web Design, Copyright &copy;2017</p>
</footer>
</body>
</html>



