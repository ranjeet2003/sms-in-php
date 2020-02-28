<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <h1>Admin Login</h1>
    <form action="login.php" method="post">
        <table>
            <tr>
                <td>Username</td><td><input type="text" name="uname" required></td>
            </tr>
            <tr>
                <td>Password</td><td><input type="password" name="pass" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
            </tr>

        </table>
    
    </form>
</body>
</html>