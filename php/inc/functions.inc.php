<?php 

function is_post_request(): bool {
    return strtoupper($_SERVER['REQUEST_METHOD']) === 'POST';
}

function hasEmptyInput($firstName, $lastName, $username, $email, $password, $rePassword, $phone, $address) : bool {

    if ( empty($firstName) || empty($lastName) || empty($username) || empty($email) || empty($password) || empty($rePassword) || empty($phone) || empty($address) ) { 
        return true; 
    }
    return false;

}

function hasInvalidUsername($username): bool {
    if ( ! preg_match( "/^[a-zA-Z0-9]*$/", $username) ) {
        return true;
    }
    return false;
}

function hasInvalidEmail($email): bool {
    if ( ! filter_var($email, FILTER_VALIDATE_EMAIL) ) { 
        return true;
    }
    return false;
}

function hasInvalidPhone($phone): bool {
    if (! preg_match('/^[0-9]{10}+$/', $phone)) {
        return true;
    }
    return false;
}


function hasUnmatchingPassword($password, $rePassword): bool {
    if ($password !== $rePassword) {
        return true;
    }
    return false;
}

function userAlreadyExists($conn, $username, $email) {
    $sql = "SELECT * FROM user WHERE username = ? OR email = ?";
    $stmt = mysqli_stmt_init($conn);

    if ( ! mysqli_stmt_prepare($stmt, $sql) ) {
        header("login.php?error=dbNotOpen");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);

    mysqli_stmt_execute($stmt);

    $resultsData = mysqli_stmt_get_result($stmt);

    if ( $row = mysqli_fetch_assoc($resultsData) ) { 
        return $row; 
    } else { 
        return false; 
    }
}

function createNewUser($conn, $firstName, $lastName, $username, $email, $password, $rePassword, $phone, $address) {

    $sql = "INSERT INTO user (first_name, last_name, username, email, password, phone, address) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if ( ! mysqli_stmt_prepare($stmt, $sql) ) {
        header("login.php?error=dbNotOpen");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssss", $firstName, $lastName, $username, $email, $hashedPassword, $phone, $address );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close( $stmt );
    header("location: login.php");
    exit();

}

function hasEmptyFields($usernameOrEmail, $pwd) : bool {
    if ( empty($usernameOrEmail) || empty($pwd) ) { 
        return true; 
    }
    return false;
}

function loginUser($conn, $usernameOrEmail, $userPassword) {
    $user = getUserInfo($conn, $usernameOrEmail, $usernameOrEmail);

    if ($user === false) {
        header("location: login.php?error=userDoesntExist");
        exit();
    }


    $DbPassword = $user['password'];
    // $passwordMatch = verify_password($DbPassword, $userPassword);
    $passwordMatch = password_verify($userPassword, $DbPassword);

    if ($passwordMatch === false ) {
        header("location: login.php?error=incorrectPassword");
        exit();
    }

    session_start();
    // put all user info into the session
    $_SESSION['username'] = $user['username'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['phone'] = $user['phone'];
    $_SESSION['firstName'] = $user['firstName'];
    $_SESSION['lastName'] = $user['lastName'];
    $_SESSION['address'] = $user['address'];

    header("location: ../index.php");
    exit();
}

function verify_password($DbPassword, $userPassword) : bool {
    $hashedUserPassword = password_hash($userPassword, PASSWORD_DEFAULT);
    if ($DbPassword == $hashedUserPassword) {
        return true;
    }
    return false;
}

function getUserInfo($conn, $username, $email) {
    $sql = "SELECT * FROM user WHERE username = ? OR email = ?";
    $stmt = mysqli_stmt_init($conn);

    if ( ! mysqli_stmt_prepare($stmt, $sql) ) {
        header("login.php?error=dbNotOpen");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);

    mysqli_stmt_execute($stmt);

    $resultsData = mysqli_stmt_get_result($stmt);

    if ( $row = mysqli_fetch_assoc($resultsData) ) { 
        return $row; 
    } else { 
        return false; 
    }
}