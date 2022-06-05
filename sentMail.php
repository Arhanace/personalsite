<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "arhanace@gmail.com"; 

 $name = $_POST['name']; //getting customer name
 $fromEmail = $_POST['email']; //getting customer email
 $subject1 = "Message from" . "\n" . $_POST['name'];
 $subject2 = "Confirmation: Message was submitted successfully";
 
 //Email body I will receive
 $message = $_POST['message'];
 
 //Message for client confirmation
 $message2 = "Dear" . $name . "\n"
 . "Thank you for contacting me. We will get back to you shortly!";
 
 //Email headers
 $headers = "From: " . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message, $headers); 
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); 
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
}
 
?>