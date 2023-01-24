<?php
session_start();

require_once('function.php');

    // this if statement used a function here to check if all the variables are set when declared, else return an error msg,
    // Don't communicate with sql database
    if(isset($_POST['submit'])){
        // print_r($_POST);
        // die();

        $sanval = sanitizer($_POST);

        $fullname = isset($sanval['fullname'])?trim($sanval['fullname']):'';
        $username = isset($sanval['username'])?trim($sanval['username']):'';
        $email = isset($sanval['email'])?trim($sanval['email']):'';
        $address = isset($sanval['address'])?trim($sanval['address']):'';
        $phone = isset($sanval['phone'])?trim($sanval['phone']):'';
        $password = isset($sanval['password'])?trim($sanval['password']):'';
        $conpassword = isset($sanval['conpassword'])?trim($sanval['conpassword']):'';


        //the if statement below checks if the input are empty, return an error message else send data to the sql database

        if(empty($fullname) OR empty($username) OR empty($email) OR empty($address) OR empty($phone) OR empty($password) OR empty($conpassword)){
            $error = 'input data in all fields';
            header('location: /finesse/register.php?error='.$error);
            return false;
        }else{
            $fullname = mysql_prep($connect, trimData($fullname));
            $username = mysql_prep($connect, trimData($username));
            $email = mysql_prep($connect, trimData($email));
            $address = mysql_prep($connect, trimData($address));
            $phone = mysql_prep($connect, trimData($phone));
            $password = mysql_prep($connect, trimData($password));
            $conpassword = mysql_prep($connect, trimData($conpassword));
        }
        
        // the if statements here validates if the email here is correct and if password matches with confirm password
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = 'enter a correct email address';
            header('location: /finesse/register.php?error='.$error);
            return false;
        }
        if($password != $conpassword){
            $error = 'password mismatch';
            header('location: /finesse/register.php?error='.$error);
            return false;
        }else{
            $checkEmail = "SELECT * FROM pay_users WHERE email = '$email'";
            $result = mysqli_query($connect, $checkEmail);
            if(mysqli_num_rows($result) == 1){
                $error = 'existing user';
                header('location: /finesse/register.php?error='.$error);
                return false; 
            }else{
                $newPass = passEncrypt($password);
                $date = date('Y-m-d');
                $db_stmt = $db_conn->prepare("INSERT INTO pay_users (fullname, username, uaddress, telephone, email, password, createddate) VALUES ('$fullname', '$username', '$email', '$address', '$phone', '$newPass', '$date')");
                $db_stmt->bind_param("sssssss", $fullname, $username, $address, $phone, $email, $newPass, $date);
                $db_stmt->execute();

                $resInfo = mysqli_query($connect, $db_stmt);

                if($resInfo){
                    $successMsg = 'Now Login';
                    header('location: /finesse/login.php?success='.$successMsg);
                    return true;
                }else{
                    $error = 'error creating accoount, Try Again';
                    header('location: /finesse/register.php?error='.$error);
                    return false;
                }
            }
        }

    }else{
        $error = 'Trespassing !';
        header('location: /finesse/index.php?error='.$error);
    }
?>