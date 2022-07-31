<?php
    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) ||  empty($Subject) || empty($Msg))
       {
           header('location:index.php?error');
       }

       else{
           ini_set("sendmail_from", "km825185@gmail.com");
           $to = "mandalkrishna739@gmail.com"; //change receiver address
           $header = "From: km825185@gmail.com \r\n";
           if(mail($to, $Subject, $Msg, $Email, $header))
           {
            header("location:index.php?success");
           }

       }
    }

    else{
        header("location:index.php");
    }
?>