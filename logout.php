<?php
include_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="Assets/components/style.css">
    </script>
</head>

<body>

    <body class="align">
        <div class="grid align__item">
            <div class="register">
                <img class="site__logo" src="assets/icons/bag.png" width="100" height="84">
                <h2>Log In</h2>
                <form class="form" class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                    <br>
                    <div class="form__field">
                        <input type="text" name="username" placeholder="USERNAME" width="100%"><br>
                    </div>
                    <div class="form__field">
                        <input type="password" name="password" placeholder="PASSWORD" autocomplete="off"><br>
                    </div>
                    <br>
                    <div class="form__field">
                        <input type="submit" name="login" value="Login">
                    </div>
                    <div>
                        <div style="text-align:center">Don't Have an account? <a href="./signup.php">Sign up</a> </div>
                    </div>
                </form>
            </div>
            <?php
            if (isset($_POST['login'])) {

                $username = $_POST['username'];
                $username = strip_tags($username);
                $username = ucwords($username);
                $username = htmlspecialchars($username);


                $password = $_POST['password'];
                $password = strip_tags($password);
                $password = strtolower($password);
                $password = htmlspecialchars($password);



                $sql = "SELECT COUNT(*) as count FROM users WHERE username = '$username' AND password = '$password'";
                $result = $conn->query($sql);

                if ($result) {
                    $row = $result->fetch_assoc();
                    if ($row['count'] > 0) {
                        echo "Sign In Successful";
                    } else {
                        echo "Incorect UserName Or Password!";
                    }
                } else {
                    echo "Error " . $conn->error;
                }
            }
            $conn->close();

            ?>
    </body>

</html>