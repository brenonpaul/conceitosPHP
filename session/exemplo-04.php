<?php

session_id('721op97p8r2j39vc6std4ct0i1');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>