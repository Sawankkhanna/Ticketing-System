<html>
    <head>
        <title>

        </title>
    </head>
    <body>
    <header>
        <h1>Hello <?php echo $_POST['username']?></h1>
        <form action="registration.php" method="post">
            <input type="hidden" name="username" value="<?php echo $_POST['username']?>">
            <button type="submit">Registration</button>
        </form>
    </header>
    <!-- <main>
        <h1><?php echo $_POST['start']?></h1>
    </main> -->
    </body>
</html>