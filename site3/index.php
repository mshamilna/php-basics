<?php

  // Message vars
  $msg = '';
  $msgClass = '';

  // check for submit
  if (filter_has_var(INPUT_POST, 'submit')) {
    // echo 'submitter';
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // check required fields
    if (!empty($email) && !empty($name) && !empty($message)) {
      # passed

      // check email
      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false ) {
        # Failed
        $msg = 'Please use a valid mail';
        $msgClass = "alert-danger";
      } else {
        # Passed
        $toEmail = 'mshamilna@gmail.com';
        $subject = 'Contact Request From '. $name;
        $body = '<h2>Contact Request</h2>
          <h4>Name</h4><p>'.$name.'</p>
          <h4>Email</h4><p>'.$email.'</p>
          <h4>message</h4><p>'.$message.'</p>
        ';

        // Email Headers
        $headers = "MIME-Version: 1.0 "."\r\n";
        $headers .= "Content-type: text/html;charset=UTF-8"."\r\n";

        // Additional headers
        $headers .= "From: ".$name."<".$email.">"."\r\n";

        if (mail($toEmail, $subject, $body, $headers)) {
          $msg = "your email has sent";
          $msgClass = 'alert-success';
        } else {
          $msg = "your email has NOT sent";
          $msgClass = "alert-danger";
        }
      }
    } else {
      # failed
      $msg = 'Please fill in all fields';
      $msgClass = "alert-danger";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>site3</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/cosmo/bootstrap.min.css'/>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">My Website</a>
      </div>
    </div>
  </nav>
  <div class="container">

    <?php if($msg != ''): ?>
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>  

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
      </div>
      <div class="form-group">
        <label for="Message"></label>
        <textarea name="message" class="form-control" cols="30" rows="10" ><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>