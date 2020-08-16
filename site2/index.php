<?php include 'server-info.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web2</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'/>
</head>
<body>
  <div class="container">
    <h1 style="text-align: center;">Server & File info</h1>
    <?php if($server): ?>
      <ul class="list_group">
        <?php foreach($server as $key => $value): ?>
          <li class="list-group-item">
            <strong><?php echo $key; ?> : </strong>
            <?php echo $value; ?>
          </li>
        <?php endforeach ?>
      </ul> 
    <?php endif ?>
  </div>
  <div class="container">
    <h1 style="text-align: center;">Client info</h1>
    <?php if($client): ?>
      <ul class="list_group">
        <?php foreach($client as $key => $value): ?>
          <li class="list-group-item">
            <strong><?php echo $key; ?> : </strong>
            <?php echo $value; ?>
          </li>
        <?php endforeach ?>
      </ul> 
    <?php endif ?>
  </div>
</body>
</html>