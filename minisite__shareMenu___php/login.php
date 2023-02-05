<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <?php
    include 'menu.php'
    ?>
    <div class="container">

        <form action="process.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username">

            <label for="password">Password</label>
            <input type="text" id="password" name="password">

            <input type="submit" name="submit"></input>
        </form>
        
    </div>
</body>

</html>