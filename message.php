 <?php

$name =$_POST['name'];
$email =$_POST['email'];
$message =$_POST['message'];

if( !empty($email) && !empty($message)) {
    if (filter_var($email,FILTER_VALIDATE_EMAIL)){
        $receiver = "nyonaingloon327@gamil.com";
        $subject = "Form: $name <$email>";
        $body   = "Name: $name\nEmail: $email\nMessage: $message \n\nRegards,\n$name ";
        $sender = "Form: $email";
       if(mail( $receiver,$body, $subject,$sender)){
          
          echo "Your message has been sent";
      }else{
          echo "Please fill messsage completly";
      }
     
    }else{
        echo "Enter  vaild email adress";
    }
  
} else{
   echo "Required" ;
}
?> 