<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="Description" content="Farmer's Blog">
    <title>Farmer's Blog!</title>
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
        <h1><a href = '/index.php'> ..for farming community!</a></h1>
        <h2 class="blog">Announcement Portal</h2>
    </header>


    <section id="mainContent" class="clear">
        <nav>
            <!-- Welcome Message for the user based on his/her login status -->
            <h3>Welcome</h3>
            <?php if ($user): ?>
                <br/>
                <!-- If the user has already logged in Greet with First Name -->
                <h3 class="userName"><?php echo $user->first_name; ?> !</h3>
            <?php else: ?>
                <!-- If the user has NOT logged in Greet them as 'GUEST!' -->
                <h3 class="userNameGuest">Guest!</h3>
            <?php
            endif; ?>
            <ul>
                <?php if ($user): ?>
                    <!-- Menu for users who are logged in -->
                    <li><a href='/posts/add'>Add a Post</a></li>
                    <li><a href='/posts/index'>BrowseBlog</a></li>
                    <li><a href='/posts/users'>List Users</a></li>
                    <li><a href='/users/logout'>Logout</a></li>
                <?php else: ?>
                    <!-- Menu for users who are NOT logged in -->
                    <li><a href='/users/signup'> SignUp</a></li>
                    <li><a href='/users/login'> Login </a></li>
                    <li><a href='/users/forgetpwd'> Forgot Password </a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <section id="mainRight">
            <?php if (isset($content)) echo $content; ?>
        </section>
        <!-- end mainRight -->
    </section>

    <footer>

            Project 2 - CSCIE15
       
    </footer>
</html>



