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

    $sql="INSERT INTO `workshop`.`contact` ( `name`, `phonenumber`, `email`, `msg`, `date-time`) 
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

        $mail->setFrom(EMAIL, 'TEAM UNITED');
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
    <title>United Groups of Institution</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="../img/icon-ugi.png" type="image/x-icon">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- JS only -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</head>
<style>
    body{
        background: url('../img/form1.jpg') no-repeat center/cover;
        color: white;
    }
    .container {
        width: 100%;
        height: 60rem;
        margin-top: 2rem;
        margin-top: 2rem;
        /* filter: drop-shadow(0px 0px 2px black); */
    }
</style>

<body><br>
    <center><h1><b>CONTACT US</b></h1><hr></center>
    <center><h3><b>OUR UNITED TEAM WILL CALL YOUS SHORTLY</b></h3><hr></center>
    <center><h4><b><a href="../frontend/index.php">Click Here</a> For Home Page</h3><hr></center>
    
    
    
</body>

</html>

