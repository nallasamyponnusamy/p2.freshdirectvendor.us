<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="Description" content="Farmer's Blog">
    <title>Farmer's Blog</title>
    <link rel="stylesheet" href="css/default.css"/>
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
    <header>
        <h1><a href = '/index.php'> Welcome to <font color="#004000">Farmer's</font> <font color="#FF4640">Blog.</font></a></h2>
        <!-- Menu for users who are logged in -->
        <?php if ($user): ?>
            <h3><a href='/users/logout'>Logout</a>
               <a href='/users/profile'>Profile</a></h3>
            <!-- Menu options for users who are not logged in -->
        <?php else: ?>
            <h3><a href='/users/signup'>Sign up</a></h3>
            <h3><a href='/users/login'>Log in</a></h3>
        <?php endif; ?>
    </header>

<?php if (isset($content)) echo $content; ?>

</body>
</html>



