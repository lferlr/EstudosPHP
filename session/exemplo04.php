<?php

session_id('a34g6vg0mbf62jb0pkb52vpgn3');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>