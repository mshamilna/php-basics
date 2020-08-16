<?php

  // check for posted data
  // if(filter_has_var(INPUT_POST, 'data')) {
  //   echo 'data found';
  // } else {
  //   echo 'no data';
  // }

  // if(filter_has_var(INPUT_POST, 'data')) {
  //   $email = $_POST['data'];
  //   echo "<br/> $email";

  //   $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  //   echo "<br/>$email";

    // if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
    //   echo "<br/> email is valid";
    // } else {
    //   echo "<br/> email is not valid";
    // }

  //   $var = '<script>alert(2)</script>';
  //   echo "<br/>". filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
  // }

  // $filters = array(
  //   "data" => FILTER_VALIDATE_EMAIL,
  //   "data2" => array(
  //     "filter" => FILTER_VALIDATE_INT,
  //     "options" => array(
  //       "min_range" => 1,
  //       "max_range" => 100
  //     )
  //   )
  // );

  // print_r(filter_input_array(INPUT_POST, $filters));

  $arr = array(
    'name' => "shamil",
    "age" => "26",
    "email" => "mshamilna@gmail.com"
  );
  $filters = array(
    "name" => array(
      "filter" => FILTER_CALLBACK,
      "options" => "ucwords"
    ),
    "age" => array(
      "filter" => FILTER_VALIDATE_INT,
      "options" => array(
        "min_range" => 1,
        "max_range" => 120
      )
    ),
    "email" => FILTER_VALIDATE_EMAIL
    
  );

  print_r(filter_var_array($arr, $filters));

?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <input type="text" name="data">
  <input type="text" name="data2">
  <button type="submit">Submit</button>
</form>