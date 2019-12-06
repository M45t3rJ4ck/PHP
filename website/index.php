<?php
    // Message variables:
    $msg = '';
    $msgClass = '';

    // Check for submit:
    if(filter_has_var(INPUT_POST, 'submit')){
        // Get form data:
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check required fields:
        if(!empty($name) && !empty($email) && !empty($message)){
            // Passed:
            // Check email:
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                // Failed:
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            } else {
                // Passed:
                // Recipient email:
                $toEmail = 'nuewave@coding.net';
                // Subject:
                $subject = 'Contact Regquest From ' . $name;
                // Body:
                $body = '<h2>Contact Request</h2><br><h4>Name</h4><br><p>'.$name.'</p><br><h4>Email</h4><br><p>'.$email.'</p><br><h4>Message</h4><br><p>'.$message.'</p>';
                // Email headers:
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .=  "Content-Type: text/html; charset=UTF-8" . "\r\n";
                // Additional headers:
                $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

                if(mail($toEmail, $subject, $body, $headers)){
                    // Email sent:
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                } else {
                    // Email not sent:
                    $msg = 'Your email was not sent';
                    $msgClass = 'alert-danger';
                }
            };
        } else {
            // Failed:
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        };
    };
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <link rel="stylesheet" href="bootstrap.css">

        <title>Contact Us</title>

    </head>

    <body>

        <nav class="navbar navbar-dark bg-dark">

            <div class="container">

                <div class="navbar-header">

                    <a class="navbar-brand" href="index.php">My Website</a>

                </div>

            </div>

        </nav>

        <div class="container">

            <?php if($msg != ''): ?>

                <div class="alert <?php echo $msgClass; ?>">

                    <?php echo $msg; ?>

                </div>

            <?php endif; ?>

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                <div class="form-group">

                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : '' ?>"/>

                </div>
                <div class="form-group">

                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '' ?>"/>

                </div>
                <div class="form-group">

                    <label>Message</label>
                    <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : '' ?></textarea>

                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>

    </body>

</html>