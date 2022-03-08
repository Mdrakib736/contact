<?php
if(isset($_POST['contact_btn'])){
       $name=$_POST['user_name'];
       $email=$_POST['user_email'];
       $subject=$_POST['user_subject'];
       $msg=$_POST['user_msg'];
       $to="jsimoddinmd@gmail.com"
       $header="from:$email";
       if(mail($to,$Subject,$msg,$header)){
        $msg1="Message submitted successfully"
       }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contact">
     <form method="post">
         <strong>
             <?php if(!empty($msg1)){
                 echo $msg1;
             } ?>
         </strong>
         <h2>Contact Us</h2>

         <input type="text" placeholder="Name" name="user_name" required>

         <input type="email" placeholder="Email" name="user_email" required>

         <input type="text" placeholder="Subject" name="user_subject" required>

         <textarea placeholder="Type Massage"  rows="6" name="user_msg" required></textarea>
         <button name="contact_btn">Send Massage</button>
     </form>
    </div>
</body>
</html>