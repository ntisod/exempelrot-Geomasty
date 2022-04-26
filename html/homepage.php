<?php
    session_start();

    if (!isset($_SESSION['luser'])) {
        echo "Please Login again";
        echo "<br>";
        echo "<a href='http://localhost:8080/html/login.php'> Click Here to Login </a>";
    }
    else {
        $now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION['expire']) {
            session_destroy();
            echo "Your session has expired!";
            echo "<br>"; 
            echo "<a href='http://localhost:8080/html/login.php'> Login here </a>";
        }
        else { //Starting this else one [else1]
?>
            <!-- From here all HTML coding can be done -->
            <html>
                Welcome
                <?php
                    echo $_SESSION['luser'];
                    echo "<br>";
                    echo "<a href='http://localhost:8080/html/logout.php'> Log out </a>";
                ?>
            </html>
<?php
        }
    }
?>