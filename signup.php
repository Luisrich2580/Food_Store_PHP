<?php
include_once('connection.php');

$error = false;
if (isset($_POST['signup'])) {

    //get user input and sanitize

    $username = $_POST['username'];
    $username = strip_tags($username);
    $username = htmlspecialchars($username);

    $password = $_POST['password'];
    $password = strip_tags($password);
    $password = htmlspecialchars($password);

    $confirm_password = $_POST['confirm_password'];
    $confirm_password = strip_tags($confirm_password);
    $confirm_password = htmlspecialchars($confirm_password);

    // user input validation

    $check_duplicate = "SELECT username FROM users  
     WHERE username = '$username'";

    $resultdup = mysqli_query($conn, $check_duplicate);
    $countdup = mysqli_num_rows($resultdup);
    if ($countdup > 0) {
        $error = true;
        $errorUsernameDup = 'Username already taken';
    }

    //check username empty
    if (empty($username)) {
        $error = true;
        $errorUsername = 'Please Enter username';
    }

    //check password empty
    if (empty($password)) {
        $error = true;
        $errorPassword = 'Please Enter password';
    }

    //check length of pasword is lessthan 8
    elseif (strlen($password) < 8) {
        $error = true;
        $errorPassword = 'Add Strong password';
    }

    //compare password and confirm password
    elseif ($password != $confirm_password) {
        $error = true;
        $errorconfirm_Password = 'Check Password Again';
    }


    //encrypt password using MD5 encryption
    // $password = md5($password);


    //insert data to users table
    if (!$error) {
        $sql = "INSERT INTO users (username, password)
                VALUES('$username', '$password')";
        if (mysqli_query($conn, $sql)) {
            $successMsg = 'Register successfully. <a href="./logout.php">click here to login</a>';
        } else {

            //if error display this error message
            echo ('Error! ' . mysqli_error($conn));
        }
    }
}




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
                <h2>Sign Up</h2>

                <form class="form" class="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                    <br>
                    <?php
                    if (isset($successMsg)) {
                    ?>
                        <div>
                            <span></span>

                            <!--Register successful display here-->

                            <?php echo $successMsg; ?>
                        </div>
                    <?php
                    }
                    ?>


                    <div class="form__field">
                        <input type="text" name="username" placeholder="USERNAME" width="100%"><br>
                        <!-- Show username error display-->
                        <span><?php if (isset($errorUsername)) echo $errorUsername; ?><?php if (isset($errorUsernameDup)) echo $errorUsernameDup; ?></span>
                    </div>


                    <div class="form__field">
                        <input type="password" name="password" placeholder="PASSWORD" autocomplete="off"><br>
                        <!-- Show password error display-->
                        <span><?php if (isset($errorPassword)) echo $errorPassword; ?></span>
                    </div>



                    <input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" autocomplete="off"><br>
                    <!-- confirm password error display -->
                    <span><?php if (isset($errorconfirm_Password)) echo $errorconfirm_Password; ?></span>

                    <br>
                    <div class="form__field">
                        <input type="submit" name="signup" value="Sign up">
                    </div>

                    <div>
                        <!--redirect to login page-->
                        <div style="text-align:center"> Have an account? <a href="./logout.php">Login</a> </div>
                    </div>


                </form>



            </div>

    </body>

</html>