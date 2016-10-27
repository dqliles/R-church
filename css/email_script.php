<?PHP
$from="dquvan@gmail.com";
$email=$_POST['email'];
$name=$_POST['name'];
$message=$_POST['message'];

mail($email, $name, $message,"From:".$from);

print "Your message has been sent: <br>@email<br>$name<>$message</p> ";












?>

