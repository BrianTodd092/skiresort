 <!DOCTYPE html>
  <head>
  <title> PHP mail script</title>
  <meta http-equiv="Content-type"
        content="text/html; charset=utf-8"/>
 </head>
 <body>
  <?php
  //3 lines of code to retrieve the form data sent  the "post" method
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobileno=$_POST['mobileno'];
    $phoneno=$_POST['phoneno'];
    $address=$_POST['address'];
    $bookinginquiry=$_POST['bookinginquiry'];


/*creation of the $msg variable and
 supplementally adding more details to it.*/
    $msg="EMAIL SENT FROM WEBSITE:\r\n " ;
    $msg.="Sender Name: $name\r\n ";
    $msg.="Sender E-mail: $email\r\n ";
    $msg.="Moblie No: $mobileno\r\n ";
    $msg.="Phone No: $phoneno\r\n ";
    $msg.="Address: $address\r\n ";
    $msg.="Booking Inquiry: $bookinginquiry\r\n";


    $to="";   // Enter recieving email address
    $subject="web Site Feedback";   // subject should the email display
    $mailheaders="From: $email\r\n";  // email   display for the sender


    $formsent=mail($to, $subject, $msg, $mailheaders); //send the email
    if ($formsent)
     {
      echo "<p> Form Recieved</p>";
     }
     else
     {
      echo "<p> The form has not been sent !</p>";
     }
     ?>


    <p>Detail of form!<br />
       <?php
       echo  $msg;
       ?>

       </p>
   <p><a href="skicontact.html">go back</a></p>

 </body>
</html>
