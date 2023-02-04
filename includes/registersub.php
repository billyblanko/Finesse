<?php
    session_start();

    require_once('function.php');
    require_once('connection.php');

      // Check database connection
      if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // this if statement used a function here to check if all the variables are set when declared, else return an error msg,
    // Don't communicate with sql database

    if(isset($_POST['submit'])){
        // print_r($_POST);
        // die();

        $sanval = sanitizer($_POST);

        //if ths inputs are set sanitize, trim and validate the data

        $fullname = isset($sanval['fullname'])?trim($sanval['fullname']):'';
        $username = isset($sanval['username'])?trim($sanval['username']):'';
        $email = isset($sanval['email'])?trim($sanval['email']):'';
        $address = isset($sanval['address'])?trim($sanval['address']):'';
        $phone = isset($sanval['phone'])?trim($sanval['phone']):'';
        $birthday = isset($sanval['birthday'])?trim($sanval['birthday']):'';
        $password = isset($sanval['password'])?trim($sanval['password']):'';
        $conpassword = isset($sanval['conpassword'])?trim($sanval['conpassword']):'';

         //the if statement below checks if the input are empty, return an error message else send data to the sql database

          if(!empty($fullname) || !empty($username) || !empty($email) || !empty($address) || !empty($phone) || !empty($birthday) || !empty($password) || !empty($conpassword)){
            $fullname = mysqli_real_escape_string($connect, trimInfo($fullname));
            $username = mysqli_real_escape_string($connect, trimInfo($username));
            $email = mysqli_real_escape_string($connect, trimInfo($email));
            $address = mysqli_real_escape_string($connect, trimInfo($address));
            $phone = mysqli_real_escape_string($connect, trimInfo($phone));
            $birthday = mysqli_real_escape_string($connect, trimInfo($birthday));
            $password = mysqli_real_escape_string($connect, trimInfo($password));
            $conpassword = mysqli_real_escape_string($connect, trimInfo($conpassword));
          }else{
            $error = 'input data in all fields';
            header('location: http://localhost/finesse/register.php?error=' . urlencode($error));
            exit();
          }

          
          
          // the if statements here validates if the email here is correct and if password matches with confirm password

          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = 'enter a correct email address';
            header('location: http://localhost/finesse/register.php?error=' . urlencode($error));
            exit();
          }
          if($password != $conpassword){
            $error = 'password mismatch';
            header('location: http://localhost/finesse/register.php?error=' . urlencode($error));
            exit();
          }else{
            $checkEmail = "SELECT * FROM pay_users WHERE email = '$email'";
            $result = mysqli_query($connect, $checkEmail);
            if(mysqli_num_rows($result) == 1){
                $error = 'User Already Exist';
                header('location: http://localhost/finesse/register.php?error=' . urlencode($error));
                exit(); 
            }else{
                $newPass = passEncrypt($password);
                $date = date('Y-m-d');
                $db_stmt = $connect->prepare("INSERT INTO pay_users (fullname, username, uaddress, telephone, birthday, email, password, createddate) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $db_stmt->bind_param("ssssssss", $fullname, $username, $address, $phone, $birthday, $email, $newPass, $date);
                $db_stmt->execute();

                if($db_stmt->execute()){
                    if($db_stmt->affected_rows > 0){
                        $successMsg = 'Now Login';
                        header('location: http://localhost/finesse/login.php?success='.urlencode($successMsg));
                        exit(); 
                    }
                }else{
                    $error = 'error creating account, Try Again';
                    header('location: http://localhost/finesse/register.php?error=' . urlencode($error));
                    exit(); 
                }   
            }
          }
        }else{
            $error = 'Trespassing !';
            header('location: http://localhost/finesse/index.php?error='.urlencode($error));
            exit();
        }
                
?>