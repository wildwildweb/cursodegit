<?php 

  
   
	$youremail = 'yourmail@website.com';//enter your own email here!

	//
	// main form
	//

if(isset($_POST["submit"])){
 
   // Creating the email
   $msg      = "Send by: ".$_POST['field1']."\r\n\r\n";
   $msg     .= "Emailaddress: ".$_POST['field2']."\r\n\r\n";
   $msg     .= "Website: ".$_POST['field3']."\r\n\r\n";
   $msg     .= "Phone: ".$_POST['field4']."\r\n\r\n";
   $msg     .= "Subject: ".$_POST['field5']."\r\n\r\n";
   $msg     .= "Message:\r\n";
   $msg     .= $_POST['field6']."\r\n";
   
   $subject  = "Email from ".$_POST['field1'];
   $headers  = "From: ".$youremail;
   $headers .= "Reply-To: ".$_POST['field1'];
   
// checking for empty fields 
if((strlen($_POST['field1']) > 1 ) || (strlen($_POST['field2']) > 1 ) || (strlen($_POST['field5']) > 1 ) || (strlen($_POST['field6']) > 1 )){
	
		 
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
		
	   // if fields are empty
	   header("Location: senderror.html" );
	}   
  
}

?> 
