<?php 


   
	$youremail = 'yourmail@website.com';//enter your own email here!


if(isset($_POST["submit"])){
 
   // Creating the email
   $msg      = "Send by: ".$_POST['field1footer']."\r\n\r\n";
   $msg     .= "Emailaddress: ".$_POST['field2footer']."\r\n\r\n";
   $msg     .= "Message:\r\n";
   $msg     .= $_POST['field3footer']."\r\n";
   
   $subject  = "Email from ".$_POST['field1footer'];
   $headers  = "From: ".$youremail;
   $headers .= "Reply-To: ".$_POST['field1footer'];
   
   
// checking for empty fields 
if((strlen($_POST['field1footer']) > 1 ) || (strlen($_POST['field2footer']) > 1 ) || (strlen($_POST['field3footer']) > 1 )){
	
		 
    //Sending the email
   $msg = trim(stripslashes($msg));
   
   //Sending the email	
   if (mail($youremail, $subject, $msg, $headers)){ 
   
       // Redirecting to the thank you page
	   header("Location: messagesend.html" );
	   
     }else{

	   // If the mail is not send 
	   header("Location: senderror.html" );
	   
   }
   
	}else{
		
	   // if empty
	   header("Location: senderror.html" );

	}   
  
}


?> 
