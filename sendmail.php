<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$to = "anniebaig.ab@gmail.com";
$subject = $_POST['subject'];
$body = $_POST['message'];
$headers = "From: anniebaig.ab@gmail.com";

if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
}
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $name = $_POST['name'] ?? '';
//     $email = $_POST['email'] ?? '';
//     $subject = $_POST['subject'] ?? '';
//     $message = $_POST['message'] ?? '';
    
//     $to = "anniebaig.ab@gmail.com";
//     $headers = "From: $email" . "\r\n" .
//                "Reply-To: $email" . "\r\n" .
//                "X-Mailer: PHP/" . phpversion();
    
//     $email_content = "Name: $name\n";
//     $email_content .= "Email: $email\n\n";
//     $email_content .= "Message:\n$message\n";
    
//     if(mail($to, $subject, $email_content, $headers)) {
//         echo json_encode(['success' => true, 'message' => 'Message has been sent']);
//     } else {
//         echo json_encode(['success' => false, 'message' => 'Failed to send message']);
//     }
//     exit;
// }

// header("HTTP/1.0 404 Not Found");
// echo "404 Not Found";
?>