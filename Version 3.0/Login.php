<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASC Motors</title>
    <link rel="stylesheet" href="/css/Login.css">
</head>
<?php include 'Header.php'; ?>

<body>
    <h1>Please enter your username and password</h1>
    
    <form action="Index.php" method="post">
        <div class="imgcontainer">
            <center><img src="images/profile.png" alt="Avatar" class="avatar"></center>
        </div>

        <div class="container">
            <label for="uname"><b>Username:</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password:</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
                
            <button type="submit">Login</button>
        </div>
    </form>

</body>
<footer> 
    <div class="container" style="background-color:#f1f1f1">
        <a href="Index.php"><button type="button" class="cancelbtn">Cancel</button></a>
        <a href="#"><span class="psw">Forgot password?</a></span>
    </div>
</footer>
</html>
