<?php

session_id('p7rgbfdmcmquncs51f1qg2qo8e');

require_once('config.php');

session_regenerate_id();

echo session_id();

var_dump($_SESSION);