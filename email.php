<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = $_POST["txtName"];
    $place = $_POST["txtPlace"];
    $email = $_POST["txtEmail"];
    $mobile = $_POST["txtPhone"];
    $message = $_POST["txtMessage"];

    $to = "neraj@gmail.com"; 
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    // echo $name;
    // echo $place;
    // echo $email;
    // echo $mobile;
    // echo $message;
    // echo $name;
?>

<a href="mailto:n301927@gmail.com?subject=Contact Form&body=Name: <?php echo $name; ?>%0APlace: <?php echo $place; ?>%0AEmail: <?php echo $email; ?>%0AMobile: <?php echo $mobile; ?>%0AMessage: <?php echo $message; ?>">Send My Message</a>


<?php
    // $email_message = "Name: $name\n";
    // $email_message .= "Place: $place\n";
    // $email_message .= "Email: $email\n";
    // $email_message .= "Mobile No: $mobile\n\n";
    // $email_message .= "Message:\n$message";
    // $mailSent = mail($to, $subject, $message, $headers);
    // if ($mailSent) {
    //     echo "Email sent successfully!";
    // } else {
    //     echo "Email sending failed. Please try again later.";
    // }
}
?>