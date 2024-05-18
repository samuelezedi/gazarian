<?php
session_start();

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function current_url($url = ''){
    // $path = trim($_SERVER['REQUEST_URI'], '/\\');
    $path = trim($_SERVER['SCRIPT_NAME'], '/\\');
    $pathArr = explode('/',$path);
    $finalpath = end($pathArr);
    $currentpath = substr($finalpath, 0, strpos($finalpath, '.'));
    if($url == $currentpath){
        return true;
    }
    return false;
}


function dbconnection(){
    $conn = new mysqli("127.0.0.1", "root", "", "relief4gaza"); 
    if ($conn === false) { 
        echo ("ERROR: Could not connect. " .$conn->connect_error); 
        return false;
    } 
    return $conn;
}

function getArticles(){
    $conn = dbconnection();
    if($conn){
        $sql = "SELECT * FROM articles ORDER BY date_publish ASC"; 
        $res = $conn->query($sql);
        if($res->num_rows > 0){
            return $res->fetch_all(MYSQLI_ASSOC);
        }
        return false;
    }
    return false;
}

function getArticle(){
    $id = $_GET['read'];
    if(isset($id) && !empty($id)){
        $conn = dbconnection();
        if($conn){
            $sql = "SELECT * FROM articles WHERE id = $id"; 
            $res = $conn->query($sql);
            if($res->num_rows > 0){
                return $res->fetch_all(MYSQLI_ASSOC);
            }
            return header('Location: read.php'); exit();
        }
        return header('Location: read.php'); exit();
    }
    return header('Location: read.php'); exit();
}

function convertDate($d){
    $date=date_create($d);
    return date_format($date,"d M, Y");
}

function sendMail($sender, $subject, $message){
    try {
        $mail = new PHPMailer(true);
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'localhost';   
        $mail->SMTPAuth = false;                 // Set the SMTP server to send through
        // $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        // $mail->Username   = 'YOUREMAIL@gmail.com';                     // SMTP username
        // $mail->Password   = 'YOUREMAILPASSWORD';                               // SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 1025;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($sender, 'Relief4Gaza - Contact Us');
        $mail->addAddress('pushboardstuts@gmail.com');     // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
        return true;
    } catch (\Throwable $th) {
        echo $th->getMessage();
        return false;
    }
}

function contactAction(){
    if(isset($_POST['ctnsubmit'])){
        // Storing name in $name variable 
        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $phone = $_POST['phone']; 
        $subject = $_POST['subject']; 
        $message = $_POST['message']; 
            
        // Storing google recaptcha response 
        // in $recaptcha variable 
        $recaptcha = $_POST['g-recaptcha-response']; 
        $secret_key = '6Lfd3-ApAAAAAHLfeM9l7XvQCs4nMViqGgQ2udWB'; 
      
        // Hitting request to the URL, Google will 
        // respond with success or error scenario 
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
              . $secret_key . '&response=' . $recaptcha; 
      
        // Making request to verify captcha 
        $response = file_get_contents($url); 
      
        // Response return by google is in 
        // JSON format, so we have to parse 
        // that json 
        $response = json_decode($response); 
        // Checking, if response is true or not 
        if ($response->success == true) { 
            // Send email
            $body = "
                <h1>Enquiry</h1>
                <h2>Name: $name</h2>
                <h2>Email Address: $email</h2>
                <h2>Phone: $phone</h2>
                <h2>Subject: $subject</h2>
                <h2>Message:</h2>
                <p>$message</p>
            ";
            if(sendMail($email, $subject, $body)){
                // echo '<script>alert("Google reCAPTACHA verified")</script>'; 
                setFlashMessage('Email Sent');
            }
            header('Location: contact.php'); exit();
        } else { 
            echo '<script>alert("Error in Google reCAPTACHA")</script>'; 
            header('Location: contact.php'); exit();
        } 
    }  
}

function setFlashMessage($message){
    $_SESSION['flash_message'] = $message;
}

function flashMessage(){
    if(isset($_SESSION['flash_message'])) {
        $message = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        echo "<script>
                Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '$message',
                showConfirmButton: false,
                timer: 2500
                });
            </script>";
     }
}


?>