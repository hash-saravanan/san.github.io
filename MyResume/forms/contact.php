 
   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name = $_POST["name"];
     $email = $_POST["email"];
     $subject = $_POST["subject"];
     $message = $_POST["message"];
   
     $to = "saravanansan83@gmail.com"; // Replace with your email address
     $subject = "New Resume Contact Form Submission";
     $headers = "From: $email";
   
     if (mail($to, $subject, $message, $headers)) {
       echo "Message sent successfully!";
     } else {
       echo "Error sending message.";
     }
   }
   ?>
   
 
