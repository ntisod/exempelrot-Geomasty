<?php
    session_start();
?>

<html>
    <form name="form1" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td><input type="submit" value="SignIn" name="password"></td>
            </tr>
        </table>
    </form>
</html>

<?php
    if (isset($_POST['submit'])) {
        $v1 = $_POST['username'];
        $v2 = $_POST['password'];
        $v3 = $_POST['username'];
        $v4 = $_POST['password'];
        if ($v1 == $v3 && $v2 == $v4) {
            $_SESSION['luser'] = $v1;
            $_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
            $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);
            header('Location: http://localhost:8080/includes/homepage.php');
        } else {
            echo "Please enter the username or password again!";
        }
    }
?>