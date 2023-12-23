 <?php
//get data from form  
$first = $_POST['first'];
$last= $_POST['last'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "ops.solicitousbusiness@gmail.com";
// $subject = "Mail From website";
$txt ="First = ". $first . "\r\n  Last = " . $last. "\r\n  Email = " . $email . "\r\n phone =" . $phone  . "\r\n subject =" . $subject . "\r\n Message =" . $message;
$headers = "From:  candi_ai@candiai.com " . "\r\n" .
"CC: candi@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

//redirect
header("Location:thankyou.html");

?> 	
