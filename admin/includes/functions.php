<?php

require 'config.php';

// making a database connection
$conn = new mysqli(SERVER_NAME, USER_NAME, USER_PASS, DB_NAME);
