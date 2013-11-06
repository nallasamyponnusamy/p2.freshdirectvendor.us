<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="Description" content="Farmer's Blog">
    <title>Farmer's Blog</title>
    <?php
        define('CSSPATH', '/css/'); //define css path
        $cssItem = 'default.css'; //css item to display
    ?>
    <link rel="stylesheet" href="<?php echo(CSSPATH . "$cssItem"); ?>" type="text/css">
    <!--[if IE]>
    <script src="<?php echo "http://html5shim.googlecode.com/svn/trunk/html5.js"; ?>" </script>
    <![endif]-->

</head>


    <header>
        <h1><a href = '/index.php'> Welcome to <font color="#004000">Farmer's</font> <font color="#FF4640">Blog.</font></a></h2>
        <!-- Menu for users who are logged in -->
<!--        --><?php //if ($user): ?>
<!--            <h3><a href='/users/logout'>Logout</a>-->
<!--               <a href='/users/profile'>Profile</a></h3>-->
<!--            <!-- Menu options for users who are not logged in -->
<!--        --><?php //else: ?>
<!--            <h3><a href='/users/signup'>Sign up</a></h3>-->
<!--            <h3><a href='/users/login'>Log in</a></h3>-->
<!--        --><?php //endif; ?>
    </header>


    <section id="mainContent" class="clear">
        <nav>
            <h3>Welcome</h3>
            <?php if ($user): ?>
                <br/>
                <h4 class="userName"><?php echo $user->first_name; ?> !</h4>
            <?php else: ?>
                <h3 class="userNameGuest">Guest!</h3>
            <?php
            endif; ?>
            <ul>
                <?php if ($user): ?>
                    <!--                <li><h4>Choose Your Options:</h4></li>-->
                    <li><a href='/posts/add'>Add a Post</a></li>
                    <li><a href='/posts/index'>BrowseBlog</a></li>
                    <li><a href='/posts/users'>List Users</a></li>
                    <li><a href='/posts/users'>Your Profile</a></li>
                    <li><a href='/users/logout'>Logout</a></li>
                <?php else: ?>
                    <!--                <h3>This is a members only site.</h3>
                                    <h2>New Users, please sign-up. It's free!</h2>-->
                    <li><a href='/users/signup'> SignUp</a></li>
                    <li><a href='/users/login'> Login </a></li>
                    <li><a href='/users/forgetpwd'> Forgot Password </a></li>
                    <li><a href='/users/login'> Login </a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <section id="mainRight">


<?php if (isset($content)) echo $content; ?>

        </section>
        <!-- end mainRight -->
    </section>

<footer>
    <ul>
        Project 2 - CSCIE15
    </ul>
</footer>
</html>



