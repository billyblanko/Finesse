<?php
   session_start();

   require_once('function.php');
   require_once('connection.php');
   


   if(isset($_POST['submit'])){
    $sanval = sanitizer($_POST);

    $email = isset($sanval['email'])?trim($sanval['email']):'';
    $password = isset($sanval['password'])?trim($sanval['password']):'';

    if(empty($email) || empty($password)){
        $error = 'Input Fields Required';
        header('location: /finesse/login.php?error='.$error);
        exit();
    }else{
        $email = mysqli_real_escape_string($connect, trimInfo($email));
        $password = mysqli_real_escape_string($connect, trimInfo($password));
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'Enter correct email address';
        header('location: /finesse/login.php?error='.$error);
        exit();
    }

    $newPass = passEncrypt($password);
    $checkemail = "SELECT * FROM pay_users WHERE email = '$email' AND password = '$newPass' AND deleted = 1";
    $result = mysqli_query($connect, $checkemail);


    if(!$result){
        $error = 'Error with database query: ' . mysqli_error($connect);
        header('location: /finesse/login.php?error='.$error);
        exit();
    }

    if(mysqli_num_rows($result) == 1){
        $rows = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $rows['id'];
        
        if(isset($_SESSION['id'])){
            setcookie('payola', base64_encode(json_encode(['email' => $email, 'password' => $password])), time() + (86400 * 30), "/");
            header('location: /finesse/user.php');
            exit();
        }else{
            $error = 'Error Logging User';
            header('location: /finesse/login.php?error='.$error);
            exit();
        }
    }else{
        $error = 'User Does Not Exist';
        header('location: /finesse/login.php?error='.$error);
        exit();
    }
}else{
    $error = 'Trespassing !';
    header('location: /finesse/index.php?error='.$error);
    exit();
}
?>