<?php

$emailmsg= false;
$insert = false;
if(isset($_POST['submit'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    //echo "Success connecting to the db";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $msg  =  $_POST['msg'];

    $sql="INSERT INTO `maa ki rasoi`.`contact1` ( `name`, `phonenumber`, `email`, `msg`, `date-time`) 
    VALUES ('$name', '$phone', '$email','$msg' ,current_timestamp())";

     

     if($con->query($sql) == true){

         //echo "your data has been registered.Our customer care executive will call you shortly";

         //Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }


     
        require 'PHPMailerAutoload.php';
        require 'credential.php';

        $mail = new PHPMailer;

        // $mail->SMTPDebug = 4;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = EMAIL;                 // SMTP username
        $mail->Password = PASS;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom(EMAIL, 'MAA KI Rasoi');
        $mail->addAddress($email);     // Add a recipient

        $mail->addReplyTo(EMAIL);
        // print_r($_FILES['file']); exit;
        //for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
        //	$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
        //}
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'CONTACT REFERNCE';
        $mail->Body    = " <html>
        <body>
        <h3>Your Data has been registered</h3>
            <table style='width:600px;'>
                <tbody>
                    <tr>
                        <td style='width:150px'><strong>Name: </strong></td>
                        <td style='width:400px'>$name</td>
                    </tr>
                    <tr>
                        <td style='width:150px'><strong>Email ID: </strong></td>
                        <td style='width:400px'>$email</td>
                    </tr>
                    <tr>
                        <td style='width:150px'><strong>Mobile No: </strong></td>
                        <td style='width:400px'>$phone</td>
                    </tr>
                </tbody>
            </table>
            <h4>We will call you shortly</h4>
            </body>
            </html>
            "
            ;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
           // echo 'Message has been sent';
            $emailmsg= True;
        }

    



        
    
   
    // Close the database connection
    $con->close();

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
  #contact{
      text-align:center;
      font-size:30px;

  }
  </style>
</head>
<body>
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p></p>
        </div>
      </div>

      
      <div class="container mt-5">

       <p id="contact">THANKS FOR CONTACTING US.....CHECK EMAIL FOR FURTHER UPDATES</p>
        <p id="c1"><b>Behalf:</b>  Maa ki rasoi team</p>
        <a href="index.php">CLICK FOR HOME </a>
      </div>
</body>
</html>
