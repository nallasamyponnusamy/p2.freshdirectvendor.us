<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="Description" content="Farmer's Blog">
    <title>Farmer's Blog</title>
    <link rel="stylesheet" href="css/default.css" />
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

<header>
    <h1><a href="index.html">Home</a></h1>
    <h2>Welcome to <font color="#004000">Farmer's</font> <font color="#FF4640">Blog.</font></h2>
    <!-- Menu for users who are logged in -->
    <?php if($user): ?>

    <h3><a href='/users/logout'>Logout</a>
    <a href='/users/profile'>Profile</a></h3>
        <!-- Menu options for users who are not logged in -->
    <?php else: ?>

        <h3><a href='/users/signup'>Sign up</a>
        <a href='/users/login'>Log in</a></h3>

    <?php endif; ?>


</header>
<section id="mainContent" class="clear">
    <nav>
        <h3>Main Menu</h3>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
    <section id="mainRight">
        <div><img src="images/home_img.png" width="560" height="242" alt="" title="" border="0" />
        </div>
        <br />
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exertion ullamco laboris nisi ut aliquip ex ea commodo consequat.</blockquote>
        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exertion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voltate velit esse cillum dolore eu fugiat.</p>

    </section>
    <!-- end mainRight -->
</section>
<!-- end mainContent -->
<footer>
    <p>&copy; 2011 Ecologic, Inc. All rights reserved. &nbsp;&nbsp; <a href="http://coffeecup.com">HTML Editor Theme</a> by CoffeeCup Software.</p>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</footer> /*

<div id='menu'>

    <a href='/'>Home</a>

    <!-- Menu for users who are logged in -->
    <?php if($user): ?>

        <a href='/users/logout'>Logout</a>
        <a href='/users/profile'>Profile</a>

        <!-- Menu options for users who are not logged in -->
    <?php else: ?>

        <a href='/users/sbgignup'>Sign up</a>
        <a href='/users/logigdfgn'>Log in</a>

    <?php endif; ?>

</div>

<br>

<?php if(isset($content)) echo $content; ?>

</body>




