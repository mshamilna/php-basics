<?php

  # SERVER SUPERGLOBAL

  // create Server Array
  $server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
  ]; 

  // foreach ($server as $key => $value) {
  //   echo "<br/> $key : $value";
  // }

  // Create client array
  $client = [
    'Client System info' => $_SERVER['HTTP_USER_AGENT'],
    'Client ip' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT'],
  ];

  // foreach ($client as $key => $value) {
  //   echo "<br/> $key : $value";
  // }