<?php

  // Load Config
  require_once 'config/config.php';

  // Helps to create sessions in the web application
  require_once('helpers/session_helper.php');

  //Helps to redirect through the application
  require_once('helpers/url_helper.php');

  // Autoload Core Libraries
  spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
  });