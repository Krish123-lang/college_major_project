<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact us/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2">Contact Us</h2>
                        <hr>
                        <?php
                        $Msg = " ";
                        if (isset($_GET['error'])) {
                            $Msg = " Please Fill in the blanks ";
                            echo '<div class = "alert alert-danger">' . $Msg . '</div>';
                        }

                        if (isset($_GET['success'])) {
                            $Msg = " Your message has been sent !!! ";
                            echo '<div class = "alert alert-success">' . $Msg . '</div>';
                        }

                        ?>
                    </div>

                    <div class="card-body">
                        <form action="contact us/process1.php" method="POST">
                            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Your Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Message"></textarea>
                            <button class="btn btn-success" name="btn-send">Send Email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    OR
   
</body>

</html>

