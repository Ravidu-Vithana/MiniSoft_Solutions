<?php
require 'PHPMailer/PHPMailerAutoload.php';


if (isset($_POST["fname"], $_POST["lname"], $_POST["email"], $_POST["mobile"], $_POST["description"])) {

    $fname = trim($_POST["fname"]);
    $lname = trim($_POST["lname"]);
    $email = trim($_POST["email"]);
    $mobile = trim($_POST["mobile"]);
    $description = trim($_POST["description"]);

    // echo ($fname . $lname . $email . $mobile . $description);


    if (empty($fname) || !preg_match("/^[\p{L}]+(?:[\s-][\p{L}]+)*$/u", $fname)) {
        echo "Invalid First Name";
    } elseif (empty($lname) || !preg_match("/^[\p{L}]+(?:[\s-][\p{L}]+)*$/u", $lname)) {
        echo "Invalid Last Name";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email) || !PHPMailer::validateAddress($email)) {
        echo "Invalid Email Address";
    } elseif (empty($description)) {
        echo "Please enter the description";
    } elseif (strlen($description) > 1000) {
        echo "Length of description cannot exceed 1000 characters";
    } else {

        $mail = new PHPMailer(true);

        //$mail->SMTPDebug = 3;

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = '####'; //replace #### with email
        $mail->Password = '####'; //replace #### with App password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('####', $fname . ' ' . $lname); //replace #### with email
        $mail->addAddress('####'); //replace #### with email

        $mail->addReplyTo($email, $fname . ' ' . $lname);


        $mail->isHTML(true);
        $mail->Subject = "New email from " . htmlspecialchars($fname) . " " . htmlspecialchars($lname);
        $bodyContent = "<span>Client Email: " . htmlspecialchars($email) . "</span><br/><span>Client Mobile: " . htmlspecialchars($mobile) . "</span><br/><span>Client Description: </span><br/>" . nl2br(htmlspecialchars($description)) . "<span></span>";
        $mail->Body = $bodyContent;


        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
} else {
    echo ("didn't get response");
}
