<?PHP
$from="dquvan@gmail.com";
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

mail($email, $subject, $message,"From:".$from);

print "Your message has been sent: </br>@email</br>$subject</>$message</p>";












?>

