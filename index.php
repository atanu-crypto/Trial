<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <meta http-equiv="refresh" content="10"> -->
    <title>FormSet</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body>
    <div class="container">
        <div class="left">
            <form action="validation.php" method="post">
                <h2>Login Here</h2>
                <input type="text" placeholder="Username" name="usernamelogform" >
                <input type="email" placeholder="Email" name="emaillogform" >
                <input type="Password" placeholder="Enter Password" name="passwordlogform" >
                <button type="submit">Log In</button>
            </form>
        </div>
        <div class="right">
            <form action="register.php" method="post">
                <h2>Registration Here</h2>
                <input type="text" placeholder="Username" name="usernameform" >
                <input type="email" placeholder="Email" name="emailform" >
                <input type="Password" placeholder="Enter Password" name="passwordform" >
                <button type="submit">Register</button>
            </form>
        </div> 
    </div>
</body>
</html>
        
